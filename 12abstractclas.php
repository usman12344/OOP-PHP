<!-- Abstract class
- sebuah kelas yang tidak dapat di instansiasi
- kelas abstrak
- mendefinisikan interface untuk kelas lain yang menjadi turunannya
- berperan sebagai kerangka dasar untuk kelas turunannya
- memliki minimal 1 method abstrak
- digunkana dalam pewarisan / inheritance untuk memaksakan implementasi method abstrak yang sama untuk semua kelas  turunannya -->

<!-- abstract class (2)
- semua kelas turunan, harus mengimplementasikan method abstrak yang ada dikelas abstraknya
- kelas abstrak boleh memiliki property / method regular
- kelas abstrak boleh memiliki property / static method -->

<!-- kenapa harus menggunakan kelas abstrak ?
- mempresentasikan ide atau konsep dasar
- "composition over inheritance"
- salah satu car amenerapkan polimorphism
- sentralisasi logic
- mempermudah pengerjaan tim -->


<?php

// class
abstract class Produk
{
    // property
    private $judul = "judul",
        $penulis = "penuliss",
        $penerbit = "penerbitt";

    protected $diskon = 0;

    private $harga = "harga";

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

    abstract public function InfoLengkap();

    public function getInfo()
    {
        // naruto | penulis, penerbit | harga, Halaman atau Jam
        $str = " {$this->judul} | {$this->getLabel()} | {$this->harga}";
        return $str;
    }
}

// Inheritance 1
class Komik extends Produk
{
    // variable
    public $halaman;

    // constructor khusus halaman
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
    {
        //overriding parent constructor
        parent::__construct($judul, $penulis, $penerbit, $harga, $halaman);

        $this->halaman = $halaman;
    }


    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function InfoLengkap()
    {
        // naruto | penulis, penerbit | harga,  Jam
        // parent:: hanya menggunakan metod parent
        $str = "Komik : " . $this->getInfo() . " {$this->halaman} jam";

        return $str;
    }
}

// Inheritance 2
class Game extends Produk
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
    public function InfoLengkap()
    {
        // naruto | penulis, penerbit | harga, Halaman 
        $str = "Game : " . $this->getInfo() . "  {$this->jam} Halaman";

        return $str;
    }
}

//class khusus cetak
class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    // must instance Produk
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "-{$p->InfoLengkap()} <br>";
        }
        return $str;
    }
}


//instance construtor Inheritance Komik dgn parameter
$produk1 = new Komik("Naruto", " masasi", "shoe", 100000, 100);

//instance construtor Inheritance Game dgn parameter
$produk2 = new Game("one Piece", "neil", "sony", 200000, 50);


//instance
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
