<?php
session_start();
if (!isset($_SESSION['user'] ))
{
$redirect = $_SERVER['PHP_SELF'];
header("Refresh: 2; URL=admin_login.html?redirect=$redirect");
echo "You are being redirected to the login page!<br>";

die();
}
/*else
{
echo "<div style=float:right; position:absolute; top:20px;>";
echo "Current user:".$_SESSION['user'];
echo " <a href=admin_logout.php>Logout</a></div>";
}*/
?>