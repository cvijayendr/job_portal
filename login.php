<?php
session_start();
 if(isset($_SESSION['name']))
 {
 
     echo "<script>  window.location.replace(\"dashboard.php\");</script>";
     
 }

?>
<html>
    <head>
        
        <title>
           Login 
        </title>
        <link rel="stylesheet" type="text/css" href="styles/login.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
         <div id="main">
               
             <div id="a">
                <a href="home.php"> <img src="images/logo.png" alt="" height="100px" width="250px"/></a>
            </div>
            
            <div class="topnav" id="myTopnav">
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  <a href="companylogin.php">Company</a>
  <a href="home.php">Home</a>
</div>
             <div id="logbanner">
                 <div id="sidebar1">
                  <img src="images/cropbanner.jpg" alt="" height="400px" width="100%"/>   
                 </div>
                 <div id="sidebar2">
                     </br> </br>

                      <p style="font-family: sans-serif;font-size: 32px;">User Login</p>
                     
        <form action="" method="post">
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 30px;">Email-Id</label><br>
        <input type="text" name="email" id="email" placeholder="EmailId" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 30px;">Password</label><br>
        <input type="password" name="pass" id="pass" placeholder="Password" required/><br><br>
       
        <input type="submit" value="Login" name="login" class="btn btn-primary btn-large btn-block"/>
        </form>
                     </div>
             </div>
         </div>
        <?php
 include_once 'database.php';
    if(isset($_POST['login']))
    {
    $email=$_POST['email'];
    $pass=$_POST['pass'];
  $s="select count(userid) from user where email='$email' and password='$pass'";

$r=mysqli_query($c,$s);
while($res=mysqli_fetch_array($r,MYSQLI_ASSOC))
{
   // if($res[0]==1)
   // {
        
        $_SESSION['name']=$email;
        ?>
              <script>
              
                 window.location.replace("dashboard.php");
                </script>
         <?php
            
   // }
  if($email && $pass)
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