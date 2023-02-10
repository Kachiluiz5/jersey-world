<?php
if(isset($_SESSION['begin'])){


}else{
  header('location:login.php');
}
include("database/connect.php");

$sql="SELECT username, email from blog_register WHERE ID =?";
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