<?php
  

  $ds="0";
  $sms ="";
//    include("database/DBController.php");
   $sms="";
   $nameerr = "";

   $emailerr ="";

   $passworderr ="";

    
   if(isset($_POST['submit'])){

     $name = validate_text($_POST['name']);
     
     $email = validate_text($_POST['email']);
    
     $password = validate_text($_POST['password']);

  
     
     if(empty($name)){
      $nameerr = "enter name";
     
     }else if(empty( $email)){
      $emailerr = "enter email";
     }else if(empty($password)){
      $passworderr = "enter password";
     }else{
       $sql = "INSERT INTO user (`name`,`email`, `password`) VALUE (?,?,?)";
   $data = $con->prepare($sql);
   $data->bind_param("sss",$name,$email,$password);

   $redirect = $data->execute(); 

   if($redirect == 1){
     header("location:login.php");
   }else{
     $sms = "sorry no entry";
   }
     }
   }


   function validate_text($text){
     $data = htmlspecialchars(strip_tags(stripslashes($text)));
    
     return $data;
    }
   
?>







<!-- signup us area start here  -->
<div class="sign-in-page sign-up-page section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="login-wrap">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="far fa-user"></span>
                            </div>
                            <h1 class="text-center mb-4">Sign Up</h1>
                            <form class="login-form" method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>">
                               


                                <div class="form-group">
                                    <input type="text" name="name" class="form-control rounded-left"  placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control rounded-left"  placeholder="Email" required>
                                </div>

                                <div class="form-group d-flex">
                                    <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
                                </div>

                                <!-- check box -->

                                <!-- <div class="custom-control custom-checkbox"style="color: #2fdab8; padding-left: 15px;"> -->



                                <div class="form-group">
                                    <button type="submit" name="submit" id="submit"  class="form-control btn btn-primary rounded submit py-3 primary-btn" style="padding: 25px 0px">Sign Up</button>
                                </div>
                                
                                <div class="already-have-account">
                                    Already have an account?<a href="signin.php" class="forget-password-link" name="submit"  type="submit">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>
        <!-- about us area end here  -->