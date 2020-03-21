<?php 
ob_start();
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
  
  <a href="userlogout.php">Logout</a>
  <a href="Profile.php">Profile</a>
</div>
               <form action="" method="post">
                                      <p style="font-family: sans-serif;font-size: 32px;text-align: center;">My Dashboard</p>

                   <div style="float: left;width:250px;margin-left: 280px;border:0px solid black">
                   <input type="submit" value="Applied-Jobs" name="apply" class="btn btn-primary btn-large btn-block"/><br>
                   </div>
                                      <div style="float: left;width:250px;border:0px solid black">
                   <input type="submit" value="Generate-Resume" name="generate" class="btn btn-primary btn-large btn-block"/><br>
                   </div>
                                      
                                      <div style="float: left;width:250px;border:0px solid black">
                   <input type="submit" value="View-Resume" name="view" class="btn btn-primary btn-large btn-block"/><br>
                   </div>
                                      
                   
                   <div style="width:100%;border:0px solid black;margin-top:100px ">
                        <p style="font-family: sans-serif;font-size: 20px;text-align: center">All Job Posts</p>
                   <?php
        include_once 'database.php';
        $name=$_SESSION['name'];
       $qu=mysqli_query($c,"select qualification,userid from user where email='$name'");
       $qu1=mysqli_fetch_array($qu);
       
         $query=  mysqli_query($c,"select jobpostid,jobtitle,description,salary,experience,qualification,skill,createdate from jobpost ORDER by createdate DESC");
        
        echo '<table><tr><th>Job Title</th><th>Job Description</th><th>Salary</th><th>Experience</th><th>Qualification</th><th>Skills</th><th>Created Date</th><th>Action</th></tr>';
        while($j=mysqli_fetch_array($query))
        {
            $asc=mysqli_query($c,"SELECT COUNT(applyid) FROM applyjob WHERE jobpostid=$j[0] AND userid=$qu1[1]");
        $c6=mysqli_fetch_array($asc);
            if($c6[0]==1)
            {
              echo "<tr><td>$j[1]</td><td>$j[2]</td><td>$j[3]</td><td>$j[4]</td><td>$j[5]</td><td>$j[6]</td><td>$j[7]</td><td><p >Applied</p></td></tr>";  
            }else{
           echo "<tr><td>$j[1]</td><td>$j[2]</td><td>$j[3]</td><td>$j[4]</td><td>$j[5]</td><td>$j[6]</td><td>$j[7]</td><td><a style=\"color:red\" onClick=\"f1()\" href=\"jobapply.php?id=$j[0]&p=$name\">Apply</a></td></tr>";
            }
            }
        echo '</table>';
        ?>
                       </div> 
               </form>       
         </div>
         <script>
			function f1()
			{
				alert('Job Applied Successfully!!!')
			}    
		</script>
    <?php
    include_once 'database.php';
    if(isset($_POST['apply']))
        header('Location:appliedjob.php');
    if(isset($_POST['generate']))
        header('Location:generate.php');
    if(isset($_POST['view']))
    {
        $f=$_SESSION['name'];
        $np=mysqli_query($c,"select userid from user where email='$f'");
        $np1=mysqli_fetch_array($np);
        echo "<script>window.location.replace(\"userresume.php?v=$np1[0]\");</script>";
    }      
		ob_end_flush();
    ?>
         </body>
         </html>