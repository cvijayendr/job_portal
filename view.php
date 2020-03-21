
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
                 
            
            <div class="topnav" id="myTopnav">
  
  <a href="home.php">Home</a>
 
</div>
             <form action="" method="post"> 
        <br> <p style="text-align: center;font-family: sans-serif;font-size: 35px;">Job Post</p>
        <?php
        include_once 'database.php';
        $id=$_REQUEST['v'];
        $query=  mysqli_query($c,"select jobtitle,description,salary,experience,qualification,skill from jobpost where jobpostid=$id");
        echo '<table><tr><th>Job Title</th><th>Job Description</th><th>Salary</th><th>Experience</th><th>Qualification</th><th>Skills</th><th>Action</th></tr>';
        while($j=mysqli_fetch_array($query))
        {
            echo "<tr><td>$j[0]</td><td>$j[1]</td><td>$j[2]</td><td>$j[3]</td><td>$j[4]</td><td>$j[5]</td>
            <td><a style=\"color:red\"  href=\"login.php\">Apply</a></td></tr>";
        }
        echo '</table>';
        ?>
         </form>
        </div>
       
    </body>
</html>