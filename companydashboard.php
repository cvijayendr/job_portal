<?php 

session_start();
if(!(isset($_SESSION['cname'])))
{
    echo "<script>window.location.replace('companylogin.php');</script>";
}

?>
<html>
    <head>
        <style>
            

.btn {
    text-align: center;
    margin-left: 100px;
  margin-top: 10px;
  padding: 10px;
  border: 2px solid transparent;
  background: #4CAF50;
  color: #ffffff;
  font-size: 16px;
  line-height: 2px;
  padding: 24px 0;
  text-decoration: none;
  border-radius: 7px;
  display: block;
  width: 300px;
  margin: 0 auto;
  box-shadow:none;
}

.btn:hover {
  background-color: #33ff33;
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
                 
                 
                  <img style="float: right" src="images/usericon.png" alt="" height="70px" width="70px"/>
                  <div style="float:right" ><?php include_once 'database.php';$np1=$_SESSION['cname'];
                      $t=mysqli_query($c,"select cname from company where cid=$np1");
                 $t1=mysqli_fetch_array($t);
echo strtoupper($t1[0]);
?></div>
            </div>
            
            <div class="topnav" id="myTopnav">
  
  <a href="companylogout.php">Logout</a>
  <a href="companyprofile.php">Profile</a>
  
</div>
               <form action="" method="post">
                   <div style="float:left;margin-top: 20px;margin-left: 400px">
                       <input  type="submit" value="Create-Job-Post" name="post" class="btn btn-primary btn-large btn-block" />
                   </div>
                   <div style="float:left;margin-top: 20px;margin-left: 50px">
                       <input type="submit" value="View-Job-Post" name="view" class="btn btn-primary btn-large btn-block"/>
                   </div>
                   
                   <div style="width: 100%;height: 400px;margin-top: 50px;">
                       <img src="images/post_jobs.jpg" alt="" height="350px" width="100%"/>
                   </div>
                   
               </form>       
         </div>
        <?php
        if(isset($_POST['post']))
            header('Location:jobpost.php');
         if(isset($_POST['view']))
            header('Location:viewjobpost.php');
          
        ?>
         </body>
         </html>