<?php


// require_once 'App/Motor/InfoMotor.php';
// require_once 'App/Motor/Motor.php';
// require_once 'App/Motor/Sport.php';
// require_once 'App/Motor/Matic.php';
// require_once 'App/Motor/CetakInfo.php';

//menggunakan autoloading
spl_autoload_register(function ($class){
    require_once __DIR__ . 'Motor/' . $class . '.php';
}); 