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
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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
    public $jumlahHalaman;

    // membuat class construct untuk class Komik
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$jumlahHalaman = 0) {
        
        // menjalankan construct parent
        // jangan memberikan nilai default disetiap properti,karena akan mengisi ulang dari construct childnya 
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // mengambil properti dari construct class child
        $this->jumlahHalaman = $jumlahHalaman;
    }

    // membuat method tampilProduk() dari class Komik
    public function tampilProduk()
    {
        //mengambil alih method tampilProduk() dari parentnya
        // mengambil properti dikelas parentnya (parent ::)
        $str = "Komik : " . parent::tampilProduk() . " -  {$this->jumlahHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }


    public function tampilProduk()
    {
        $str = "Game : ". parent::tampilProduk() . " ~   {$this->waktuMain} Jam";

        return $str;
    }
}


// Instansinasi (membuat object) class Komik
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("HarvestMoon", "Anonymous", "Natsume", "100000",20);

echo $produk1->tampilProduk();
echo "<br>";
echo $produk2->tampilProduk();
