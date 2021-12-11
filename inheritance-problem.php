<?php
// Jualan Produk
// 1. Komik
// 2.Games

class Produk
{
    // membuat properti
    // properti ini bisa diisi didalam class langsung
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // membuat constructor (method khusus untuk yang disebuah,karena method ini sudah auto dipanggil ketika dibuat instance )
    // constructor ini menerima parameter untuk mengisi properti didalam setiap class
    // didalam parameter constructor ini dapat mengisi nilai default
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        // karena didalam parameter adalah variabel lokal
        // maka harus menambahkan keyword $this untuk dapat mengisi nilai didalam properti
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    /*
Pada studi kasus ini,ada beberapa cara untuk mencetak sebuah produk

1.dibuat method didalam class
2.dibuat class baru yang khusus untuk mencetak produk

* */


    // 1.membuat method untuk mencetak produk
    public function getLabel()
    {
        return "$this->judul,$this->penulis, $this->penerbit";
    }
}

// 2.membuat class baru untuk mencetak produk
class CetakInfoProduk
{
    // class ini memiliki satu method yaitu cetak
    // class ini menerima inputan parameter untuk method ini,inputannya adalah object product yang sudah instance
    // fungsi cetak ini hanya menerima parameter class produk dan object yang sudah dibuat
    // produk class produk ini dapat menjadi type data object sendiri
    public function cetak(Produk $produk)
    {
        // fungsi ini akan mengembalikan nilai string yang akan memberikan informasi cetak produk
        // berdasarkan property class Produk
        return  $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
/*
nilai yang ada didalam object akan dikirimkan ke construcor,lalu dipakai untuk menggantikan properti yang ada didalam constructor
* */


$produk2 = new Produk("HarvestMoon", "Anonymous", "Natsume", "100000");

// untuk melihat informasi lengkap produk 1
// dengan memanggil fungsi cetak
$infoProduk1 = new CetakInfoProduk();
// memanggil method cetak dari obj infoProduk1
echo $infoProduk1->cetak($produk1);


echo "<br>";
echo "Komik: " . $produk1->getLabel();
echo "<br>";

echo "Game: " . $produk2->getLabel();
echo "<br>";
