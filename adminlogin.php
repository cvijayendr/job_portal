<?php
session_start();
 if(isset($_SESSION['aname']))
 {
     echo "<script>  window.location.replace(\"admindashboard.php?page=dash\");</script>";    
 }

?>
<html>
    <head>
        
        <title>
           Admin Login 
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
  
  <a href="home.php">Home</a>
</div>
             
                 <br><br><br>
                 <div id="sidebar">
                     

                     
                     
        <form action="" method="post">
            <p style="font-family:sans-serif;font-size: 32px;">Admin Login</p>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">UserName</label><br>
            <input type="text" name="uname" id="uname" placeholder="UserName" required/><br><br>
       <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Password</label><br>
            <input type="password" name="pass" id="pass" placeholder="Password" required/><br><br>
       
        <input type="submit" value="Login" name="login" class="btn btn-primary btn-large btn-block"/><br>
       
        </form>
                     </div>
             
         </div>
        <?php
 include_once 'database.php';
    if(isset($_POST['login']))
    {
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
  $s="select count(username) from admin where username='$uname' and password='$pass'";

$r=mysqli_query($c,$s);
while($res=mysqli_fetch_array($r))
{
    if($res[0]==1)
    {
   
        $_SESSION['aname']=$uname;
        ?>
              <script>
              
                 window.location.replace("admindashboard.php?page=dash");
                </script>
         <?php
            
    }
 else if($uname && $pass)
     {
        
 ?>
              <script>
                alert("Username and password mismatch!!!");
                document.getElementById("uname").style.borderColor="red";
                    document.getElementById("pass").style.borderColor="red";
                           </script>
              
                <?php
     
 }
}
}
?>    </body>
</html>
