<?php
 ob_start();
session_start();

 // include header.php file
 require_once('header.php');
 
?>
      
    <?php 
        // hero section
        include('themeplate/_signup.php');




    ?>

      

<?php 
    // including footer.php file
    require_once('footer.php'); 

?>

      