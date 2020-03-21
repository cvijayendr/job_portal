<?php
session_start();
 if(isset($_SESSION['cname']))
 {
     echo "<script>  window.location.replace(\"companydashboard.php\");</script>";    
 }

?>
<html>
    <head>
        
        <title>
           Company Login 
        </title>
        <link rel="stylesheet" type="text/css" href="styles/companylogin.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
         <div id="main">
               
             <div id="a">
                 <a href="home.php"><img src="images/logo.png" alt="" height="100px" width="250px"/></a>
            </div>
            
            <div class="topnav" id="myTopnav">
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  <a href="companylogin.php">Company</a>
  <a href="home.php">Home</a>
</div>
             
                 <br><br><br>
                 <div id="sidebar">
                     

                     
                     
        <form action="" method="post">
            <p style="font-family:sans-serif;font-size: 32px;">Company Login</p>
        <input type="text" name="email" id="email" placeholder="EmailId" required/><br><br>
        <input type="password" name="pass" id="pass" placeholder="Password" required/><br><br>
       
        <input type="submit" value="Login" name="login" class="btn btn-primary btn-large btn-block"/><br>
        <a style="font-size: 20px" href="companyregister.php">New Company?Register Here...</a>
        </form>
                     </div>
             
         </div>
        <?php
 include_once 'database.php';
    if(isset($_POST['login']))
    {
    $email=$_POST['email'];
    $pass=$_POST['pass'];
  $s="select count(cid),status from company where email='$email' and password='$pass'";

$r=mysqli_query($c,$s);
while($res=mysqli_fetch_array($r))
{
    if($res[0]==1)
    {
        if($res[1]==1)
        {
        $s1="select cid from company where email='$email' and password='$pass'";
        $r1=mysqli_query($c,$s1);
        $ad=mysqli_fetch_array($r1);
        $_SESSION['cname']=$ad[0];
        ?>
              <script>
              
                 window.location.replace("companydashboard.php");
                </script>
         <?php
        }
        else
        {
            echo "<script>alert('Your Account is Not Yet Approved!!!');</script>";
        }
            
    }
 else if($email && $pass)
     {
        
 ?>
              <script>
                alert("EmailId or password mismatch!!!");
                document.getElementById("email").style.borderColor="red";
                    document.getElementById("pass").style.borderColor="red";
                           </script>
              
                <?php
     
 }
}
    }
?>
    </body>
</html>
