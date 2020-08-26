<?php
session_start();
if(!isset($_session['redirect']))
{
$_session['redirect']="admin.php";
}

$conn=mysqli_connect("localhost","root","","exam")or die("mysql is not connect".mysqli_connect_error());

$rs=mysqli_query($conn,'select * from admin where user="'.$_POST[user].'" AND password="'.$_POST[password].'"');
$row=mysqli_fetch_array($rs);
if(!empty($row['user']) AND !empty($row['password']))
{
$_SESSION['user']=$row['user'];
header("Refresh:2;url=".$_session['redirect']);
echo "you are being redirected to your originl page request";
}
else
{
echo "invalid user or password";
echo "<br/> you are going to redirected login page";
header("location:admin_login.html");
}
mysqli_close($conn);
?>
