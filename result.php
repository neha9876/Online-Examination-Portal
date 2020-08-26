<?php 
session_start();
echo '<script>console.log("'.$_SESSION['cnd'].'");</script>';
$con=mysqli_connect("localhost","root","","exam1") or die("mysql not connected".mysqli_connect_error());


$m=0;

$i=1;
$qry=mysqli_query($con,'select fname,lname,email from registration where email="'.$_SESSION['cnd'].'"');
$row=mysqli_fetch_array($qry) or die("not fetched".mysqli_connect_error());
$rt=mysqli_query($con,'select email from registration where email="'.$_SESSION['cnd'].'"');
$rs=mysqli_fetch_array($rt) or die("not fetched ".mysqli_connect_error());
while($i<=10)
{
 
 $retm=mysqli_query($con,'select cop from question where qno='.$i);
 $rowm=mysqli_fetch_array($retm) or die("not fetched".mysqli_connect_error());
 $r3=mysqli_query($con,'select qn'.$i.' from marks where email="'.$rs["email"].'"');
 $row3=mysqli_fetch_array($r3) or die("not fetched ".mysqli_connect_error());
 if($row3["qn".$i]==0){
 }else if($rowm["cop"]==$row3["qn".$i])
 { 
$m=  $m+2;
 }
else
{$m=$m-0.5;
}
 $i++;
}
$t=$m; 
?>
<html>
 <body>
     <table border=0>
      
      <tr> <td>
      Candidate Name: &nbsp; &nbsp; </td> <td><?php echo $row["fname"]." &nbsp;".$row["lname"]?> </td>
      </tr>
      
     
     </table>
     <br/><br/><br/><br/>
     <table align="center" border=2>
       <tr>
        
	<th> 
        </th>
        <th>Result 
        </th>
       </tr>
       <tr>
	<th>Full Marks 
        </th>
        <th>20
       </tr>
       <tr>
	<th>Marks Obtained  
        </th>
        <th><?php echo $m;?> 
        </th>
       </tr>
     </table>
 </body>
</html>