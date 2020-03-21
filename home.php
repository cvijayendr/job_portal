<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Job-Portal</title>
         <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
        
        <div id="main">
            <div id="a">
                <img src="images/logo.png" alt="" height="100px" width="250px"/>
                <div style="float:right;height:90px;width:100px;margin-right: 20px;">
                    <a href="adminlogin.php"><img src="images/admin.jpg" alt="" height="100px" width="120px"/></a>
                
                </div>
            </div>
            
            <div class="topnav" id="myTopnav">
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  <a href="companylogin.php">Company</a>
  <a href="home.php">Home</a>
</div>
            <div id="banner">
                <figure> 
                 <img src="images/banner.png" alt="" height="400px" width="100%"/>  
                  <img src="images/dream.jpg" alt="" height="400px" width="100%"/>
                   <img src="images/inner-banner-jobseeker.jpg" alt="" height="400px" width="100%"/>
                    <img src="images/career_img1.jpg" alt="" height="400px" width="100%"/>
                     <img src="images/job-openings-banner.jpg" alt="" height="400px" width="100%"/>
                </figure> 
                
            </div>
            
            <div id="footer">
            <p style="font-family: sans-serif;font-size: 25px;text-align: center">Latest Job Posts</p>
            <?php
            include_once 'database.php';
            $query=  mysqli_query($c,"select jobtitle,description,jobpostid from jobpost ORDER by createdate DESC");
            while($sp= mysqli_fetch_array($query))
            {
            
            echo "<div id=\"am\">
                 <p style=\"font-family: sans-serif;font-size: 30px;\">$sp[0]</p> 
                 <p style=\"font-family: sans-serif;font-size: 20px;\">$sp[1]</p>
                <a href=\"view.php?v=$sp[2]\">View</a></div>";
           
            
                
           
            }
            ?>
            </div>
            
        </div>
    </body>
</html>
