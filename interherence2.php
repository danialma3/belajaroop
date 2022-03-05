<?php 

/**
 * 
 */
class Produk
{
   public $judul,
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $jmlJam;
   
   public function __construct($judul = "Judul", $penulis ="Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlJam = 0)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->jmlJam = $jmlJam;
   }
   public function getLabel() {
      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
   }
   public function infoLengkapProduk(){
      $str = "Anda Mencetak {$this->getLabel()}, ";
      return $str;
   }
}

/**
 * 
 */
class Komik extends Produk
{
   
   function infoLengkapKomik(){
      $str = "Anda Mencetak {$this->getLabel()}, {$this->jmlHalaman} Halaman";
      return $str;
   }
}

class Game extends Produk
{
   
   function infoLengkapGame(){
      $str = "Anda Mencetak {$this->getLabel()}, {$this->jmlJam} Jam";
      return $str;
   }
}

class CetakInfoProduk 
{

   //ini Kuncinya 
   public function cetak(Produk $produk){
      $str = "Anda Mencetak {$produk->getLabel()}";
      return $str;
   }
}

$Produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 35000, 50, 0, "Komik");
$Produk2 = new Game("PES2022", "Kojima", "Konami", 450000, 0, 50, "Game");

echo $Produk1->infoLengkapKomik($Produk1);
echo "<br>";
echo $Produk2->infoLengkapGame($Produk2);

// Anda Mencetak Naruto, Masashi Kisimoto, Shonen Jump, 35000, 100 Halaman
// Anda Mencetak PES2022, Kojima, Konami, 450000, 50 jam

// saya melakukan ini di linux ubuntu