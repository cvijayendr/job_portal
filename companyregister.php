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
  
  <a href="home.php">Home</a>
</div></br>
            <div style="height: 870px" id="regbanner">
               <p style="font-family: sans-serif;font-size: 32px;">Company Registration</p>
        <form action="" method="post" name="form">
            <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Company Name*</label><br>
            <input type="text" name="cname" id="cname" onClick="c1(this.name)" onkeyup="my()" placeholder="Company Name" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Head Office City*</label><br>
            <input type="text" name="hname" id="hname" onClick="c1(this.name)" onkeyup="my()" placeholder="Head Office City" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Contact Number*</label><br>
            <input type="text" name="contactno" id="contactno" onClick="c1(this.name)" placeholder="Contactno" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Website*</label><br>
            <input type="text" name="website" id="website" onClick="c1(this.name)" placeholder="Website" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Company Type*</label><br>
            <input type="text" name="ctype" id="ctype" onClick="c1(this.name)" placeholder="Company Type" required/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Email-Id*</label><br>
            <input type="text" name="email" id="email" onClick="c1(this.name)" placeholder="EmailId" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Password*</label><br>
            <input type="password" name="pass" id="pass" onClick="c1(this.name)" placeholder="Password" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Confirm-Password*</label><br>
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
    $name=$_POST['cname'];
    $hname=$_POST['hname'];
    $con=$_POST['contactno'];
    $web=$_POST['website'];
    $ctype=$_POST['ctype'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
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
 $res=mysqli_query($c,"select count(cname) from company where email='$email'");

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
    $e=mysqli_query($c,"INSERT INTO company VALUES('','$name','$hname','$con','$web','$ctype','$email','$pass',0)");
    if($e){
    ?>
        <script>
            alert("registration successful");
            
            window.location.replace("companylogin.php");
        </script>
        <?php
    }    
 }


    
    }
    }
?>
    </body>
</html>