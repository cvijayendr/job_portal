<?php 

session_start();
if(!(isset($_SESSION['aname'])))
{
    echo "<script>window.location.replace('adminlogin.php');</script>";
}

?>
<html>
    <head>
        <style>
            

.btn {
    text-align: center;
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
  width: 250px;
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
        <meta charset='utf-8'>
  
   <link rel="stylesheet" href="styles/styles.css">
        
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
         <div id="main">
               
             <div id="a">
                 <a href="home.php"><img src="images/logo.png" alt="" height="100px" width="250px"/></a>
                 
                 
                  <img style="float: right" src="images/usericon.png" alt="" height="70px" width="70px"/>
                  <div style="float:right" ><?php include_once 'database.php';$np1=$_SESSION['aname'];
                      
echo strtoupper($np1);
?></div>
            </div>
            
            <div class="topnav" id="myTopnav">
  
  <a href="logout.php">Logout</a>
  
  
</div>
               <form action="" method="post">
                   <div style="float:left;margin-top: 50px;">
                 <nav class="navigation">
  <ul class="mainmenu">
    <li><a href="admindashboard.php?page=dash">Dashboard</a></li>
    <li><a href="admindashboard.php?page=user">Users</a></li>
    <li><a href="admindashboard.php?page=company">Company</a></li>
    <li><a href="admindashboard.php?page=post">Job Posts</a></li>
  </ul>
</nav>
                   </div>
                <?php
               $p=1;
                if(isset($_GET['page']))
                {
                    if($_GET['page']=="dash")
                    {
                        
                 echo "<div id=\"content\"> <p style=\"font-family:sans-serif;font-size: 32px;\">Welcome to Dashboard</p>";
                     $r=  mysqli_query($c,"select cname,ctype,website,contactno,status,cid from company");
        echo "<table><tr><th>SNo</th><th>CompanyName</th><th>Company Type</th><th>Website</th><th>ContactNo</th><th>Action</th></tr>";
        while($s=  mysqli_fetch_array($r))
        {
            if($s[4]==0)
            echo "<tr><td>$p</td><td>$s[0]</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td><td><a style=\"color:red\" onClick=\"f1()\" href=\"companyapprove.php?v=$s[5]\">Approve</a></td></tr>";
        else
            echo "<tr><td>$p</td><td>$s[0]</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td><td><a style=\"color:red\" onClick=\"f1()\" href=\"companyreject.php?v=$s[5]\">Reject</a></td></tr>";
            
            $p++;
            
        }
                   echo "</div>";
                   
                    }
                    else if($_GET['page']=="user")
                    {
                        echo "<div id=\"content\">";
                        include 'userlist.php';
                        echo "</div>";
                    }
                    else if($_GET['page']=="company")
                    {
                         echo "<div id=\"content\">";
                        include 'companylist.php';
                        echo "</div>";
                    }
                    else if($_GET['page']=="post")
                    {
                         echo "<div id=\"content\">";
                        include 'postlist.php';
                        echo "</div>";
                    }
                }
                    ?>
               </form>       
         </div>
       
         </body>
         </html>