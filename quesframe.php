<?php 
session_start();
echo '<script>console.log("'.$_SESSION['cnd'].'");</script>';
$_SESSION['i']=1;
$_SESSION['a']=1;
$con=mysqli_connect("localhost","root","","exam1") or die("mysql not connected".mysqli_connect_error());


$qry='insert into marks(email) values("'.$_SESSION["cnd"].'");'; 
mysqli_query($con,$qry);
$ret=mysqli_query($con,"select qno from question");
$num=mysqli_num_rows($ret);
$_SESSION['num']=$num;
?>
<html>
<head>
<title>Timer Test</title>
<script type="text/javascript" >
var _countDowncontainer=0;
var _currentSeconds=0;
 
function ActivateCountDown(strContainerID, initialValue)
{
	_countDowncontainer = document.getElementById(strContainerID);
 
	if (!_countDowncontainer) {
		alert("count down error: container does not exist: "+strContainerID+
			"\nmake sure html element with this ID exists");
		return;
	}
 
	SetCountdownText(initialValue);
	window.setTimeout("CountDownTick()", 1000);
}
 
function CountDownTick() 
{
	if (_currentSeconds <= 0) {
		alert("your time is out");
                self.close(); 
		return;
	}
 
	SetCountdownText(_currentSeconds-1);
	window.setTimeout("CountDownTick()", 1000);
}
 
function SetCountdownText(seconds)
{
	//store:
	_currentSeconds = seconds;
 
	//get minutes:
	var minutes=parseInt(seconds/60);
 
	//shrink:
	seconds = (seconds%60);
 
	//get hours:
	var hours=parseInt(minutes/60);
 
	//shrink:
	minutes = (minutes%60);
 
	//build text:
	var strText = AddZero(hours) + ":" + AddZero(minutes) + ":" + AddZero(seconds);
 
	//apply:
	_countDowncontainer.innerHTML = strText;
}
 
function AddZero(num) 
{
	return ((num >= 0)&&(num < 10))?"0"+num:num+"";
}
window.onload=WindowLoad;
function WindowLoad(event) {
	ActivateCountDown("CountDownPanel", 300);
}
</script>
<style type="text/css">
#CountDownPanel {color: blue; background-color: yellow; font-size: 18px; left:800px;float:right;top:200px;}
</style>
</head>
<body>
<div style="height:120px;width:100%;background-color:#1E90FF; position:relative;"><BR/>
<h1>Online  Examination</h1><div style="float:right;"><?php /* echo "".$_SESSION['user1'];*/
echo "&nbsp; <a href=cnd_logout.php>Logout</a>";?></div>

<span id="CountDownPanel" style="left:800px;"></span></div>
<center>
<div style="width:100%; position:relative;">
<table width="100%" border="1">
  <tr>
    <td width="100%"><iframe height="500" width="100%" name="frm1" scrolling="auto" src="ques.php"></iframe></td>
    
  </tr>
 </table>
</center>
</body>
</html>