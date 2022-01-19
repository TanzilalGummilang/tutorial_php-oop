<?php 

class Product {
	public 
		$title, $writer, $publisher, $price;

	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0 ) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->price = $price;
	}

	public function getLabel() {
		return "$this->title | $this->writer, $this->publisher";
	}
}

$product01 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$product02 = new Product("Uncharted", "Neil Duckman", "Sony Computer", 250000);

echo "Komik : ". $product01->getLabel();
echo "<hr>";
echo "Game : ". $product02->getLabel();

?>