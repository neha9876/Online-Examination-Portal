<?php
if(isset($_POST['submit']))
{

$con=mysqli_connect("localhost","root","","exam1");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$qry_insert='insert into question(ques,op1,op2,op3,op4,cop) 
values("'.$_POST["txtques"].'","'.$_POST["txtop1"].'","'.$_POST["txtop2"].'","'.$_POST["txtop3"].'", "'.$_POST["txtop4"].'","'.$_POST["txtcop"].'");';
if(mysqli_query($con,$qry_insert))
{
    echo "Records inserted successfully.";
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);

}
?>
<HTML>
<BODY>
</BODY>
</HTML>


