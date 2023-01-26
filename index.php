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
        // include('Template/_top-sale.php');
        include('themeplate/trail.php');

         // featured product
        //  include('Template/_special-price.php');


    ?>

    <br><br><br><br><br>
      

<?php 
    // including footer.php file
    require_once('footer.php'); 

?>

      