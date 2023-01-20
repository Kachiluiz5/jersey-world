<?php

    //   require my sql connection

    require('database/DBController.php');

    // require product class

    require('database/product.php');


    // DBController object
    $db = new DBController();

    // product object
    $product = new Product($db);

    $product_shuffle = $product->getData();



