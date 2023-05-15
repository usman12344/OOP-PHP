<?php

require_once 'App/init.php';

//instance construtor Inheritance Komik dgn parameter
$produk1 = new Komik("Naruto", " masasi", "shoe", 100000, 100);

//instance construtor Inheritance Game dgn parameter
$produk2 = new Game("one Piece", "neil", "sony", 200000, 50);


//instance
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
