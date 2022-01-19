<?php 

// class produk
class Product {

	// property
	public 
		$title, $writer, $publisher, $price, $totalPages, $totalTime, $type;

	// method construct
	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $totalPages = "null", $totalTime = "null", $type ) {
		$this->title = $title;
		$this->writer = $writer;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPages = $totalPages;
		$this->totalTime = $totalTime;
		$this->type = $type;
	}

	// method ambil label
	public function getLabel() {
		return "$this->writer | $this->publisher";
	}

	// method infoLengkap
	public function getInfoDetail() {
		$infoProductDetail = "{$this->type} : {$this->title} | {$this->getLabel()} | Rp. {$this->price}";
		if( $this->type == "Komik" ) {
			$infoProductDetail .= " - {$this->totalPages} halaman";
		} else if( $this->type == "Game" ) {
			$infoProductDetail .= " ~ {$this->totalTime} jam";
		}
		return $infoProductDetail;
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
$product01 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$product02 = new Product("Uncharted", "Neil Duckman", "Sony Computer", 250000, 0, 50, "Game");

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

echo $product01->getInfoDetail();
echo "<br>";
echo $product02->getInfoDetail();


?>