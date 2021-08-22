<?php

namespace App\entities;

class Devedor
{

    private $nome;
    private $cpf;
    private $dataNascimento;
    private $endereco;
    private $descricaoTitulo;
    private $valor;
    private $dataVencimento;


    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf():int
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getDataNascimento():string
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getEndereco():string
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getDescricaoTitulo():string
    {
        return $this->descricaoTitulo;
    }

    public function setDescricaoTitulo($descricaoTitulo)
    {
        $this->descricaoTitulo = $descricaoTitulo;
    }

    public function getValor():float
    {
        return $this->valor;
    }


    public function setValor($valor)
    {
        $this->valor = $valor;
    }


    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;
    }

    public static function validarCPF($cpf):bool
	{
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        if (strlen($cpf) != 11)
        {
            return false;
        }

        if (preg_match('/(\d)\1{10}/',$cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++){
            for ($i=0, $j =0; $j < $t; $j++) { 
                $i += $cpf[$j] * (($t + 1) - $j);
            }
            $i = ((10 * $i) % 11) % 10;
            if ($cpf[$j] != $i) {
                return false;
            }
        }
        return true;
		
	}

}
