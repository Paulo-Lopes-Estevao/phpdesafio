<?php

namespace App\controllers;

use App\app\repository\DevedorRepository;
use App\app\usecase\DevedorUsecase;

class DevedorControllers{


    protected $usecase;

    public function __construct()
    {
        $this->usecase = new DevedorUsecase(new DevedorRepository);       
    }
    public function List()
    {
        return $this->usecase->ShowAllDevedor();
    }

    public function Delete(int $id)
    {
        return $this->usecase->DeleteDevedor($id);
    }

}