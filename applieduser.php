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
        <link rel="stylesheet" type="text/css" href="styles/dashboard.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
         <div id="main">
               
             <div id="a">
                 <a href="home.php"><img src="images/logo.png" alt="" height="100px" width="250px"/></a>
                 
                 
                  <img style="float: right" src="images/usericon.png" alt="" height="100px" width="100px"/>
                  <div style="float:right" ><?php include_once 'database.php';$np1=$_SESSION['cname'];
                      $t=mysqli_query($c,"select cname from company where cid=$np1");
                 $t1=mysqli_fetch_array($t);
echo strtoupper($t1[0]);
?></div>
            </div>
            
            <div class="topnav" id="myTopnav">
  
  <a href="Logout.php">Logout</a>
  <a href="companydashboard.php">dashboard</a>
</div>
               <form action="" method="post">
                                     
                   <div style="width:100%;border:0px solid black;margin-top:20px ">
                        <p style="font-family: sans-serif;font-size: 32px;text-align: center">Applied Users</p>
                   <?php
        include_once 'database.php';
         $jid=$_REQUEST['id'];
         
         
         
         $np2=$_SESSION['cname'];
         $query=  mysqli_query($c, "select u.fname,u.lname,u.email,u.address,u.city,u.state,u.contactno,u.qualification,u.age,u.designation,u.skills,u.experience,j.skill,j.experience,u.userid from user u,applyjob a,company c,jobpost j where j.cid=c.cid and a.userid=u.userid and a.cid=c.cid and a.jobpostid=j.jobpostid and a.jobpostid=$jid");
        
        echo '<table><tr><th>FirstName</th><th>LastName</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>ContactNo</th><th>Qualification</th><th>Age</th><th>Designation</th><th>Matched Percentage</th><th>Action</th></tr>';
        while($j=mysqli_fetch_array($query))
        {
            $userskill=$j[10];
            $userexpi=$j[11];
            $jobskill=$j[12];
            $jobexpi=$j[13];
            
            $arr=array();
            $brr=array();
            $arr=explode(",",$jobskill);
            $brr=explode(",",$userskill);
//            echo $arr[1];
            $size=sizeof($arr);
            
            $size1=sizeof($brr);
            $c=0;
            
            for($i=0;$i<$size;$i++)
            {
                 for($kp=0;$kp<$size1;$kp++)
                 {
                     if($arr[$i]==$brr[$kp])
                     {
                         $c++;
                     }
                 }
            }
            
            $skillpercen=($c/$size)*100;
            
            
              echo "<tr><td>$j[0]</td><td>$j[1]</td><td>$j[2]</td><td>$j[3]</td><td>$j[4]</td><td>$j[5]</td><td>$j[6]</td><td>$j[7]</td><td>$j[8]</td><td>$j[9]</td><td>$skillpercen%</td><td><a style=\"color:red\" href=\"resume.php?v=$j[14]\">View Resume</a></td></tr>";  
           
            }
        echo '</table>';
        ?>
                       </div> 
               </form>       
         </div>
         
    
         </body>
         </html>