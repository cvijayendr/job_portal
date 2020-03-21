<?php 

session_start();
if(!(isset($_SESSION['cname'])))
{
    echo "<script>window.location.replace('companylogin.php');</script>";
}

?>
<html>
    <head>
        
        <title>
           Dashboard
        </title>
        <link rel="stylesheet" type="text/css" href="styles/jobpost.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
         <div id="main">
               
             <div id="a">
                 <a href="home.php"><img src="images/logo.png" alt="" height="100px" width="250px"/></a>
                 
                 
                  <img style="float: right" src="images/usericon.png" alt="" height="70px" width="70px"/>
                  <div style="float:right" ><?php
                 include_once 'database.php';$np1=$_SESSION['cname'];
                      $t=mysqli_query($c, "select cname from company where cid=$np1");
                 $t1=mysqli_fetch_array($t);
echo strtoupper($t1[0]);
?></div>
            </div>
            
            <div class="topnav" id="myTopnav">
  
  <a href="logout.php">Logout</a>
  <a href="companydashboard.php">Dashboard</a>
</div>
             <div id="regbanner">
                <p style="text-align: center;font-family: sans-serif;font-size: 32px;">Post Your Job</p>
        <form action="" method="post" name="form">
           <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Job Title*</label><br>
            <input type="text" name="jtitle" id="jtitle" onClick="c1(this.name)" onkeyup="my()" placeholder="Job Title" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Job Description*</label><br>
            <textarea name="jdesp" id="jdesp" onClick="c1(this.name)" onkeyup="my()" placeholder="Job Description" required></textarea><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Salary*</label><br>
            <input type="text" name="salary" id="salary" onClick="c1(this.name)" placeholder="Salary" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Experience Required*</label><br>
            <select name="exreq" id="exreq">
             <option value="">Select Experience</option>
  <option value="0-1 years">0-1 years</option>
  <option value="1 year">1 year</option>
  <option value="2 years">2 years</option>
  <option value="0-2 years">0-2 years</option>
  <option value="1-2 years">1-2 years</option>
  <option value="2-3 years">2-3 years</option>
  <option value="3 years">3 years</option>
  <option value="2-5 years">2-5 years</option>
  <option value="4 years">4 years</option>
  <option value="5 years">5 years</option>
  <option value="5-7 years">5-7 years</option>
  <option value="6 years">6 years</option>
  <option value="7 years">7 years</option>
  <option value="7-8 year">7-8 years</option>
   <option value="8 years">8 years</option>
  <option value="8-10 years">8-10 years</option>
   <option value="9 years">9 years</option>
    <option value="10 years">10 years</option>
</select><br><br>
<label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Qualification Required*</label><br>        
<input type="text" name="qualreq" id="qualreq" onClick="c1(this.name)" placeholder="Qualification Required" required/><br><br>
<label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Skill Required*</label><br>        
<input type="text" name="skillreq" id="skillreq" onClick="c1(this.name)" placeholder="Skill Required" required/><br><br>
        
<input type="submit" value="Post" name="post" class="btn btn-primary btn-large btn-block"/><br>
       
        </form>
                 </div>
                     
         </div>
       
        
         <?php
 include_once 'database.php';
    if(isset($_POST['post']))
    {
    $jobtitle=$_POST['jtitle'];
    $jobdesp=$_POST['jdesp'];
    $salary=$_POST['salary'];
    $exreq=$_POST['exreq'];
    $qualreq=$_POST['qualreq'];
    $skillreq=$_POST['skillreq'];
   $cname=$_SESSION['cname'];
   $date=date("Y-m-d");
   
  $cid=$_SESSION['cname'];
    $e=mysqli_query($c, "INSERT INTO jobpost VALUES('',$cid,'$jobtitle','$jobdesp','$salary','$exreq','$qualreq','$skillreq','$date')");
    if($e){
    ?>
        <script>
            alert("Job Posted successful!!!");
            
            window.location.replace("companydashboard.php");
        </script>
        <?php
    }    


    
    }
    
?>
         </body>
         </html>