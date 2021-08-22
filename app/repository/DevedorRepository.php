<?php

namespace App\app\repository;

use App\app\repository\interfaces\DevedorRepositoryInterface;
use App\entities\Devedor;

class DevedorRepository implements DevedorRepositoryInterface{

    private $devedorRepository;

    public function __construct()
    {
        
    }

    public function Create(Devedor $devedor):void{
        
    }

    public function Read()
    {
        
    }

    public function Update(Devedor $devedor, int $id){
        
    }

    public function Delete(int $id)
    {
        $this->devedorRepository->Delete($id);
    }

}