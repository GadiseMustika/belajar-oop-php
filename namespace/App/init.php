<?php

// membuat autoloading

spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    // mengambil elemen terakhir dari array
    $class = end($class);
    require_once __DIR__.'/Produk/'.$class.'.php';
});

spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    // mengambil elemen terakhir dari array
    $class = end($class);
    require_once __DIR__.'/Service/'.$class.'.php';
});



// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';


?>