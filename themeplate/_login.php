<?php  


function redirectToCartPage(){
  header('Location: cart.php?LoginSuccess');
  exit();
}

function redirectToLoginPage(){
  header('Location: index.php?LoginSuccess');
  exit();
}
// if (isset($_SESSION['email'])) {
//   # code...
//   redirectToLoginPage();
// }
$msg = '';
if (isset($_POST['submit'])) {

    include("database/DBController.php");
  # code...
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  if ($email == "" || $password == "") 
    # code...
    $msg = "<div class='alert alert-danger alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Email or Password can not be empty!</div>";
  else{
    $sql = $con->query("SELECT id, password, Email_Status FROM users WHERE email = '$email'");
    if ($sql->num_rows > 0) {
      # code...
      $data = $sql->fetch_array();
      if (password_verify($password, $data['password'])) {
        # code...
        if ($data['Email_Status'] == 0) {
  //         # code...
  //         $msg = "<div class='alert alert-danger alert-dismissible'>
  //  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please verify your email address to activate your account</div>";     
  //  else {
  //    if (!empty($_POST['remember_me'])) {
  //      # code...
  //     setcookie("email", $email, time()+30*24*60*60);
  //     setcookie("password", $password, time()+30*24*60*60);

     }
      else {
       setcookie("email", "");
      setcookie("password", "");
     }
     //include seession user here
     $_SESSION['email'] = $email;
     if ($_GET['user_with_product'] == "shopping_cart-product_listsD2jLe9oeAvSMSrzHQBYhe.PN2qbSugNxHD/8f5dp1gDSYXrYEIPja") {
       
     //log user to checkout page
     redirectToCartPage();
     
     }
     else{
       //log user to index page
     redirectToLoginPage();
     }
    

   }   

      }

else 
  $msg = "<div class='alert alert-danger alert-dismissible'>
   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>You Entered Wrong Email or Password!</div>";  


    }
// else {
//  $msg = "<div class='alert alert-danger alert-dismissible'>
//    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>You Entered Wrong Email or Password! Please check your inputs</div>"; 

// }

  }

// }

?>







 <!-- login area start here  -->
 <div class="sign-in-page section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="login-wrap">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="far fa-user"></span>
                            </div>
                            <h1 class="text-center mb-4">Sign In</h1>
                            <form class="login-form">
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Username" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <input type="password" class="form-control rounded-left" placeholder="Password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="form-control btn btn-primary rounded submit px-3 primary-btn">Login</button>
                                </div>
                                <div class="remember-box form-group d-md-flex justify-content-between mb-0">
                                    <div>
                                        <label class="checkbox-wrap">Remember Me
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                          </label>
                                    </div>
                                    <div class="text-md-end text-lg-end">
                                        <a href="javascript:void(0)" class="forget-password-link">Forgot Password?</a>
                                    </div>
                                </div>
                                
                                <div class="already-have-account">
                                    Don't have an account?<a href="signup.php" class="forget-password-link">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us area end here  -->

