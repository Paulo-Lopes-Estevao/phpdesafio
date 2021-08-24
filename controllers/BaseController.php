<?php

namespace App\controllers;

class BaseController{

    public function views($file, $data = array()){
        $directory = '.'. DIRECTORY_SEPARATOR .'views'. DIRECTORY_SEPARATOR . $file . '.php';
        $file = $directory;

        if(file_exists($file)){
            require $file;
        }
    }

}