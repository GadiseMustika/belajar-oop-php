<?php
// membuat interface InfoProduk
interface InfoProduk{
    // yang berisi deklarasi method getInfoProduk
    public function getInfoProduk();
}

abstract class Produk{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

 
    abstract public function getInfo();

}

// implementasi interface InfoProduk
class Komik extends Produk implements InfoProduk{
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";


        return $str;
    }
    // implementasi method dari interface InfoProduk
    public function getInfoProduk(){

        $str = "Komik : " . $this->getInfo() . " -  {$this->jumlahHalaman} Halaman";

        return $str;
    }
}

// class game ingin implementasi InfoProduk
class Game extends Produk implements InfoProduk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~   {$this->waktuMain} Jam";

        return $str;
    }
}

class CetakInfoProduk{
    // mencetak banyak produk
    public $daftarproduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarproduk[] = $produk;
    }

    // melooping mencetak produk didalam array
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarproduk as $p) {
            // bangun string didalam method getInfoProduk
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("HarvestMoon", "Anonymous", "Natsume", "100000", 20);



$cetakProduk = new CetakInfoProduk();
// menjalankan fungsi tambah produk didalam class CetakInfoProduk didalam method tambahProduk berisi objek produk 
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();


