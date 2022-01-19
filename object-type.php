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
		return "$this->title $this->publisher";
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
$product01 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$product02 = new Product("Uncharted", "Neil Duckman", "Sony Computer", 250000);

// menampilkan object/instance dgn method getLabel() 
echo "Komik : ". $product01->getLabel();
echo "<br>";
echo "Game : ". $product02->getLabel();
echo "<hr>";


// object/instance yg mengacu ke class InfoProduct
$infoProduct01 = new InfoProduct();

// menampilkan object/instance dgn method infoProduct()
echo $infoProduct01->InfoProduct($product01);

?>