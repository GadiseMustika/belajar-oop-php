<?php
// Jualan Produk
// 1. Komik
// 2.Games

class Produk
{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $waktuMain,
           $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$jumlahHalaman = 0,$waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;
        $this->jumlahHalaman = $jumlahHalaman;
        
    }

    // 1.membuat method untuk mencetak produk
    public function getLabel()
    {
        return "$this->judul,$this->penulis, $this->penerbit";
    }

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.30000) - 100 halaman
    public function tampilProduk(){
        return $str = ""
    }
}

// 2.membuat class baru untuk mencetak produk
class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        // fungsi ini akan mengembalikan nilai string yang akan memberikan informasi cetak produk
        // berdasarkan property class Produk
        return  $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000,100,0);

$produk2 = new Produk("HarvestMoon", "Anonymous", "Natsume", "100000",0,20);

// Naruto | Naruto,Masashi Kishimoto, Shonen Jump (Rp.30000)
// Komik: Naruto,Masashi Kishimoto, Shonen Jump
// Game: HarvestMoon,Anonymous, Natsume

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.30000) - 100 halaman
// Game : HarvestMoon | Anonymous, Natsume (Rp.100000) - 20 Jam
