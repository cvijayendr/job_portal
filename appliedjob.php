<?php 

session_start();
if(!(isset($_SESSION['name'])))
{
    echo "<script>window.location.replace('login.php');</script>";
}

?>
<html>
    <head>
        
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
  
  <a href="Logout.php">Logout</a>
  <a href="Dashboard.php">dashboard</a>
</div>
               <form action="" method="post">
                                     
                   <div style="width:100%;border:0px solid black;margin-top:20px ">
                        <p style="font-family: sans-serif;font-size: 32px;text-align: center">Applied Jobs</p>
                   <?php
        include_once 'database.php';
        $name=$_SESSION['name'];
       $qu=mysqli_query($c,"select qualification,userid from user where email='$name' ");
       $qu1=mysqli_fetch_array($qu);
       
         $query=  mysqli_query($c,"select jobpostid,jobtitle,description,salary,experience,qualification,skill,createdate from jobpost where qualification='$qu1[0]'");
        
        echo '<table><tr><th>Job Title</th><th>Job Description</th><th>Salary</th><th>Experience</th><th>Qualification</th><th>Skills</th></tr>';
        while($j=mysqli_fetch_array($query))
        {
            $c2=mysqli_query($c,"select count(applyid) from applyjob where jobpostid=$j[0] and userid=$qu1[1]");
        $c1=mysqli_fetch_array($c2);
            if($c1[0]==1)
            {
              echo "<tr><td>$j[1]</td><td>$j[2]</td><td>$j[3]</td><td>$j[4]</td><td>$j[5]</td><td>$j[6]</td></tr>";  
            }
            }
        echo '</table>';
        ?>
                       </div> 
               </form>       
         </div>
         
    
         </body>
         </html>