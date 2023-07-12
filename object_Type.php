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
        return "$this->penulis, $this->penerbit";
    }

}

//class berbeda harus nya berbeda file tetapi hanya untuk tes tidak apa"
class CetakInfoProduk{
    //kita masukkan class Produk agar hanya object dari Produk yg dapat dikerjain
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp.{$produk->harga})";
        return $str;
    }
}

$produk_komik = new Produk("Kur Kur", "dhio", "itk", 5000);
$produk_game = new Produk("Clover", "anugrah", "itk", 1200);

echo "Komik: " . $produk_komik->getLabel();
echo  "<br>";
echo "Game: " . $produk_game->getLabel();

echo  "<br>";
//cara manggil class yang kita buat 
$infoProduk = new CetakInfoProduk();
//kita panggil method nya dan panggil object yang mau dicetak
echo $infoProduk->cetak($produk_game);
?>