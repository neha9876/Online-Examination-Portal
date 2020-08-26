<?php

session_start();

echo '<script>console.log("'.$_SESSION['cnd'].'");</script>';

$con=mysqli_connect("localhost","root","","exam1") or die("mysql not connected");

$result=mysqli_query($con,'select fname,lname,father,address,email,dob,gender,mark,mob,qual,pass from registration where email="'.$_SESSION[cnd].'"');
$row=mysqli_fetch_array($result);
mysqli_close($con);

?>
<html>
<body bgcolor=#566573>
<table align="center" border=1 bgcolor="cornsilk" width="50%">
<?php
echo "<tr>
<tr>
<th>Name:</th>
<td>{$row['fname']}&nbsp;{$row['lname']}</td>
</tr>
<tr>
<th>Father Name:</th>
<td>{$row['father']}</td>
</tr>
<tr>
<th> Address:</th>
<td>{$row['address']}</td>
</tr>



<tr>
<th>E-mail Address:</th>
<td>{$row['email']}</td>
</tr>

<tr>
<th>DOB:</th>
<td>{$row['dob']}</td>
</tr>
<tr>
<th>Gender:</th>
<td>{$row['gender']}</td>
</tr>
<tr>
<th>Marks Obtained:</th>
<td>{$row['mark']}</td>
</tr>
<tr>
<th>Mobile Number:</th>
<td>{$row['mob']}</td>
</tr>
<tr>
<th> Highest Qualification:</th>
<td>{$row['qual']}</td>
</tr>

<tr>
<th>Password:</th>
<td>{$row['pass']}</td>
</tr></tr>"
?>
</table>
<body>
</html>
