
<?php
session_start();
echo '<script>console.log("'.$_SESSION['user'].'");</script>';
?>
<html>
    
    <head>
        <title>Candidate Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            .a{background-color:#566573  ;
               color:white;
              cursor:pointer;
            font-family:calibre;
            height:50px;
           width:96px; }
            p.b{border:black;
            
            border-style:groove;}
.dropbtn {
    background-color:slategray;
    color:white;
    padding: 5px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	font-stretch:condensed;	
}

.dropbtn1 {
    background-color:slategray;
    color:white;
    padding: 14px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	font-stretch:condensed;	
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:cornsilk;
    min-width: 70px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	font-size:16px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:bisque}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #566573;
}
.btn:hover .a
{
background-color:#566573;
color:black;
}
            
        </style>
               
        
    </head>
    <body bgcolor="cornsilk">
 <div style="position:absolute; align:left; top:0px; left:2px;" ><img src="images/ba.jpg" height=200 width=1350 border=2></div>
        
        <div style="position:relative; align:left; top:150px; "><marquee direction="right"><h3><font color="white">WELCOME IN YOUR PAGE</font></h3></marquee></div>
<div style="position:relative; align:left; top:150px; width:100%; background-color:#666666";>
<div class="btn"; style="position:relative; align:left; left:20px; top:0px; width:96px; height:50px; background-color:#666666;"><a href="cnd_detail.php" target="frame1"><button class=dropbtn>Candidate Detail</button></a></div>
   <div style="width:80px; height:30px; left:121px; top:0px; position:absolute; height:50px; width:96px; background-color:#666666;" ><a href="question.php" target="frame1"><button class="dropbtn" >Question Entry</button>
	       
   </div> 
   <div style="width:80px; height:30px; left:1250px; top:0px; position:absolute; height:50px; width:96px; background-color:#666666;"><a href="admin_logout.php"><button class="dropbtn1" >Logout</button></a></div>
</div>

<div style="position:relative; top:190px; height:90%; width:100%;">
<iframe style="height:70%;width:100%;" scrolling:auto; name=frame1 ></iframe></div>
</body>
</html>