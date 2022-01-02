<?php

require 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

// $produk2 = new Game("HarvestMoon", "Anonymous", "Natsume", "100000", 20);



// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();
// echo "<hr>";

// menjalankan class yang di    buat namespace(sebuah cara untuk mengelompokkan program kedalam sebuah package sendiri)
// membuat alias (nama lain ) ketika namespace dijalankan
// karena untuk memanggil class yang sudah dikasih namespace,maka nama namespacenya harus ditulis semua

use App\Service\User as ServiceUser;

use App\Produk\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();




?>