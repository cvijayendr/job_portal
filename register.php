<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/register.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
        <title>
           Register 
        </title>
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
</div></br>
            <div id="regbanner">
                <p style="font-family: sans-serif;font-size: 32px;">User Registration</p>
        <form action="" method="post" name="form">
            <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">First Name*</label><br>
           <input type="text" name="fname" id="fname" onClick="c1(this.name)" onkeyup="my()" placeholder="Firstname" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Last Name*</label><br>
           <input type="text" name="lname" id="lname" onClick="c1(this.name)" onkeyup="my()" placeholder="lastname" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Email-Id*</label><br>
           <input type="text" name="email" id="email" onClick="c1(this.name)" placeholder="EmailId" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Password*</label><br>
           <input type="password" name="pass" id="pass" onClick="c1(this.name)" placeholder="Password" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Confirm Password*</label><br>
           <input type="password" name="cpass" id="cpass" onClick="c1(this.name)" placeholder="Confirm-Password" required/><br><br>
        <input type="submit" value="Register" name="reg" class="btn btn-primary btn-large btn-block"/><br>
       
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
    if(isset($_POST['reg']))
    {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $rand=rand(111111,999999);
    $_SESSION['email']=$email;
  if($pass!=$cpass)
 {
   ?>
        <script>
            alert("Password and Confirm_Password mismatch!!!")
             document.getElementById("pass").style.borderColor="red";
             document.getElementById("cpass").style.borderColor="red";
        </script>
        <?php  
 }
 else
 {
 $res=mysqli_query($c,"select count(userid) from user where email='$email'");

 $count=mysqli_fetch_array($res);
 if($count[0]>=1)
 {
     ?>
        <script>
            alert("This EmailId already exist!!!")
             document.getElementById("email").style.borderColor="red";
        </script>
        <?php
 }
 
 
 else
 {
    $t=mysqli_query($c,"INSERT INTO user VALUES('','$fname','$lname','$email','$pass',NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)");
    if($t)
    {
    echo "<script>
                alert(\"Registered Successfully...\");
                window.location.replace(\"login.php\");
            </script>";
    
    }
//    $cemail=$email;
//    require 'PHPMailer/class.phpmailer.php';
//require 'PHPMailer/PHPMailerAutoload.php';
//
//$mail = new PHPMailer();
//$mail->isSMTP(true); // telling the class to use SMTP
//$mail->SMTPOptions = array(
//'ssl' => array(
//'verify_peer' => false,
//'verify_peer_name' => false,
//'allow_self_signed' => true
//)
//);
//$mail->SMTPSecure = 'tls';
//$mail->Host = 'tls://smtp.gmail.com';
//$mail->Port = 587;
//$mail->SMTPAuth = true;
//$mail->Username = 'parkroyalinn23@gmail.com';          // SMTP username
//$mail->Password = 'hanuman1234'; // SMTP password
//$mail->setFrom('parkroyalinn23@gmail.com', 'ParkRoyalINN');
//$mail->addAddress("$cemail");   // Add a recipient
////$mail->setFrom('your Email address');
////$mail->AddAddress("user/client email address");
//$mail->Subject = "Your Confirmation code";
//$mail->Body = "$rand";
//$mail->WordWrap = 70;
//             if($mail->send())
//             {
//                 $t=mysqli_query($c, "INSERT INTO user VALUES('','$fname','$lname','$email','$pass',NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,$rand,0)");
//            echo "<script>
//                 alert(\"Registered Successfully.....Check your Mail for confirmation code\");
//                 window.location.replace(\"confirmuser.php\");
//             </script>";
//             }
//             else
//             {
//                 
//                 echo "<script>
//                 alert(\"Mail not sent\");
//                 window.location.replace(\"confirmuser.php\");
//             </script>";
//             }

    
 }


    
    }
    }
?>
    </body>
</html>