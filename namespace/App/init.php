<?php

/*require_once 'product/InfoProduct.php';
require_once 'product/Product.php';
require_once 'product/Comic.php';
require_once 'product/Game.php';
require_once 'product/ShowInfoProduct.php';*/

// app\product\User.php
spl_autoload_register( function( $class ) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Product/' . $class . '.php';
});

// app\service\User.php
spl_autoload_register( function( $class ) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Service/' . $class . '.php';
});