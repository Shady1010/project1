<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);


const DIR_VIEW = 'views\\';
const DIR_CATALOG = 'C:\\OSPanel\\domains\\practic\\';
const DIR_FILE = ['conrollers\\','models\\','kernel\\','middleware\\'];

spl_autoload_register(function ($class_name){

    if(file_exists($class = DIR_CATALOG.DIR_FILE[0].strtolower($class_name).'.php')) {
        require_once $class;
    }
    if(file_exists($class = DIR_CATALOG.DIR_FILE[1].strtolower($class_name).'.php')) {
        require_once $class;
    }
    if(file_exists($class = DIR_CATALOG.DIR_FILE[2].strtolower($class_name).'.php')) {
        require_once $class;
    }

});

Route::start();

