<?php 
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