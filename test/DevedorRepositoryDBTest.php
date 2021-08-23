<?php

namespace Test\test;

use App\app\repository\DevedorRepository;
use App\entities\Devedor;
use PHPUnit\Framework\TestCase;

class DevedorRepositoryDBTest extends TestCase
{

    protected $db;
    protected $repository;

    protected function setUp(): void
    {
        $this->db = new \App\utils\database\mysql\MysqlDataBase();
        $this->repository = new DevedorRepository();
        $this->devedor = new Devedor();
    }

    public function test_mysql_connect()
    {

        if ($this->db) {
            $this->assertIsObject($this->db);
        }
    }


    public function create_devedor()
    {

        $this->devedor->setNome("Paulo");
        $this->devedor->setCpf("585.344.703-32");
        $this->devedor->setDataNascimento("2000-09-09");
        $this->devedor->setEndereco("Coritiba");
        $this->devedor->setDescricaoTitulo("Divida foi paga");
        $this->devedor->setValor("6000.00");
        $this->devedor->setDataVencimento("2023-10-09");
        $data = $this->repository->Create($this->devedor);
        $this->assertIsArray($data);
    }

    public function test_read_devedor()
    {
        $data = $this->repository->Read();
        var_dump($data);
        $this->assertIsArray($data);
    }

    public function test_update_devedor()
    {
        $this->devedor->setNome("Paulo");
        $this->devedor->setCpf("585.344.703-32");
        $this->devedor->setDataNascimento("2000-09-09");
        $this->devedor->setEndereco("Coritiba");
        $this->devedor->setDescricaoTitulo("Divida foi paga");
        $this->devedor->setValor("10000");
        $this->devedor->setDataVencimento("2023-10-09");
        $data = $this->repository->Update($this->devedor, 1);
        $this->assertIsArray($data);
    }

    public function test_delete_devedor()
    {
        $data = $this->repository->Delete(1);
        $this->assertIsArray($data);
    }

    protected function tearDown(): void
    {
        $this->db;
        $this->repository;
        $this->devedor;
    }
}
