<?php

// class game (child class dari Product)
class Game extends Product implements InfoProduct {
	public $totalTime;

	public function __construct( $title = "judul", $writer = "penulis", $publisher = "penerbit", $price = 0, $totalTime = "null" ) {

		parent::__construct( $title, $writer, $publisher, $price );

		$this->totalTime = $totalTime;

	}

	public function getInfo() {
		$getInfo = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $getInfo;
	}

	public function getInfoProduct() {
		$getInfoProduct = "Game : ". $this->getInfo() ." ~ {$this->totalTime} jam";
		return $getInfoProduct;
	}

}