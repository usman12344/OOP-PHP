<?php

require_once 'App/init.php';

// //instance construtor Inheritance Komik dgn parameter
// $produk1 = new Komik("Naruto", " masasi", "shoe", 100000, 100);

// //instance construtor Inheritance Game dgn parameter
// $produk2 = new Game("one Piece", "neil", "sony", 200000, 50);


// //instance
// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// alias
use  App\Produk\User as Produk;
use  App\Service\User as Service;

new Produk();
new Service();
// new App\Service\User();

// sebuah cara untuk mengelempokkan program kedalam sebuah package tersendiri = encapsulation
// php tidak mengizinkan 2 nama yg sama di php
// bagaiamna jika 1 tim ? bakal ribetkan jika gitu
// makanya dibuat pengelompokkan agar bisa mengunaakn nama yg sama dengan menggunakan namespace
// namespace vendor/namespace/subnamespace;