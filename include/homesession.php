<?php
if(isset($_SESSION['begin'])){


}else{
  header('location:index.php');
}
include("database/DBController.php");

$sql="SELECT username, email from user WHERE user_id =?";
$newcon = $con->prepare($sql);
$newcon->bind_param("s",$_SESSION['begin']);
$newcon->execute();
$newcon->bind_result($usermainname,$useremail);
$usermainname=$useremail="";
while($newcon->fetch()):
 $username = $usermainname;
 $email = $useremail;
endwhile;
?>