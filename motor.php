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


//Objek Type
//membuat clas cetak yang dimana selain objek class motor tidak bisa dicetak
class CetakInfo{
    public function Cetak(Motor $motor){
        $str = "{$motor->merk} || {$motor->nama}, Warna : {$motor->warna} Harga : {$motor->harga}";
        return $str;
    }
}

//membuat objek
$Motor1 = new Motor();
$Motor1->nama = "Blade";
$Motor1->harga = 22000000;

echo "motor " . $Motor1->Label();
echo "<br>";
$infoCetak = new CetakInfo();
echo $infoCetak->Cetak($Motor1);