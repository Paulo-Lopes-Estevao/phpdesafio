<?php

namespace App\app\repository\interfaces;

use App\entities\Devedor;

interface DevedorRepositoryInterface{
    public function Create(Devedor $devedor):array;
    public function Read();
    public function Update(Devedor $devedor,int $id);
    public function Delete(int $id);
}