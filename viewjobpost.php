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
                <a href="home.php"> <img src="images/logo.png" alt="" height="100px" width="250px"/></a>
                 
                 
                  <img style="float: right" src="images/usericon.png" alt="" height="70px" width="70px"/>
                  <div style="float:right" ><?php
                include_once 'database.php';$np1=$_SESSION['cname'];
                      $t=mysqli_query($c,"select cname from company where cid=$np1");
                 $t1=mysqli_fetch_array($t);
echo strtoupper($t1[0]);
?></div>
            </div>
            
            <div class="topnav" id="myTopnav">
  
  <a href="companylogout.php">Logout</a>
  <a href="companydashboard.php">Dashboard</a>
</div>
             <form action="" method="post"> 
        <br> <p style="text-align: center;font-family: sans-serif;font-size: 35px;">All Job Posts</p>
        <?php
        include_once 'database.php';
        $id=$_SESSION['cname'];
        $query=  mysqli_query($c,"select jobpostid,jobtitle,description,salary,experience,qualification,skill,createdate from jobpost j,company c where j.cid=c.cid and c.cid=$id");
        echo '<table><tr><th>Job Title</th><th>Job Description</th><th>Salary</th><th>Experience</th><th>Qualification</th><th>Skills</th><th>Created Date</th><th>Applied users</th><th>Action</th></tr>';
        while($j=mysqli_fetch_array($query))
        {
            echo "<tr><td>$j[1]</td><td>$j[2]</td><td>$j[3]</td><td>$j[4]</td><td>$j[5]</td><td>$j[6]</td><td>$j[7]</td>
            <td><a style=\"color:red\"  href=\"applieduser.php?id=$j[0]\">View</a></td><td><a style=\"color:red\"  href=\"updatejobpost.php?id=$j[0]\">Edit</a>&nbsp&nbsp&nbsp<a style=\"color:red\" href=\"deletejobpost.php?id=$j[0]\">Delete</a></td></tr>";
        }
        echo '</table>';
        ?>
         </form>
        </div>
       
    </body>
</html>