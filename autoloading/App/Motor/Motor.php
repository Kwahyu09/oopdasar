<?php namespace App\Motor;
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