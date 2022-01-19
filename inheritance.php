<?php 

// class produk
class Product {

	// property
	public 
		$title, $writer, $publisher, $price, $totalPages, $totalTime;

	// method construct
	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $totalPages = "null", $totalTime = "null") {
		$this->title = $title;
		$this->writer = $writer;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPages = $totalPages;
		$this->totalTime = $totalTime;
	}

	// method ambil label
	public function getLabel() {
		return "$this->writer, $this->publisher";
	}

	// method infoLengkap
	public function getInfoProduct() {
		$getInfoProduct = "{$this->title} | {$this->getLabel()} | Rp. {$this->price}";
		return $getInfoProduct;
	}
}

// class komik (child class dari Product)
class Comic extends Product {
	public function getInfoProduct() {
		$getInfoProduct = "Komik : {$this->title} | {$this->getLabel()} (Rp. {$this->price}) - {$this->totalPages} halaman";
		return $getInfoProduct;
	}
}

// class game (child class dari Product)
class Game extends Product {
	public function getInfoProduct() {
		$getInfoProduct = "Game : {$this->title} | {$this->getLabel()} (Rp. {$this->price}) - {$this->totalTime} jam";
		return $getInfoProduct;
	}
}

// class info produk
class InfoProduct {

	// method tampil info produk dgn parameter class Product dan objectnya
	public function infoProduct( Product $product ) {
		$info = "{$product->title} | writer: {$product->writer} | publisher: {$product->publisher} | Rp. {$product->price}";
		return $info;
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
$product01 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$product02 = new Game("Uncharted", "Neil Duckman", "Sony Computer", 250000, 0, 50);

// menampilkan object/instance dgn method getInfoProduct() 
echo $product01->getInfoProduct();
echo "<br>";
echo $product02->getInfoProduct();
echo "<hr>";


?>