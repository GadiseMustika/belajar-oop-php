<?php
// // constant -> sebuah identifier untuk menyimpan nilai,nilai nya tidak dapat berubah ketika sudah set di dalam program

// // membuat constant di php
// // perbedaan di kedua ini adalah define(tidak bisa disimpan di dalam class)
// // 1.define() 
// define('NAMA','gadise');
// echo NAMA;

// echo '<br>';

// // 2.const keyword
// const UMUR = 20;
// echo UMUR;


// mencoba const didalam class
// class Coba{
//     const NAMA = 'Gadise';
// }

// // mengakses contant didalam class
// echo Coba::NAMA;

// mencoba magic constant
// __LINE__ -> untuk  melihat nomor baris program
//  __FILE__ -> untuk melihat alamat file program

// function Coba(){
//     return __FUNCTION__; // untuk melihat nama function
// }
// echo coba();


// class Coba{
//     public $kelas = __CLASS__; //untuk melihat nama CLASS
// }

// $obj = new Coba;
// echo $obj->kelas;











?>
