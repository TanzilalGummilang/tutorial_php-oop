<?php 

// class produk
class Product {

	// property
	public 
		$title, $writer, $publisher, $price;

	// method construct
	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0 ) {
		$this->title = $title;
		$this->writer = $writer;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	// method ambil label
	public function getLabel() {
		return "$this->writer, $this->publisher";
	}

	// method infoLengkap
	public function getInfoProduct() {
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
		$getInfoProduct = "Komik : ". parent::getInfoProduct() ." - {$this->totalPages} halaman";
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
		$getInfoProduct = "Game : ". parent::getInfoProduct() ." - {$this->totalTime} jam";
		return $getInfoProduct;
	}
}


// class info produk
class InfoProduct {

	// method tampil info produk dgn parameter class Product dan objectnya
	public function infoProduct( Product $product ) {
		$infoProduct = "{$product->title} | writer: {$product->writer} | publisher: {$product->publisher} | Rp. {$product->price}";
		return $infoProduct;
	}
}



// object/instances yg mengacu ke class Product
$product01 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$product02 = new Product("Uncharted", "Neil Duckman", "Sony Computer", 250000, 0, 50);

// menampilkan object/instance dgn method getLabel() 
echo "Komik : ". $product01->getLabel();
echo "<br>";
echo "Game : ". $product02->getLabel();
echo "<hr>";


// object/instance yg mengacu ke class InfoProduct
$infoProduct01 = new InfoProduct();

// menampilkan object/instance dgn method infoProduct()
echo $infoProduct01->InfoProduct($product01);


echo "<hr>";

echo $product01->getInfoProduct();
echo "<br>";
echo $product02->getInfoProduct();

echo "<hr>";


// object/instances yg mengacu ke child class
$product01 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product02 = new Game("Uncharted", "Neil Duckman", "Sony Computer", 250000, 50);

// menampilkan object/instance dgn method getInfoProduct() dari child class
echo $product01->getInfoProduct();
echo "<br>";
echo $product02->getInfoProduct();
echo "<hr>";



?>