<?php namespace App\Motor;
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