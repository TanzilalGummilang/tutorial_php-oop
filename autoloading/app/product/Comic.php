<?php

// class komik (child class dari Product)
class Comic extends Product implements InfoProduct {

	// property ambil variabel spesial (property khusus/tidak ada di class parent)
	public $totalPages;

	// method ambil dari instance
	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $totalPages = "null" ) {

		// jalankan pake method construct dari parent
		parent::__construct( $title, $writer, $publisher, $price );

		// ambil dari instance dan simpan ke property variabel spesial
		$this->totalPages = $totalPages;
	}

	// method utk tampil info produk komik
	public function getInfo() {
		$getInfo = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $getInfo;
	}

	public function getInfoProduct() {
		$getInfoProduct = "Komik : ". $this->getInfo() ." - {$this->totalPages} halaman";
		return $getInfoProduct;
	}
	// akhir method info
}