<?php
  $errornotice ="";

if(isset($_POST ['login'])){
  $email = $_POST ['email'];
  $password = $_POST ['password'];
  $insert = "";

  $sql = "SELECT  user_id,  email, password from user where   email =? AND password =?";

 
  $data = $con->prepare($sql);
  $data ->bind_param("ss",$email,$password);
  $data -> execute();
  $data -> bind_result($id, $dbemail, $dbpassword);

  while ($data-> fetch()):
  $insert = "correct";
  $_SESSION['begin'] = $id;
  endwhile;

       if ($insert !="correct"){
          $errornotice ="invalid username,email or password ";
        }


       if($insert == "correct"){

        header("location:cart.php");


}}

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
                            <form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control rounded-left" placeholder="Enail" name="email" id="email" required>
                                </div>
                                <div class="form-group d-flex">
                                    <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="login" class="form-control btn btn-primary rounded submit px-3 primary-btn">Login</button>
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

