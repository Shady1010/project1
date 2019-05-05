<?php

class Login
{
const USER_DB = 'root';
const PASS_DB = '' ;
private $login;
private $password;
protected $result;


function __construct()
{
    $model = new Model();

    // Проверяем полученные данные
    if (isset($_POST['login']) && isset($_POST['password'])) {

        $this->login = strip_tags(trim($_POST['login']));
        $this->password = strip_tags(trim($_POST['password']));


        $this->result =  $model->bdConnect->query("SELECT login, password FROM users WHERE login = 'Admin'")->fetch(PDO::FETCH_ASSOC);
        $model->stopConnection();


        if ($this->result['login'] === $this->login && $this->result['password'] === $this->password) {
            $_SESSION['user_login'] = $this->login;
        }else{
            die("Логин или пароль введен не верно");
        }
    }




}


}