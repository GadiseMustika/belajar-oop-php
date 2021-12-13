<?php
// Jualan Produk
// 1. Komik
// 2.Games

class Produk
{
    public 
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $waktuMain,
        $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
    }

    // 1.membuat method untuk mencetak produk
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function tampilProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
      

        return $str;
    }
}

// membuat class Komik dari turunan class Produk
class Komik extends Produk{
    // membuat method tampilProduk() dari class Komik
    public function tampilProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) -  {$this->jumlahHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk{
    public function tampilProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ~{$this->waktuMain} Jam";

        return $str;
    }
}

// 2.membuat class baru untuk mencetak produk
class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        // fungsi ini akan mengembalikan nilai string yang akan memberikan informasi cetak produk
        // berdasarkan property class Produk
        return  $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga}) ";
    }
}

// Instansinasi (membuat object) class Komik
$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);

$produk2 = new Game("HarvestMoon", "Anonymous", "Natsume", "100000", 0, 20);

echo $produk1->tampilProduk();
echo "<br>";
echo $produk2->tampilProduk();
