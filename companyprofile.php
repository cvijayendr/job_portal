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
        <link rel="stylesheet" type="text/css" href="styles/register.css" />
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
  <a href="companydashboard.php">Dashboard</a>
  
</div>
</br>
<?php
include_once 'database.php';
$id=$_SESSION['cname'];
$rp=  mysqli_query($c,"select * from company where cid=$id ");
$rp1=  mysqli_fetch_array($rp);
?>
            <div style="height: 680px" id="regbanner">
               <p style="font-family: sans-serif;font-size: 32px;">Company Registration</p>
        <form action="" method="post" name="form">
            <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Company Name*</label><br>
            <input type="text" name="cname" id="cname" onClick="c1(this.name)" value="<?php echo $rp1[1];?>" onkeyup="my()" placeholder="Company Name" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Head Office City*</label><br>
            <input type="text" name="hname" id="hname" onClick="c1(this.name)" value="<?php echo $rp1[2];?>" onkeyup="my()" placeholder="Head Office City" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Contact Number*</label><br>
            <input type="text" name="contactno" id="contactno" onClick="c1(this.name)" value="<?php echo $rp1[3];?>" placeholder="Contactno" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Website*</label><br>
            <input type="text" name="website" id="website" onClick="c1(this.name)" value="<?php echo $rp1[4];?>" placeholder="Website" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Company Type*</label><br>
            <input type="text" name="ctype" id="ctype" onClick="c1(this.name)" value="<?php echo $rp1[5];?>" placeholder="Company Type" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Email-Id*</label><br>
            <input type="text" name="email" id="email" onClick="c1(this.name)" value="<?php echo $rp1[6];?>" placeholder="EmailId" required/><br><br>
         
        <input type="submit" value="Update" name="up" class="btn btn-primary btn-large btn-block"/><br>
       
        </form>
                 </div>
        </div>
        
        <script>
            
            function my()
            {
               var b=  document.forms["form"]["fname"].value;
               var b1=  document.forms["form"]["lname"].value;
               if(!(/^[a-zA-Z ]*$/.test(b)))
                   {
                      document.getElementById("fname").style.borderColor="red";
                      alert("firstname contains numbers");
                   }
                   if(!(/^[a-zA-Z ]*$/.test(b1)))
                   {
                      document.getElementById("lname").style.borderColor="red";
                      alert("lastname contains numbers");
                   }
            }
            function f2()
            {
                     document.getElementById("fname").value="";
                     document.getElementById("lname").value="";
                     document.getElementById("email").value="";
                     document.getElementById("pass").value="";
                     document.getElementById("cpass").value="";
            }
            function f1()
            {
                var e = document.forms["form"]["email"].value;
             var atpos=e.indexOf("@");
             var dotpos=e.lastIndexOf(".");
             if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length){
                  alert("Invalid Email address");
                  document.getElementById("email").style.borderColor="red";
                  return false;
              }   
               
                
                 
            }
            
        </script>
        
        
        <?php
 include_once 'database.php';
    if(isset($_POST['up']))
    {
    $name=$_POST['cname'];
    $hname=$_POST['hname'];
    $con=$_POST['contactno'];
    $web=$_POST['website'];
    $ctype=$_POST['ctype'];
    $email=$_POST['email'];
    $id1=$_SESSION['cname'];
  
 
    $e=mysqli_query($c,"update company set cname='$name',hname='$hname',contactno='$con',website='$web',ctype='$ctype',email='$email' where cid=$id1");
    if($e){
    ?>
        <script>
            alert("update successful");
            
            window.location.replace("companydashboard.php");
        </script>
        <?php
    }
    
    }
?>
    </body>
</html>