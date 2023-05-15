<!-- visibility = konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek
ada 3 pilihan keyword visibility: public = digunakan dimana saja bahkan diluar class, protected = di kelas dan turunan saja, dan private = hanya dikelas saja-->

<!-- kenapa ?

Hanya memperlihatkan aspek dari class yang dibutuhkan oleh client
menentukan kebutuhan yang jelas untuk object
memberikan kendali pada kode untuk menghindari 'bug' -->

<?php

// class
class Produk
{
    // property
    public $judul = "judul",
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

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        //untuk menggail property diluar method tambah $this->
        return "$this->penulis, $this->penerbit";
    }

    public function InfoLengkap()
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
        $str = "Komik : " . parent::InfoLengkap() . " {$this->halaman} jam";

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
        $str = "Game : " . parent::InfoLengkap() . "  {$this->jam} Halaman";

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
$produk1 = new Komik("Naruto", " masasi", "shoe", 100000, 100);

//instance construtor Inheritance Game dgn parameter
$produk2 = new Game("one Piece", "neil", "sony", 200000, 50);


//instance
echo $produk1->InfoLengkap();
echo "<br>";
echo $produk2->InfoLengkap();
echo "<br>";

// $produk1->diskon = 90;
echo $produk1->setDiskon(50);
echo $produk1->getHarga();
