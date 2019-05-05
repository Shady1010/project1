<?php

class Model
{
public $bdConnect;
    public function __construct()
    {
        try{
        $this->bdConnect = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        }catch (PDOException  $e){
            die("Не удается подключиться к базе данных".$e);
        };
    }

    public function stopConnection (){
        $this->bdConnect = null;
    }



}