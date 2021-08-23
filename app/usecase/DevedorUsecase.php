<?php

namespace App\app\usecase;

use App\app\repository\interfaces\DevedorRepositoryInterface;
use App\entities\Devedor;

class DevedorUsecase{

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
        return $this->devedorRepository->Read();
    }

    public function UpdateDevedor(Devedor $devedor, int $id){
        $this->devedorRepository->Update($devedor,$id);
    }

    public function DeleteDevedor(int $id)
    {
        $this->devedorRepository->Delete($id);
    }

}