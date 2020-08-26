
<?php
include 'admin_loginchk.php'; 
$con= mysqli_connect("localhost","root","","exam1") or die("mysql not connected");

$result=mysqli_query($con,'SELECT * from registration');
$row=mysqli_fetch_array($result);
mysqli_close($con);
?>
<html>
 <body bgcolor=#566573>
  <table border="1" align="center" bordercolor="#CC0000"  bgcolor="cornsilk">
   <tr><th width="104"> Name</th><th width="104"> Father Name</th><th width="104"> Address</th><th width="104"> E-mail Address</th><th width="104"> Gender</th><th width="104"> DOB</th><th width="104"> Mobile No.</th><th width="104"> Highest Qualification</th><th width="104"> Marks Obtained</th>
   </tr>
    <?php
	   while($row=mysqli_fetch_array($result))
	    {
		 echo"<tr><th>{$row['fname']}&nbsp;{$row['lname']}</th><th>{$row['father']}</th><th>{$row['address']}</th><th>{$row['email']}</th><th>{$row['gender']}</th><th>{$row['dob']}</th><th>{$row['mob']}</th><th>{$row['qual']}</th><th>{$row['mark']}</th>";
		}
	?>
  </table>
 </body>
</html>
