<?php

//membuat class
Class Motor{
    //ini property
    public $Merk = "Honda",
        $nama = "Beat",
        $warna = "Hitam",
        $harga = 17000000;

    //membuat method
    public function Label(){
        return "$this->nama, $this->harga";
    }
}

//membuat objek
$Motor1 = new Motor();
$Motor1->nama = "Blade";
$Motor1->harga = 22000000;
var_dump($Motor1);

echo "motor" . $Motor1->Label();