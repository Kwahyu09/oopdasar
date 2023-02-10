<?php
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