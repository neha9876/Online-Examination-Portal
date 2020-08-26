<?php /* include 'loginchk.php'; */?>
<html>
    
    <head>
        <title>Candidate Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            p.a{color:white;
           align:center;
            font-family:inherit; }
            p.b{border:black;
            border-style:groove;}
            
        </style>
               
        
    </head>
    <body background="images/66.jpg">
        <div style="position:absolute; align:centre; top:0px; left:100px;" ><img src="images/13.jpg" border=2></div>
        <div style="position:absolute; align:left; top:210px; left:400px;">
           <form action="insertion.php"     method="post" enctype="multipart/form-data"> <table border="2">
                <tr><th colspan="2" height="20" width="760" bgcolor="skyblue">
         <h2><p class="a">Candidate Registration</p></h2></th></tr>
         
         <tr><th>  First Name</th>
         <th><input type="text" name="txtfname" required></th></tr>
         <tr><th bgcolor="skyblue">Last name</th><th bgcolor="skyblue"><input type="text"  required name="txtlname"></th></tr>
         <tr><th>Father's Name</th><th><input type="text" required name="txtfather"></th></tr>

         <tr><th bgcolor="skyblue" >Address</th><th ><input type="text" required name="txtadd">
</th></tr>


<tr><th>Email</th><th><input type="text" required name="txtemail"></th></tr>

            <tr><th bgcolor="skyblue">Password</th><th bgcolor="skyblue"><input type="password" required name="txtpass"></th></tr>

            <tr><th> Confirm Password</th><th bgcolor="skyblue"><input type="password" required name="txtconpass"></th></tr>
<tr><th bgcolor="skyblue">Gender</th><th bgcolor="skyblue"><select name="txtgender"><option value="select" checked>----------Select---------</option>
<option value="Male" >Male</option><option value="Female">Female</option></th></tr>
            <tr><th>DOB</th><th><input type="date" required name="txtdob"></th></tr>

            <tr><th bgcolor="skyblue">Mobile Number</th><th bgcolor="skyblue"><input type="text" required name="txtmob"></th></tr>
            <tr><th > Highest Qualification</th><th><input type="text" name="txtqual"></th></tr>
            <tr><th bgcolor="skyblue">Marks Obtained</th><th bgcolor="skyblue"><input type="text" required name="txtmark"></th></tr>


            
<tr><th colspan="2" > <input type="checkbox" name="txttick" >I hereby declare all of my information is correct.</th></tr>
            
<tr><th colspan="2"bgcolor="skyblue" > <input type="submit"  value="Confirm" name="submit"><input type="Reset" name="reset" value="reset"></th>
    </tr>

     </table>
</form></div>
    </body>
</html>
