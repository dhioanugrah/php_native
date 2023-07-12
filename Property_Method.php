<!-- contoh property method di dunia nyata

Class dari mobil
Property:
    ->name
    ->merk 
*dapat diset default seperti name = "lambo";
*dapat diset setelah object contoh:
$mobil1 = new mobil
$mobil1->name = "ferari";

Method:
    ->Tambah Kecepatan
    ->KurangiKecepatan -->

<?php

class Produk{
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "Airlangga";
    public $harga = 0;

    //method menggunakan $this-> untuk menggambil nilai variabel dalam class
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }

}

// $produk1 = new Produk();
// $produk1->penulis = "dhio";
// var_dump($produk1);

$produk2 = new Produk();
//ketika ingin menganti isi properti harus diperhatikan nama propertynya harus sama
$produk2->judul = "Kur Kur";
$produk2->penulis = "dhio anugrah";
//kita dapat menambah properti
$produk2->lokasi = "samarinda";

$produk_game = new Produk();
$produk_game->judul = "Roblox";
$produk_game->penulis = "iyo";
$produk_game->penerbit = "google";
$produk_game->harga = 10000;

//jika ingin print menggunakan echo
//jika panggil method jangan lupa buka tutup kurung
echo "Komik: " . $produk2->getLabel();
echo  "<br>";
echo "Game: " .$produk_game->getLabel();


?>

