<?php

/*require_once 'product/InfoProduct.php';
require_once 'product/Product.php';
require_once 'product/Comic.php';
require_once 'product/Game.php';
require_once 'product/ShowInfoProduct.php';*/

spl_autoload_register( function( $class ) {
	require_once __DIR__ . '/product/' . $class . '.php';
});