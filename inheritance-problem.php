<?php
// Jualan Produk
// 1. Komik
// 2.Games

class Produk
{
    public $jenis,
           $judul,
           $penulis,
           $penerbit,
           $harga,
           $waktuMain,
           $jumlahHalaman;

    public function __construct($jenis = "jenis",$judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$jumlahHalaman = 0,$waktuMain = 0)
    {
        $this->jenis = $jenis;
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

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.30000) - 100 halaman
    public function tampilProduk(){
        $str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if($this->jenis == "Komik"){        
           $str.= " - {$this->jumlahHalaman} Halaman";
        }else{
          $str .= " ~  {$this->waktuMain} Jam" ;
        }

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

$produk1 = new Produk("Komik","Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,0);

$produk2 = new Produk("Game","HarvestMoon", "Anonymous", "Natsume", "100000", 0, 20);

echo $produk1->tampilProduk();
echo "<br>";
echo $produk2->tampilProduk();
