
<?php

// require MySQL Connection
require ('DATABASE/DBController.php');

// require Product Class
require ('DATABASE/Product.php');

// require Cart Class
require ('DATABASE/Cart.php');


// DBController object
$db = new DBController();
// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );
