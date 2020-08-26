<?php
session_start();
echo '<script>console.log("'.$_SESSION['cnd'].'");</script>';
$con=mysqli_connect("localhost","root","","exam1") or die("mysql not connected".mysqli_connect_error());

$i=$_SESSION["i"];

if(isset($_POST['Submit1']))
{

$sql='update marks set qn'.$i.'="'.$_POST["R1"].'" where email="'.$_SESSION['cnd'].'"' or die("not updated".mysqli_connect_error());
echo $_SESSION['cnd'];
mysqli_query($con,$sql);
if($i<10)
{
$i=++$_SESSION['i'];
}else{
 echo '<script>window.parent.close();</script>';
 //final submit
}
}


$res=mysqli_query($con,'select * from question where qno='.$i);
$qry=mysqli_fetch_array($res); 
$q=$qry["ques"];
$op1=$qry["op1"];
$op2=$qry["op2"];
$op3=$qry["op3"];
$op4=$qry["op4"];

mysqli_close($con);
?>
<table width="1000" height="453" border="0">
     <form id="form1" id="form1" method="post" action="">
  <tr>
    <td width="693"><?php echo "Q.No.$i)".$q;?>
</td>
  </tr>
  <tr>
    <td height="254"><p>      
        <input type="radio" name="R1" value="1" />&nbsp;&nbsp;<?php echo "1)".$op1;?>
      <br /> <br /> <br />
        <input type="radio" name="R1" value="2" />&nbsp;&nbsp;<?php echo "2)".$op2;?>       
      <br /> <br /> <br />      
        <input type="radio" name="R1" value="3" />&nbsp;&nbsp;<?php echo "3)".$op3;?>       
      <br /> <br /> <br />      
        <input type="radio" name="R1" value="4" />&nbsp;&nbsp;<?php echo "4)".$op4;?><br/> 
<input type="radio" name="R1" value="0" style="visibility:hidden" checked/><br/>       
      <br />
    </p>     </td>
  </tr>
  <tr>
    <td height="68" style="background-color:#FFCC99"><div align="center" style="background-color:#FFCC99">
      <input type="reset" name="Submit" value="RESET" width="70" />
      &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
      <a href="ques1.php" target="frm1" ><input type="submit" name="Submit1" value="SAVE AND NEXT"  width="70" /></a>
      </div></td>
  </tr>
</table>
</form>
