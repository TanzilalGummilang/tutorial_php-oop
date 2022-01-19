<?php 

class Product {
	public 
		$title = "judul",
		$writer= "penulis",
		$publisher = "penerbit",
		$price = 0;

	public function getLabel() {
		return "$this->title $this->publisher";
	}
}
/*
$product01 = new Product();
$product01->title = "naruto";
var_dump($product01);

$product02 = new Product();
$product02->tambahProperty = "hahaha";
$product02->title = "uncharted";
var_dump($product02);
*/

$product03 = new Product();
$product03->title = "Naruto";
$product03->writer = "Masashi Kishimoto";
$product03->publisher = "Shonen Jump";
$product03->price = 30000;

$product04 = new Product();
$product04->title = "Uncharted";
$product04->writer = "Neil Duckman";
$product04->publisher = "Sony Computer";
$product04->price = 250000;

echo "Komik : ". $product03->getLabel();
echo "<hr>";
echo "Game : ". $product04->getLabel();

?>