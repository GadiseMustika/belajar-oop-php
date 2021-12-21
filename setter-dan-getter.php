<?php
class Produk{
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0 ;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // setter dan getter -> method untuk ngeset dan ngeget
    // untuk menghindari ketika membuat sebuah property dengan visibilty public
    // karena sebaiknya sebagian luar class dapat mengakses property secara langsung,dengan mengubah nya private atau protected
    // karena sudah tidak diakses ketika visibility nya diubah,maka harus dibuatkan sebuah method untuk melihat dan mengubah isi dari visibilty (protected dan private) 
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // membuat setter method untuk mengset nilai dari property private
    // membutuhkan sebuah parameter
    // sangat berguna ketika membuat validasi dari nilai
    public function setJudul($judul){
        if(! is_string($judul)){
            throw new Exception("Judul harus string");
            
        }
        $this->judul = $judul;
    }


    // membuat getter method untuk mencari celah agar property private ini dapat diakses dari luar 
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    
    public function getPenulis(){
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

  

    public function tampilProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";


        return $str;
    }
}

class Komik extends Produk
{
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function tampilProduk()
    {

        $str = "Komik : " . parent::tampilProduk() . " -  {$this->jumlahHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function tampilProduk()
    {
        $str = "Game : " . parent::tampilProduk() . " ~   {$this->waktuMain} Jam";

        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("HarvestMoon", "Anonymous", "Natsume", "100000", 20);

echo $produk1->tampilProduk();
echo "<br>";
echo $produk2->tampilProduk();
echo "<hr>";

$produk2->setDiskon(30);
echo $produk2->getHarga();
echo "<hr>";

// mengganti  isi nilai $judul
$produk1->setDiskon(20);
// melihat isi dari property private judul
echo $produk1->getHarga();






// akan error karena property judul ini diganti menjadi private
// property judul ini hanya dapat diakses oleh class Produk saja sedangkan object produk1 ini punyanya class Komik yaitu turunan dari class Produk
// echo $produk1->judul;

// terjadi error -> property yang ada didalam class Produk tidak dapat diakses dari luar 
// $produk3 = new Produk("barang aja");
// echo $produk3->judul;


