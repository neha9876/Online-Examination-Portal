<?php
session_start();
if(!isset($_SESSION['redirect']))
{
$_SESSION['redirect']="candidate.php";
}
$conn=mysqli_connect("localhost","root","","exam1")or die("mysql is not connect".mysqli_connect_error());


$rs=mysqli_query($conn,'SELECT email,pass from registration WHERE email ="'.$_POST[user].'" AND pass= "'.$_POST[password].'"');

$row=mysqli_fetch_array($rs);
if(!empty($row['email']) AND !empty($row['pass']))
{
$_SESSION['cnd']=$row['email'];
header ("Refresh: 2; URL=" . $_SESSION['redirect'] );
echo "please wait! while loading your page" ;
}
else
{
echo "Invalid User or password";
echo "<br>You are going to redirect login page....";
header("Refresh:2; url=cnd_login.php");
}

mysqli_close($conn);
?>
