<?php

require_once 'App/init.php';

//cara lain buat objek
// $Motor2 = new Sport("Yamaha", "Vixion", "Merah", "30000000",150);
// $Motor3 = new Matic("Yamaha", "Mio", "Putih", "10000000", 2);

// $cetakproduk = new CetakInfo;
// $cetakproduk->TambahMotor($Motor2);
// $cetakproduk->TambahMotor($Motor3);

// echo $cetakproduk->Cetak();
use App\Motor\User as MotorUser;
use App\Bengkel\User as BengkelUser;
new MotorUser();
echo "<br>";
new BengkelUser();