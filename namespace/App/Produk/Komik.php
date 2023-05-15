<?php


class Komik extends Produk implements InfoProduk
{
    // variable
    public $halaman;

    // constructor khusus halaman
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
    {
        //overriding parent constructor
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->halaman = $halaman;
    }


    public function getInfo()
    {
        $str =  "{$this->judul} | {$this->getLabel()} ({Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        // naruto | penulis, penerbit | harga,  Jam
        // parent:: hanya menggunakan metod parent
        $str =  "Komik : " . $this->getInfo()  . " - {Rp. {$this->halaman} Halaman.";

        return $str;
    }
}
