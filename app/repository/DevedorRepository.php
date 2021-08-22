<?php

namespace App\app\repository;

use App\app\repository\interfaces\DevedorRepositoryInterface;
use App\entities\Devedor;

class DevedorRepository{

    private $devedorRepository;

    public function __construct(DevedorRepositoryInterface $devedorRepositoryInterface)
    {
        $this->devedorRepository = $devedorRepositoryInterface;
    }

    public function AddDevedor(Devedor $devedor):void{
        $this->devedorRepository->Create($devedor);
    }

    public function ShowAllDevedor()
    {
        $this->devedorRepository->Read();
    }

    public function UpdateDevedor(Devedor $devedor, int $id){
        $this->devedorRepository->Update($devedor,$id);
    }

    public function DeleteDevedor(int $id)
    {
        $this->devedorRepository->Delete($id);
    }

}