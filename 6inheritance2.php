<?php

// class Mobil
// {
//     public $nama, $merk, $warna,
//         $kecepatanMaksimal,
//         $jumlahPenumpang;

//     public function tambahKecepatan()
//     {
//         return "Kecepatan bertambah!";
//     }
// }

// class MobilSport extends Mobil
// {
//     public $turbo = false;

//     public function jalankanTurbo()
//     {
//         $this->turbo = true;
//         return "Turbo dijalankan!";
//     }
// }

// $mobil = new MobilSport();
// echo $mobil1->tambahKecepatan();
// echo "<br>";
// echo $mobil1->jalankanTurbo();

// class
class Produk
{
    // property
    public $judul = "judul",
        $penulis = "penuliss",
        $penerbit = "penerbitt",
        $harga = "harga",
        $halaman = "halaman",
        $jam = "jam";

    // public function sayHello()
    // {
    //   return "Hello world";
    // }

    //biasa digunakan untuk connect DB
    // setiap instance dibuat contruct dipanggil
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $jam)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jam = $jam;
    }

    public function getLabel()
    {
        //untuk menggail property diluar method tambah $this->
        return "$this->penulis, $this->penerbit";
    }

    public function InfoLengkap()
    {
        // naruto | penulis, penerbit | harga, Halaman atau Jam
        $str = ": {$this->judul} | {$this->getLabel()} | {$this->harga}";
        return $str;
    }
}

// Inheritance 1
class Komik extends Produk
{
    public function InfoLengkap()
    {
        // naruto | penulis, penerbit | harga,  Jam
        $str = "Komik : {$this->judul} | {$this->getLabel()} | Rp.{$this->harga} {$this->halaman} jam";

        return $str;
    }
}

// Inheritance 2
class Game extends Produk
{
    public function InfoLengkap()
    {
        // naruto | penulis, penerbit | harga, Halaman 
        $str = "Game : {$this->judul} | {$this->getLabel()} | Rp.{$this->harga} {$this->jam} Halaman";

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

//instance construtor Inheritance Komik dgn parameter
$produk1 = new Komik("Naruto", " masasi", "shoe", 100000, 100, 0);

//instance construtor Inheritance Game dgn parameter
$produk2 = new Game("one Piece", "neil", "sony", 200000, 0, 50);


//instance
echo $produk1->InfoLengkap();
echo "<br>";
echo $produk2->InfoLengkap();
