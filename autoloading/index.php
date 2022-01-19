<?php

require_once 'app/init.php';

// object/instances yg mengacu ke child class
$product01 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product02 = new Game("Uncharted", "Neil Duckman", "Sony Computer", 250000, 50);

$showProduct = new ShowInfoProduct;
$showProduct->setProduct( $product01 );
$showProduct->setProduct( $product02 );
echo $showProduct->getProduct();