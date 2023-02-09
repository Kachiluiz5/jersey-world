<?php
if (isset($_POST['checkout-submit'])) {
    if (!isset($_SESSION['user'])) {
        // redirect to login page
        header("Location: login.php");
        exit;
    } else {
        // process checkout
    }
}
?>
