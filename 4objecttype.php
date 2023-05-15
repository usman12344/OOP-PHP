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

    //biasa digunakan untuk connect DB
    // setiap instance dibuat contruct dipanggil
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        //untuk menggail property diluar method tambah $this->
        return "$this->penulis, $this->penerbit";
    }
}

//class khusus cetak
class CetakInfoProduk
{
    // must instance Produk
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//instance construtor dgn parameter
$produk1 = new Produk("Naruto", " masasi", "shoe", "1");

//instance construtor dgn parameter
$produk2 = new Produk("one Piece", "neil", "sony", "2");

echo "satu" . $produk1->getLabel();
echo "dua" . $produk2->getLabel();
echo "<br>";

//insctance
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
