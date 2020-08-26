
<?php
session_start();
echo '<script>console.log("'.$_SESSION['cnd'].'");</script>';
?>

<html>
<head>
<style>
p.a{color:white;}
</style>
<script type="text/javascript">
function newwin()
{
  
 
   window.open("quesframe.php",'_blank',"titlebar=no,toolbar=no,scrollbars=no,menubar=no,statusbar=no,location=no,directories=no,height=1300px,width=1440px");
 
}
</script>
</head>
<body style="background:url(images/jjj.jpg);background-repeat:  no-repeat;" width ="100%">
<h1><strong><p class=a>Instructions :</p></strong></h1>
<h3><strong> <font style="color:#a52a2a;font-style:italic;">Must read all the instructions before starting the exam :</font></strong></h3>
<h4><font style="color:white;font-style:italic;">1.  The test consists of 10 questions.<br/>
2.  This test is an outcome of an intensive process through which well researched and studied questions have been prepared by our team.<br/>
3.  You have 5 minutes to complete the test.<br/>
4.  There is only one correct answer to each question. Click on the most appropriate option to mark it as your answer.<br/>
5.  You will be awarded 2 marks for each correct answer.<br/>
6.  There is  negative marking too, for each wrong answer 0.5 will be deducted. <br/>
7.  Automatic submission of answers when scheduled time gets over.</font></h4>
<div style="position: relative; top:50px; left: 500px;background-color: #009999; height:200PX; width: 200PX "> <br/><br/><br/>
<form>
<table border="0" align="center">
  
<tr><td colspan="2"><center>&nbsp</center></td>  
<tr><td colspan="2"><center><input type="button" value="Start"  onclick="newwin()"/></center></td>
</table>
</form>
</div>
</body>
</html>