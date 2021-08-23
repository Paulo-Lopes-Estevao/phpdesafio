<?php

namespace App\utils\database\connect;

use PDO;

class Connect
{

	private $conexao;

	public function __construct($drive, $dbname, $hostname, $username, $password)
	{

		$this->conexao = new PDO(
			"$drive:dbname=" . $dbname . ";host=" . $hostname,
			$username,
			$password
		);
	}

	private function paramter($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
			$this->setParam($statement, $key, $value);
		}
	}

	private function setParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);
	}


	public function query($query, $param = array())
	{
		
		try {
			$stm = $this->conexao->prepare($query);
			$this->paramter($stm, $param);
			$stm->execute();
			return $stm;
		} catch (\PDOException $th) {
			throw $th;
		}
	}

	public function select($query, $param = array())
	{

		$stmt = $this->query($query, $param);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
