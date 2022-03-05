<?php 

/**
 * 
 */
class Produk
{
	public	$judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = "harga";
	
	public function __construct($judul, $penulis, $penerbit, $harga)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function getLabel() {
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
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

$Produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 35000);
$Produk2 = new Produk("PES2022", "Kojima", "Konami", 450000);