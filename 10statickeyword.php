<?php
//static keyword
// class ContohStatic
// {
//     public  static $angka = 1;

//     public static function halo()
//     {
//         return "halo ." . self::$angka++ . "kali";
//     }
// }

// echo ContohStatic::$angka;

// echo ContohStatic::halo();
// echo ContohStatic::halo();

// untuk apa static keyword?
// - member yang terikat dengan class, bukan dengan obj2ect
// - nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
// - MEmbuat kode menjadi 'prodcedural'
// - biasanya digunakan untuk membuat fungsi bantuan / helper
// - atau digunakan di clas-class utility pada framework

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo" . self::$angka++ . "kali";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
