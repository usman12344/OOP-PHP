<?php
// class
class Produk
{
  // property
  public $judul = "judul",
    $penulis = "penuliss",
    $penerbit = "penerbitt",
    $harga = "harga";

  // public function sayHello()
  // {
  //   return "Hello world";
  // }

  public function getLabel()
  {
    //untuk menggail property diluar method tambah $this->
    return "$this->penulis, $this->penerbit";
  }
}

//instance
$produk1 = new Produk();
// ubah isi dari class produk property judul
$produk1->judul = "Naruto";
var_dump($produk1);


//instance
$produk2 = new Produk();
// ubah isi dari class produk property judul
$produk2->judul = "one piece";
// menambah property ke dlm class produk
$produk2->tambahProperty = "haha";
var_dump($produk2);

//panggil method dari class produk
// echo $produk2->sayHello();

//panggil method dari class produk
echo $produk2->getLabel();
