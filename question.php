<?php
session_start();
echo '<script>console.log("'.$_SESSION['user'].'");</script>';
?>

 <html>

<head></head>
<style>
p.a{color:white;
font-family:book antiqua;
}
</style>
<body bgcolor=#566573>
<div style="position:absolute; align:left; left:3; top:2px; height:30px; width:40px;">
<center><form method="POST" action="ques_insert.php">
 <div style="position:absolute; align:left; left:400px; top:30px;"><table cellpadding=3 cellspacing=3 width=500 height=50  border=0>
<tr ><th colspan=2 bgcolor=#566573><h2><p class=a > Question Entry</p></h2></th></tr>

<tr><th bgcolor=#566573><p class=a> Enter Question</p></th><th > <input type="text" name="txtques"></th></tr>

<tr><th bgcolor=#566573 > <p class=a>Option1  </p></th><th>      <input type="text" name="txtop1"></th></tr>
<tr><th bgcolor=#566573><p class=a>Option2</p> </th><th >  <input type="text" name="txtop2"></th></tr>
<tr><th bgcolor=#566573><p class=a>Option3</p>   </th><th>     <input type="text" name="txtop3"></th></tr>
<tr><th bgcolor=#566573><p class=a>Option4</p>      </th><th>  <input type="text" name="txtop4"></th></tr>
 <tr><th bgcolor=#566573 ><p class=a>Correct Answer</p></th><th> <input type="text" name="txtcop"></th></tr>
<tr ><th></th><th><input type="submit" name="submit" value="submit">
<input type="reset" value="reset"></th></tr>
</table></div>
</form></center>
</body>
</html>
