<?php

//membuat class
Class Motor{
    //property
    public $merk, $nama, $warna, $harga, $jmlHalaman, $jamMain, $tipe;

    //membuat method
    public function Label(){
        return "$this->nama, $this->harga";
    }

    //method constructur
    //method yang langsung dijalankan ketika membuat objek
    public function __construct( $merk="Honda", $nama="Beat", $warna="Hitam", $harga=17000000, $jmlHalaman=100, $jamMain = 5, $tipe)
    {
        $this->merk = $merk;
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->jamMain = $jamMain;
        $this->tipe = $tipe;
    }

    public function tampil(){
        $str = "{$this->merk} || {$this->nama}, Warna : {$this->warna} Harga : {$this->harga} halaman {$this->jmlHalaman} & Jumlah jam = {$this->jamMain}";
        return $str;
    }

    public function GetInfoLengkap(){
        $str = "{$this->merk} || {$this->nama}, Warna : {$this->warna} Harga : {$this->harga}";

        if( $this->tipe === "Sepeda") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if( $this->tipe === "Motor"){
            $str .= " - {$this->jamMain} Jam.";
        }
        return $str;
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
$Motor1 = new Motor("Yamaha", "Vixion", "Merah", "30000000", 100, 0, "Motor");
//cara lama
// $Motor1 = new Motor();
// $Motor1->nama = "Blade";
// $Motor1->harga = 22000000;

//cara lain buat objek
$Motor2 = new Motor("Yamaha", "Vixion", "Merah", "30000000", 0, 100, "Motor");
$Motor3 = new Motor("Yamaha", "Mio", "Putih", "30000000", 200, 0, "Sepeda");

// echo "motor " . $Motor1->Label();
// echo "<br>";
// $infoCetak = new CetakInfo();
// echo $infoCetak->Cetak($Motor2);
// echo "<br>";
// echo $Motor1->tampil();

//cetak masalah inheritence
echo "<br>";
echo $Motor3->GetInfoLengkap();
