<?php namespace App\Produk;
// namespace ->sebuah cara untuk mengelompokkan program kedalam sebuah package sendiri
// karena php tidak mengizinkan membuat 2 class dengan nama yang sama
// menerapkan encapsulaption
// membuat namespace Vendor\Namespace\SubNamespace;
class User{
    public function __construct()
    {
        echo "ini adalah class ".__CLASS__;
    }
}

?>