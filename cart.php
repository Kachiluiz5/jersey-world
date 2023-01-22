<?php
 ob_start();

// include header.php file
 require_once('header.php');
 
 ?>

  
<?php 

    //    products include
    include('themeplate/_cart-themeplate.php');

    // wishlist template

    include('Template/_wishilist_template.php');
 
    // featured product
    // include('themeplate/_top-sale.php');

 
?>
  

<?php 
        // including footer.php file
        require_once('footer.php'); 

 ?>

      