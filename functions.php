<?php

    //   require my sql connection

    require('database/DBController.php');

    // require product class

    require('database/product.php');

    // require Cart Class
    require ('database/Cart.php');


    // DBController object
    $db = new DBController();

    // product object
    $product = new Product($db);

    $product_shuffle = $product->getData();


// Cart object
$Cart = new Cart($db );
// $wishlist = new Wishlist($db);


