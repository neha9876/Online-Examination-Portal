

<?php
session_start();
echo '<script>console.log("'.$_SESSION['cnd'].'");</script>';
?>

<html>
    
    <head>
        <title>Candidate Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            .a{background-color:#B2BABB;
               color:black;
              cursor:pointer;
         
            font-family:inherit;
            height:40px;
           width:80px; }
            p.b{border:black;
            
            border-style:groove;}
.btn:hover .a
{
background-color:grey;
color:white;
}
            
        </style>
               
        
    </head>
    <body bgcolor="cornsilk">
        
        <div style="position:relative; align:left; top:110px; "><marquee direction="right"><h3>WELCOME TO ONLINE EXAM</h3></marquee></div>
<div style="position:absolute; top:-20px; width:100%; height:40px; background-color:"#666666";">

<div class="btn"; style="position:absolute; align:left; left:10px;top:210px; width:80px; height:40px; background-color:#666666;"><a href="cnd_view.php" target="frame"><button class=a>View Profile</button></a></div>

<div class="btn"; style="position:absolute; align:left; top:210px;left:90px; width:80px; height:40px;background-color:#666666;"><a href="instruction.php" target="frame"><button class=a>Test</button></a></div>
<div class="btn"; style="position:absolute; align:left; top:210px; width:1150px;left:160px; height:40px;background-color:#666666;"><a href="result.php" target="frame"><button class=a>Result</button></a></div>
<a href="cnd_logout.php" >
<div class="btn"; style="position:absolute; align:left; top:210px; width:80px;left:1250px; height:40px;background-color:#666666;"><button class=a>Logout</button></div></a>
</div>
<hr size=2 bgcolor=black>
<div style="position:relative; top:160px; height:90%; width:100%;">
<iframe style="height:100%;width:100%;" scrolling:auto; name=frame ></iframe></div>
<div class="w3-content w3-section" style="position:absolute;  top:0px; align:left;left:2px; ">
 
<img class="mySlides" src="images/q1.png" style="width:1350px" height=130px border=2>
  <img class="mySlides" src="images/q2.jpg" style="width:1350px" height=130px border=2>
  <img class="mySlides" src="images/q4.jpg" style="width:1350px" height=130px border=2>
 <img class="mySlides" src="images/ba.jpg" style="width:1350px" height=130px border=2>
</div></div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


</script> 
</body>
</html>