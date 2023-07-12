<!-- //jika menggunakan constructor kita hanya memasukkan ke parameternya
//tidak perlu dipanggil satu" -->

<?php

class Produk{
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "Airlangga";
    public $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis";
    }

}

$produk2 = new Produk("Kur Kur", "dhio", "itk", 5000);
//jika menggunakan constructor yg telah diisi parameter kita gk perlu
//manggil seperti dibawah
// $produk2->judul = "Kur Kur";
// $produk2->penulis = "dhio anugrah";
// $produk2->lokasi = "samarinda";

$produk_game = new Produk("naruto", "anugrah", "itk", 1200);
// $produk_game->judul = "Roblox";
// $produk_game->penulis = "iyo";
// $produk_game->penerbit = "google";
// $produk_game->harga = 10000;

echo "Komik: " . $produk2->getLabel();
echo  "<br>";
echo "Game: " .$produk_game->getLabel();


?>