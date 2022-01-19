<?php

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