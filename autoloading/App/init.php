<?php


// require_once 'Motor/InfoMotor.php';
// require_once 'Motor/Motor.php';
// require_once 'Motor/Sport.php';
// require_once 'Motor/Matic.php';
// require_once 'Motor/CetakInfo.php';
// require_once 'Motor/User.php';
// require_once 'Bengkel/User.php';

//menggunakan autoloading
spl_autoload_register(function ($class){
    $class = explode('\\', $class);
    // explode digunakan untuk memecahkan string berdasarkan pemecah teretentu
    // App\Motor\User = ["App", "Motor" , "User"] 
    //maka jadinya aray yang pemisahnya /
    $class = end($class);
    //mengambil nilai terakhir dari class
    require_once __DIR__ . '/Motor/' . $class . '.php';
    //tidak bisa menambahkan folder lain atau memanggil folder lain

});  

spl_autoload_register(function ($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Bengkel/' . $class . '.php';

});  