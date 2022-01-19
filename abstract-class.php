<?php 

// abstract class produk
abstract class Product {

	// property
	private $title, $writer, $publisher, $price, $discount = 0;
	
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

	// abstract method
	abstract public function getInfoProduct();

	// method tampil info produk
	public function getInfo() {
		$getInfoProduct = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $getInfoProduct;
	}
}


// class komik (child class dari Product)
class Comic extends Product {

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
	public function getInfoProduct() {
		$getInfoProduct = "Komik : ". $this->getInfo() ." - {$this->totalPages} halaman";
		return $getInfoProduct;
	}
}

// class game (child class dari Product)
class Game extends Product {
	public $totalTime;

	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $totalTime = "null" ) {

		parent::__construct( $title, $writer, $publisher, $price );

		$this->totalTime = $totalTime;

	}

	public function getInfoProduct() {
		$getInfoProduct = "Game : ". $this->getInfo() ." ~ {$this->totalTime} jam";
		return $getInfoProduct;
	}
}


// class info produk
class ShowInfoProduct {

	public $products = [];

	public function setProduct( Product $product ) {
		$this->products[] = $product;
	}

	public function getProduct() {
		$str = "Daftar Produk : <br>";

		foreach( $this->products as $product ) {
			$str .= "- {$product->getInfoProduct()} <br>";
		}
		return $str;
	}

	// method tampil info produk dgn parameter class Product dan objectnya
	public function showInfoProduct( Product $product ) {
		$showInfoProduct = "{$product->title} | writer: {$product->writer} | publisher: {$product->publisher} | Rp. {$product->price}";
		return $showInfoProduct;
	}
}



// object/instances yg mengacu ke child class
$product01 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product02 = new Game("Uncharted", "Neil Duckman", "Sony Computer", 250000, 50);

$showProduct = new ShowInfoProduct;
$showProduct->setProduct( $product01 );
$showProduct->setProduct( $product02 );
echo $showProduct->getProduct();






?>