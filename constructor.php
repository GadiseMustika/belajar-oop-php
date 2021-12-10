<?php
// Jualan Produk
// 1. Komik
// 2.Games

class Produk{
// membuat properti
// properti ini bisa diisi didalam class langsung
public $judul = "judul",
       $penulis = "penulis",
       $penerbit = "penerbit",
       $harga = 0;

// membuat constructor (method khusus untuk yang disebuah,karena method ini sudah auto dipanggil ketika dibuat instance )
public function __construct(){
    echo "hallo";
}




// membuat method
public function getLabel(){
    // mengembalikan nilai function getLabel
    // untuk menambahkan properti didalam method,harus menggunakan $this(mengambil properti isi yang ada didalam class yang bersangkutan ketia dibuat instance nya)
    return "$this->penulis, $this->penerbit";
}
}

$produk3 = new Produk();
// satu instan dengan properti lengkap
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "Komik : $produk3->judul,$produk3->penulis ";
echo "<br>";
// memanggil method
echo $produk3->getLabel();

echo "<br>";

$produk4 = new Produk();
$produk4->judul = "Harvest Moon";
$produk4->penulis = "Anonymous";
$produk4->penerbit = "Natsume";
$produk4->harga = 100000;

echo "Komik: ".$produk3->getLabel();
echo "<br>";
echo "Game: ".$produk4->getLabel();
?>