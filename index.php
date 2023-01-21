<?php
 ob_start();
 // include header.php file
 require_once('header.php');
 
?>
      
    <?php 
        // hero section
        include('themeplate/_hero.php');

        //  Popular Categories area start here  
        include('themeplate/_categories.php');

        // featured product
        include('themeplate/_top-sale.php');


        // trending product

        include('themeplate/_trendingproduct.php');

        // about section

           // footwear

           include('themeplate/_footwear.php');

    ?>
      

<?php 
    // including footer.php file
    require_once('footer.php'); 

?>

      