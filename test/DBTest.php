<?php

namespace Test\test;

use PHPUnit\Framework\TestCase;

class DBTest extends TestCase
{

    protected $db;

    protected function setUp(): void
    {
        $this->db = new \App\utils\database\mysql\MysqlDataBase();
    }

    public function test_mysql_connect()
    {

        if ($this->db) {
            $this->assertIsObject($this->db);
        }
    }

    protected function tearDown(): void
    {
        $this->db;
    }
}
