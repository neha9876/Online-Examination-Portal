<?php
session_start();
if (!isset($_SESSION['cnd'] ))
{
$redirect = $_SERVER['PHP_SELF'];
header("Refresh: 2; URL=cnd_login.php?redirect=$redirect");
echo "You are being redirected to the login page!<br>";

die();
}
/*else
{
echo "<div style=float:right; position:absolute; top:20px;>";
echo "Current user:".$_SESSION['cnd'];

echo "<br> {$row['fname']}";
}*/
?>