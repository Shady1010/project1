<?php

class Middleware_login
{
const USER_DB = 'root';
const PASS_DB = '' ;
private $login;
private $password;
protected $result;


function __construct()
{
    // Проверяем полученные данные
    if (isset($_POST['login']) && isset($_POST['password'])) {

        $this->login = strip_tags(trim($_POST['login']));
        $this->password = strip_tags(trim($_POST['password']));

        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $this->result = $pdo->query("SELECT login, password FROM users WHERE login = 'Admin'")->fetch(PDO::FETCH_ASSOC);

        if ($this->result['login'] == $this->login && $this->result['password'] == $this->password) {
            $_SESSION['user_login'] = 'Добро пожаловать '.$this->login.' !';
            $pdo = null;
        }
    }




}


}