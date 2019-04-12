<?php

class Model_Main
{
    function get_date()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $result = $pdo->query("SELECT * FROM news LIMIT 10")->fetchAll(PDO::FETCH_ASSOC);
        $pdo=null;

        return $result ;
    }
}