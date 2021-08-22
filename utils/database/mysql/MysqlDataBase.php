<?php

namespace App\utils\database\mysql;

use App\utils\database\connect\Connect;

class MysqlDataBase extends Connect{

    const DRIVE = "mysql";
    const HOSTNAME = "localhost";
	const USERNAME = "root";
	const PASSWORD = "";
	const DBNAME = "db_divida";

    public function __construct()
	{

		return parent::__construct(self::DRIVE,self::DBNAME,self::HOSTNAME,self::USERNAME,self::PASSWORD);

	}

}