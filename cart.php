<?php
 ob_start();

// include header.php file
 require_once('header.php');
 
 ?>

  
<?php 

    //    products include
    // include('themeplate/_cart-themeplate.php');
    count($product->getData('cart')) ? include ('themeplate/_cart-themeplate.php') :  include ('themeplate/_cart_notFound.php');

    // wishlist template

    count($product->getData('wishlist')) ? include ('themeplate/_wishlist-template.php') :  include ('themeplate/_empty-wishlist.php');
 

 
?>
  

<?php 
        // including footer.php file
        require_once('footer.php'); 

 ?>

      