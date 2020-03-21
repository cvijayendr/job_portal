<?php 

session_start();
if(!(isset($_SESSION['name'])))
{
    echo "<script>window.location.replace('login.php');</script>";
}

?>
<html>
    <head>
        <style>
            table {
    border-collapse: collapse;
    width: 60%;
    margin-left: 100px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
        </style>
        <title>
           Dashboard
        </title>
        <link rel="stylesheet" type="text/css" href="styles/dashboard.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
         <div id="main">
               
             <div id="a">
                 <a href="home.php"><img src="images/logo.png" alt="" height="100px" width="250px"/></a>
                 
                 
                  <img style="float: right" src="images/usericon.png" alt="" height="100px" width="100px"/>
                  <div style="float:right" ><?php
                 $np1=$_SESSION['name'];$arr=array();$arr1=array();$arr=explode("@", $np1);$arr1=explode(".", $arr[0]);
echo '<br><br>WELCOME<br>';echo strtoupper($arr1[0]);
?></div>
            </div>
            
            <div class="topnav" id="myTopnav">
  
 
  <a href="dashboard.php">Dashboard</a>
</div>
        <?php
include_once 'database.php';
$id=$_REQUEST['v'];
$r=	mysqli_query($c,"select *,count(userid) from resume where userid=$id");
//print($r);
$r2= mysqli_fetch_array($r);
if($r2[0]>0)
{
    $rl=  mysqli_query($c,"select * from resume where userid=$id");
    echo "<br><div style=\"margin:auto;width:70%;border:2px solid #585858;\">
       <br> <div style=\"margin:auto;width:95%;border:2px solid #585858;\">
       <p style=\"font-family: sans-serif;font-size: 30px;text-align:center;margin-top:50px;\">$r2[2]</p>
       <p style=\"font-family: sans-serif;font-size: 22px;text-align:center;\">$r2[3]</p>
    <p style=\"font-family: sans-serif;font-size: 18px;text-align:center;\">$r2[4], $r2[5]</p>
     <br><br>";
    $rp=  mysqli_query($c,"select qualification,designation,skills from user where userid=$id");
$rp2=mysqli_fetch_array($rp);
    echo "
<p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Qualification: $rp2[0]</p>
<p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Designation: $rp2[1]</p>
<p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Skills: $rp2[2]</p>

<br><br>

<p style=\"font-family: sans-serif;font-size: 25px;margin-left:20px;\">Experience:</p>";

while($r1=  mysqli_fetch_array($rl))
{
//    echo "$r1[6],$r1[7],$r1[8],$r1[9],$r1[10]";
    echo "<table>
        <tr><td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Company Name:</p></td>
        <td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:25px;\">$r1[6]</p></td></tr>
    
    <tr><td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Location:</p></td>
        <td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:25px;\">$r1[7]</p></td></tr>
    
    <tr><td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Time Period:</p></td>
        <td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:25px;\">$r1[8]</p></td></tr>
    
    <tr><td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Position:</p></td>
        <td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:25px;\">$r1[9]</p></td></tr>
    
    <tr><td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:20px;\">Experience:</p></td>
        <td><p style=\"font-family: sans-serif;font-size: 20px;margin-left:25px;\">$r1[10]</p></td></tr>
        
</table><br><br>";
}
}
else
{
    echo "<p style=\"font-family: sans-serif;font-size: 25px;text-align:center;color:red;margin-top:100px;\">This User Is Not Yet Upload The Resume</p>";
}
echo "</div>
<br>
</div>";
?>          
   
         </div>
        
    </body>
</html>