<?php

//membuat interface
interface Infomotor{
    public function GetInfoMotor();
}

//membuat class
//menjadikan class motor ini class abstrak karena tidak akan instansiasi class motor menjadi objek
abstract class Motor{
    //property
    protected $merk, $nama, $warna, $diskon=0,$harga;

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
    
    abstract public function getInfo();

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getMerk(){
        return $this->merk;
    }

    public function setMerk($merk){
        //validasi ubah judul harus string
        // if(!is_string($merk)){
        //     throw new Exception("Judul Harus String");
        // }
        $this->merk = $merk;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getWarna(){
        return $this->warna;
    }

    public function setWarna($Warna){
        $this->warna = $Warna;
    }

     public function setDiskon( $diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }
}




class Sport extends Motor implements Infomotor{
    public $kecMaks;

    public function __construct($merk="Honda", $nama="Beat", $warna="Hitam", $harga=17000000, $kecMaks=150)
    {
        parent::__construct($merk, $nama, $warna, $harga);
        $this->kecMaks = $kecMaks;
    }

    public function GetInfoMotor()
    {
        //Operriding (memanggil nama method yang sama dengan method parentnya) ex:parent
        $str = "Sport " . $this->getInfo() ."- {$this->kecMaks} Km/Jam.";
        return $str;

    }

    public function getInfo(){
        $str = "{$this->merk} || {$this->nama}, Warna : {$this->warna} Harga : {$this->harga}";
        //jika tidak menggunakan Inheritence
        // if( $this->tipe === "Sport") {
        //     $str .= " - {$this->kecMaks} Km/Jam.";
        // }else if( $this->tipe === "Matic"){
        //     $str .= " - {$this->jmlPenumpang} orang.";
        // }
        return $str;
    }
}



class Matic extends Motor implements Infomotor{
    public $jmlPenumpang;

    public function __construct($merk="Honda", $nama="Beat", $warna="Hitam", $harga=17000000, $jmlPenumpang=2)
    {
        parent::__construct($merk, $nama, $warna, $harga);
        $this->jmlPenumpang = $jmlPenumpang;
    }

    public function GetInfoMotor()
    {
        $str = "Matic" . $this->getInfo() ." - {$this->jmlPenumpang} Orang.";
        return $str;

    }

    public function getInfo(){
        $str = "{$this->merk} || {$this->nama}, Warna : {$this->warna} Harga : {$this->harga}";
        //jika tidak menggunakan Inheritence
        // if( $this->tipe === "Sport") {
        //     $str .= " - {$this->kecMaks} Km/Jam.";
        // }else if( $this->tipe === "Matic"){
        //     $str .= " - {$this->jmlPenumpang} orang.";
        // }
        return $str;
    }
}
//Objek Type
//membuat clas cetak yang dimana selain objek class motor tidak bisa dicetak
class CetakInfo{
    public $daftarMotor = array();
    //atau $motor = []; sama saja

    public function TambahMotor(Motor $motor){
        $this->daftarMotor[] = $motor;
    }

    public function Cetak(){
        $str = "Daftar Produk : <br>";

        foreach($this->daftarMotor as $daf){
            $str .= "- {$daf->GetInfo()} <br>" ;
        }

        return $str;
    }
}



//membuat objek
//cara lama
// $Motor1 = new Motor();
// $Motor1->nama = "Blade";
// $Motor1->harga = 22000000;

//cara lain buat objek
$Motor2 = new Sport("Yamaha", "Vixion", "Merah", "30000000",150);
$Motor3 = new Matic("Yamaha", "Mio", "Putih", "10000000", 2);

$cetakproduk = new CetakInfo;
$cetakproduk->TambahMotor($Motor2);
$cetakproduk->TambahMotor($Motor3);

echo $cetakproduk->Cetak();