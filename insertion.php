<?php
if(isset($_POST['submit']))
{

$con=mysqli_connect("localhost","root","","exam1");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$qry_insert='insert into registration(fname,lname,father,address,email,dob,gender,mark,mob,qual,confirmpass,pass)
values("'.$_POST["txtfname"].'","'.$_POST["txtlname"].'","'.$_POST["txtfather"].'","'.$_POST["txtadd"].'","'.$_POST["txtemail"].'","'.$_POST["txtdob"].'","'.$_POST["txtgender"].'","'.$_POST["txtmark"].'","'.$_POST["txtmob"].'","'.$_POST["txtqual"].'","'.$_POST["txtconpass"].'","'.$_POST["txtpass"].'");';
$query='insert into marks (email) values("'.$_POST['txtemail'].'")';
if(mysqli_query($con,$qry_insert) && mysqli_query($con,$query))
{
    echo "Records inserted successfully.";
	header('location:index.html');
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
}
?>
