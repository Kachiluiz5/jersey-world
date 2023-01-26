<?php
   $result = "";
   if (isset($_POST['submit'])) {
     # code...
    include("database/DBController.php");
    //data
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    //validate paswword
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
     //date
    date_default_timezone_set("Africa/Lagos");
    $date_created = date('M d, Y \a\t h:ia', time());


// reCaptcher







if ($lname == "" || $fname == "" || $email == "" || $phoneno == "" || $password == "" || $cpassword == "") {
    # code...
   $result = "<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please check your inputs, All fields are required</div>";
  }
  else{
    if (!preg_match("/^[a-zA-Z'. -]+$/", $lname) || !preg_match("/^[a-zA-Z'. -]+$/", $fname)) {
      # code...
     $result = "<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Last Name or First Name should contain only letters <strong>e.g Williams</strong></div>";
 
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      # code...
     $result = "<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>You entered an Invalid Email Format!</div>";
    }
    elseif (!preg_match('/^\+?\d+$/', $phoneno) || strlen($phoneno) < 5) {
      # code...
     $result = "<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your phoneno is not valid, must be a numeric character and not less than 5 digits</div>";
 
    }
    elseif ($password != $cpassword) {
      # code...
     $result = "<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your password does not match!</div>";
    }
 
    elseif (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 ) {
      # code...
     $result = "<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Password must be 8 characters in length with atleast one uppercase and lowercase letter, one numeric and special character <strong>King4life+</strong></div>";
 
    }
 
    else{
   $sql = $con->query("SELECT id FROM users WHERE email = '$email'");
  if ($sql->num_rows > 0) {
    # code...
   $result = "<div class='alert alert-danger alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Email already exists in the database</div>";
 
  }

  else{
    $length = 8;
    $code = strtoupper(substr(md5(time()), 0, $length));
    $finalcode = '?'.$code;
    $user_reg = $lname.$finalcode;
    
    $token = 'qwertyuiopasfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!"£$%^&*()_+@';
    $token_1 = str_shuffle($token);
    $final_token = substr($token_1, 0, 10);
    
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $sql = $con->query("INSERT INTO users (lname, fname, email, phoneno, password, Email_Status, token, reg_id, date_created) VALUES ('$lname', '$fname', '$email', '$phoneno', '$hashedPassword', '0', '$final_token', '$user_reg', '$date_created')");
    
    // if ($sql) {
    //   # code...
    //   include('mailer.php');
    // }
    
     }
    
       }
    
     }
    
    
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
                            <form class="login-form">
                                <div class="form-group">
                                    <input type="text" name="lname" class="form-control rounded-left" value="<?php if(isset($_POST['lname'])){echo htmlentities ($_POST['lname']);}?>" placeholder="Last Name" required="">
                                </div>


                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control rounded-left" value="<?php if(isset($_POST['fname'])){echo htmlentities ($_POST['fname']);}?>" placeholder="First Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control rounded-left" value="<?php if(isset($_POST['email'])){echo htmlentities ($_POST['email']);}?>" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phoneno" class="form-control rounded-left" value="<?php if(isset($_POST['phoneno'])){echo htmlentities ($_POST['phoneno']);}?>"  placeholder="Phone Number" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required="">
                                </div>

                                <div class="form-group d-flex">
                                    <input type="password" name="cpassword" class="form-control rounded-left" placeholder="Password" required="">
                                </div>

                                <!-- check box -->

                                <!-- <div class="custom-control custom-checkbox"style="color: #2fdab8; padding-left: 15px;"> -->



                                <div class="form-group">
                                    <button type="button" class="form-control btn btn-primary rounded submit px-3 primary-btn">Sign Up</button>
                                </div>
                                
                                <div class="already-have-account">
                                    Already have an account?<a href="signin.php" class="forget-password-link" name="submit" type="submit">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>
        <!-- about us area end here  -->