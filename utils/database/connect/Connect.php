<?php

namespace App\utils\database\connect;

class Connect
{

	private $conn;

	public function __construct($drive, $dbname, $hostname, $username, $password)
	{

		$this->conn = new \PDO(
			"$drive:dbname=" . $dbname . ";host=" . $hostname,
			$username,
			$password
		);
	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {

			$this->bindParam($statement, $key, $value);
		}
	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array())
	{
		$this->conn->beginTransaction();
		
		try {
			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			$this->conn->commit();
		} catch (\PDOException $th) {
			$this->conn->rollBack();
			throw $th;
		}
	}

	public function select($rawQuery, $params = array()): array
	{
		$this->conn->beginTransaction();

		try {
			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

			$this->conn->commit();
		} catch (\PDOException $th) {
			$this->conn->rollBack();
			throw $th;
		}
	}
}
