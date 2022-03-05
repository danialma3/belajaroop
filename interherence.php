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
          $jmlJam,
          $tipe;
   
   public function __construct($judul = "Judul", $penulis ="Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlJam = 0, $tipe = "Tipe")
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->jmlJam = $jmlJam;
      $this->tipe = $tipe;
   }
   public function getLabel() {
      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
   }
   public function infoLengkapProduk(){
      $str = "Anda Mencetak {$this->getLabel()}, ";
            if($this->tipe == "Komik"){
               $str .= "{$this->jmlHalaman} Halaman";
            }else if($this->tipe == "Game"){
               $str .= " ~ {$this->jmlJam} Jam";
            }

      return $str;
   }
}

/**
 * 
 */
class CetakInfoProduk 
{

   //ini Kuncinya 
   public function cetak(Produk $produk){
      $str = "Anda Mencetak {$produk->getLabel()}";
      return $str;
   }
}

$Produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 35000, 50, 0, "Komik");
$Produk2 = new Produk("PES2022", "Kojima", "Konami", 450000, 0, 50, "Game");

echo $Produk1->infoLengkapProduk($Produk1);
echo "<br>";
echo $Produk2->infoLengkapProduk($Produk2);

// Anda Mencetak Naruto, Masashi Kisimoto, Shonen Jump, 35000, 100 Halaman
// Anda Mencetak PES2022, Kojima, Konami, 450000, 50 jam