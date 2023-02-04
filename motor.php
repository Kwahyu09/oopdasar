<?php

//membuat class
Class Motor{
    //ini property
    public $merk, $nama, $warna, $harga ;

    //membuat method
    public function Label(){
        return "$this->nama, $this->harga";
    }

    //membuat method constructur
    //method yang langsung dijalankan ketika membuat objek
    public function __construct( $merk="Honda", $nama="Beat", $warna="Hitam", $harga=17000000)
    {
        $this->merk = $merk;
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }
}

//membuat objek
$Motor1 = new Motor();
$Motor1->nama = "Blade";
$Motor1->harga = 22000000;
var_dump($Motor1);

echo "motor" . $Motor1->Label();