<?php
// Jualan Produk
// 1. Komik
// 2.Games

class Produk{
// membuat properti
// properti ini bisa diisi didalam class langsung
public $judul,
       $penulis,
       $penerbit,
       $harga;

// membuat constructor (method khusus untuk yang disebuah,karena method ini sudah auto dipanggil ketika dibuat instance )
// constructor ini menerima parameter untuk mengisi properti didalam setiap class
// didalam parameter constructor ini dapat mengisi nilai default
public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
    // karena didalam parameter adalah variabel lokal
    // maka harus menambahkan keyword $this untuk dapat mengisi nilai didalam properti
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

}




// membuat method
public function getLabel(){
    // mengembalikan nilai function getLabel
    // untuk menambahkan properti didalam method,harus menggunakan $this(mengambil properti isi yang ada didalam class yang bersangkutan ketia dibuat instance nya)
    return "$this->judul,$this->penulis, $this->penerbit";
}
}


$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
/*
nilai yang ada didalam object akan dikirimkan ke construcor,lalu dipakai untuk menggantikan properti yang ada didalam constructor
* */


$produk2 = new Produk("HarvestMoon","Anonymous","Natsume", "100000");

$produk3 = new Produk("Pepsiman");



echo "Komik: ".$produk1->getLabel();
echo "<br>";
echo "Game: ".$produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();
?>