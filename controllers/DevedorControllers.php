<?php

namespace App\controllers;

use App\app\repository\DevedorRepository;
use App\app\usecase\DevedorUsecase;

class DevedorControllers extends BaseController{


    protected $usecase;

    public function __construct()
    {
        $this->usecase = new DevedorUsecase(new DevedorRepository);       
    }
    public function index()
    {
        $List = $this->usecase->ShowAllDevedor();
        $data["list"]  =  $List;
        $this->views("index",$data);
    }

    public function delete(int $id)
    {
        echo $id;
        #return $this->usecase->DeleteDevedor($id);
    }

}