<?php

class Game extends Produk implements InfoProduk
{

    // variable
    public $jam;

    // constructor khusus jam
    public function __construct($judul, $penulis, $penerbit, $harga, $jam)
    {
        //overriding parent constructor
        parent::__construct($judul, $penulis, $penerbit, $harga, $jam);

        $this->jam = $jam;
    }

    public function getInfo()
    {
        $str =  "{$this->judul} | {$this->getLabel()} ({Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        // naruto | penulis, penerbit | harga, Halaman 
        $str = "Game : " . $this->getInfo() . "  {$this->jam} Jam";

        return $str;
    }
}
