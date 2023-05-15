<?php
// class
class Produk
{
    // property
    public $judul = "judul",
        $penulis = "penuliss",
        $penerbit = "penerbitt",
        $harga = "harga",
        $halaman = "halaman",
        $jam = "jam",
        $tipe = "tipe";

    // public function sayHello()
    // {
    //   return "Hello world";
    // }

    //biasa digunakan untuk connect DB
    // setiap instance dibuat contruct dipanggil
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $jam, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jam = $jam;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        //untuk menggail property diluar method tambah $this->
        return "$this->penulis, $this->penerbit";
    }

    public function InfoLengkap()
    {
        // naruto | penulis, penerbit | harga, Halaman atau Jam
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | {$this->harga}";
        if ($this->tipe === "Game") {
            $str .= "{$this->jam} jam";
        } else if ($this->tipe === "Komik") {
            $str .= "{$this->halaman} Halaman";
        }
        return $str;
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
$produk1 = new Produk("Naruto", " masasi", "shoe", 1, 100, 0, "Komik");

//instance construtor dgn parameter
$produk2 = new Produk("one Piece", "neil", "sony", 2, 0, 50, "Game");

echo $produk2->InfoLengkap();
