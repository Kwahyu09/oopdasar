<?php

class ContohStatic{
    public static $angka =1;

    public static function coba(){
        return "Hallo " . self::$angka++ . " kali";
    }
}

//tidak perlu memakai objek lagi cukup:
echo ContohStatic::$angka;
//::titik dua adalah memanggil variabel static yang ada didalam class

echo "<br>";
echo ContohStatic::coba();

echo "<hr>";
echo ContohStatic::coba();

//nilai static akan selalu tetap meskipun object diinstansisai berulang kali

class Contoh{
    public static $angka = 1;

    public function coba(){
        return "Hallo " . self::$angka++ . " kali";
    }
}
echo "<hr>";
echo "<br>";
echo "<hr>";

$obj = new Contoh;
echo $obj->coba();echo "<br>";
echo $obj->coba();echo "<br>";
echo $obj->coba();echo "<br>";

$obj2 = new Contoh;
echo $obj2->coba();echo "<br>";
echo $obj2->coba();echo "<br>";
echo $obj2->coba();

?>
