<?php

abstract class Produk
{
    // property
    protected $judul = "judul",
        $penulis = "penuliss",
        $penerbit = "penerbitt",
        $diskon = 0,
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

    //setter
    public function setJudul($judul)
    {
        // can create validasi
        $this->judul = $judul;
    }
    //getter
    public function getJudul()
    {
        return $this->judul;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        //untuk menggail property diluar method tambah $this->
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

    // public function getInfo()
    // {
    //     // naruto | penulis, penerbit | harga, Halaman atau Jam
    //     $str = " {$this->judul} | {$this->getLabel()} | {$this->harga}";
    //     return $str;
    // }
}
