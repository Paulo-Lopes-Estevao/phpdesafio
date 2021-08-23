<?php

namespace App\app\repository;

use App\app\repository\interfaces\DevedorRepositoryInterface;
use App\entities\Devedor;
use App\utils\database\mysql\MysqlDataBase;

class DevedorRepository implements DevedorRepositoryInterface
{

    private $db;

    public function __construct()
    {
        $this->db = new MysqlDataBase();
    }

    public function Create(Devedor $devedor): array
    {
                $result = $this->db->select("INSERT INTO tb_devedor(nome,cpf,datanascimento,endereco,descricaotitulo,valor,datavencimento) 
                VALUES(:nome,:cpf,:datanascimento,:endereco,:descricaotitulo,:valor,:datavencimento)", array(
                    ":nome" => $devedor->getNome(),
                    ":cpf" => $devedor->getCpf(),
                    ":datanascimento" => $devedor->getDataNascimento(),
                    ":endereco"=>$devedor->getEndereco(),
                    ":descricaotitulo" => $devedor->getDescricaoTitulo(),
                    ":valor" => $devedor->getValor(),
                    ":datavencimento" => $devedor->getDataVencimento()
                ));
        
                return $result;

    }

    public function Read()
    {
        $result = $this->db->select("SELECT * from tb_devedor");
        return $result;
    }

    public function Update(Devedor $devedor, int $id)
    {
        $result = $this->db->query("UPDATE tb_usuarios SET nome = :nome, cpf = :cpf, datanascimento = :datanascimento, endereco = :endereco, descricaotitulo = :descricaotitulo, valor = :valor, datavencimento = :datavencimento WHERE id = :ID",array(
            ":nome" => $devedor->getNome(),
            ":cpf" => $devedor->getCpf(),
            ":datanascimento" => $devedor->getDataNascimento(),
            ":endereco"=>$devedor->getEndereco(),
            ":descricaotitulo" => $devedor->getDescricaoTitulo(),
            ":valor" => $devedor->getValor(),
            ":datavencimento" => $devedor->getDataVencimento(),
            ':ID'=> $id
        ));
        return $result;
    }

    public function Delete(int $id)
    {
        $this->devedorRepository->Delete($id);
    }
}
