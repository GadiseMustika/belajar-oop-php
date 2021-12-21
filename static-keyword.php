<?php
/* 
            STATIC KEYWORD
// Static -> mengakses property dan method di dalam class tanpa harus di instansiasi dahulu

ada dua macam dalam static keyword ini :
// static property 
// static keyword

static keyword ini digunakan untuk:
// member yang terikat dengan class,bukan dengan object
// Nilai static akan selalu tetap meskipun object diinstansiasi berulang kali
// membuat kode menjadi procedural
// Biasanya digunakan untuk membuat fungsi bantuan / helper
// digunakan di class-class utility pada Framework

* */

// penggunaan static keyword pada nomor 1
// class ContohStatic{
//     // membuat properti dengan keyword static
//     public static $angka = 1;

//     // membuat method dengan keyword static
//     public static function halo(){
//         // mengambil isi properti angka dalam static ini menggunakan self::$namaproperti 
//         return "Halo " . self::$angka++ . " kali.";
//     }
// }

// // karena ada keyword static bisa akses tanpa harus instance
// // dengan menggunakan tanda :: untuk mengakses properti yang ada di dalam class
// echo ContohStatic::$angka;
// echo "<br>";
// // memanggil method static
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

// penggunaan  static method untuk nomor 2
class Contoh{
    public static $angka = 1;

    public function halo(){
        // menggunakan konsep OOP static Method
    return "Halo " . self::$angka++ . " kali" . "<br>";
        // menggunakan konsep OOP biasa
        // return "Halo" . $this->angka++ . "kali" . "<br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
?>