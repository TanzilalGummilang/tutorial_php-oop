<?php 
// abstract class produk
abstract class Product {

	// property
	protected $title, $writer, $publisher, $price, $discount = 0;
	
	// method construct
	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0 ) {
		$this->title = $title;
		$this->writer = $writer;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	// method judul
	public function setTitle($title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}
	// akhir method judul

	// method penulis
	public function setWriter($writer) {
		$this->writer = $writer;
	}

	public function getWriter() {
		return $this->writer;
	}
	// akhir method penulis

	// method penerbit
	public function setPublisher($publisher) {
		$this->publisher = $publisher;
	}

	public function getPublisher() {
		return $this->publisher;
	}
	// akhir method penerbit

	// method diskon
	public function setDiscount($discount) {
		$this->discount = $discount;
	}

	public function getDiscount() {
		return $this->discount;
	}
	// akhir method diskon

	// method harga
	public function setPrice($price) {
		$this->price = $price;
	}

	public function getPrice() {
		return $this->price - ($this->price * $this->discount / 100);
	}
	// akhir method harga

	// method tampil label
	public function getLabel() {
		return "$this->writer, $this->publisher";
	}

	// method tampil info produk
	abstract public function getInfo();
}



?>