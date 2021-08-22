<?php

namespace Test\test;

use PHPUnit\Framework\TestCase;

class DevedorTest extends TestCase{

    public function test_validation_cpf(){
    
        $cpf = new \App\entities\Devedor;

        $result = $cpf->validarCPF("585.344.703-32");
        
        $this->assertTrue($result);
    
    }

}