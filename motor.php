<?php

//membuat class
Class Motor{
    //property
    public $merk, $nama, $warna;
    
    protected $diskon;

    private $harga;

    //membuat method
    public function Label(){
        return "$this->nama, $this->harga";
    }

    //method constructur
    //method yang langsung dijalankan ketika membuat objek
    public function __construct( $merk="Honda", $nama="Beat", $warna="Hitam", $harga=17000000)
    {
        $this->merk = $merk;
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function tampil(){
        $str = "{$this->merk} || {$this->nama}, Warna : {$this->warna} Harga : {$this->harga}";
        return $str;
    }

    public function GetInfoMotor(){
        $str = "{$this->merk} || {$this->nama}, Warna : {$this->warna} Harga : {$this->harga}";
        //jika tidak menggunakan Inheritence
        // if( $this->tipe === "Sport") {
        //     $str .= " - {$this->kecMaks} Km/Jam.";
        // }else if( $this->tipe === "Matic"){
        //     $str .= " - {$this->jmlPenumpang} orang.";
        // }
        return $str;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}


class Sport extends Motor{
    public $kecMaks;

    public function __construct($merk="Honda", $nama="Beat", $warna="Hitam", $harga=17000000, $kecMaks=150)
    {
        parent::__construct($merk, $nama, $warna, $harga);
        $this->kecMaks = $kecMaks;
    }

    public function GetInfoMotor()
    {
        //Operriding (memanggil nama method yang sama dengan method parentnya) ex:parent
        $str = "Sport " . parent::GetInfoMotor() ."- {$this->kecMaks} Km/Jam.";
        return $str;

    }
}

class Matic extends Motor{
    public $jmlPenumpang;

    public function __construct($merk="Honda", $nama="Beat", $warna="Hitam", $harga=17000000, $jmlPenumpang=2)
    {
        parent::__construct($merk, $nama, $warna, $harga);
        $this->jmlPenumpang = $jmlPenumpang;
    }

    public function setDiskon( $diskon)
    {
        $this->diskon = $diskon;
    }

    public function GetInfoMotor()
    {
        $str = "Matic" . parent::GetInfoMotor() ." - {$this->jmlPenumpang} Orang.";
        return $str;

    }
}
//Objek Type
//membuat clas cetak yang dimana selain objek class motor tidak bisa dicetak
class CetakInfo{
    public function Cetak(Motor $motor){
        $str = "{$motor->merk} || {$motor->nama}, Warna : {$motor->warna}";
        return $str;
    }
}

//membuat objek
$Motor1 = new Motor("Yamaha", "Vixion", "Merah", "30000000", 100);
//cara lama
// $Motor1 = new Motor();
// $Motor1->nama = "Blade";
// $Motor1->harga = 22000000;

//cara lain buat objek
$Motor2 = new Sport("Yamaha", "Vixion", "Merah", "30000000",150);
$Motor3 = new Matic("Yamaha", "Mio", "Putih", "10000000", 2);

// echo "motor " . $Motor1->Label();
// echo "<br>";
// $infoCetak = new CetakInfo();
// echo $infoCetak->Cetak($Motor2);
// echo "<br>";
// echo $Motor1->tampil();

//cetak masalah inheritence
echo "<br>";
echo $Motor2->GetInfoMotor();
echo "<br>";
echo $Motor3->GetInfoMotor();

echo "<hr>";

$Motor3->setDiskon(50);
echo $Motor3->getHarga();