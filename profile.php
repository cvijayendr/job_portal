<?php 

session_start();
if(!(isset($_SESSION['name'])))
{
    echo "<script>window.location.replace('login.php');</script>";
}

?>
<html>
    <head>
        
        <title>
           Profile 
        </title>
        <link rel="stylesheet" type="text/css" href="styles/profile.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
         <div id="main">
               
             <div id="a">
               <a href="home.php">  <img src="images/logo.png" alt="" height="100px" width="250px"/></a>
                 
                 
                  <img style="float: right" src="images/usericon.png" alt="" height="70px" width="70px"/>
                <div style="float:right" ><?php
                 $np1=$_SESSION['name'];$arr=array();$arr1=array();$arr=explode("@", $np1);$arr1=explode(".", $arr[0]);
echo '<br><br>WELCOME<br>';echo strtoupper($arr1[0]);
?></div>
 
            
            <div class="topnav" id="myTopnav">
  
  <a href="logout.php">Logout</a>
  
   <a href="dashboard.php">Dashboard</a>
</div>
              <div id="regbanner">
               <p style="font-family: sans-serif;font-size: 32px;">My Profile</p>
        <form action="" method="post" name="form">
            <?php
                 
                 include_once 'database.php';
                 $n=$_SESSION['name'];
                 $r=  mysqli_query($c, "select fname,lname,address,city,state,contactno,qualification,passingyear,dob,age,designation,skills,experience from user where email='$n'");
                 $sd=  mysqli_fetch_array($r);
                 
            echo "<script>var a=<?php echo $sd[2];?>;
                alert(a);
                document.getElementById(\"address\").value = a; </script>";
                 
                 
                 ?>
             <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">First Name</label><br>
           <input type="text" name="fname" id="fname" onClick="c1(this.name)" value="<?php echo $sd[0];?>"onkeyup="my()" placeholder="Firstname" required/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Last Name*</label><br>
           <input type="text" name="lname" id="lname" onClick="c1(this.name)" value="<?php echo $sd[1];?>" onkeyup="my()" placeholder="Lastname" required/><br><br>
          <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Email-Id*</label><br>
           <input type="text" name="email" id="email" onClick="c1(this.name)" value="<?php echo $n;?>" onkeyup="my()"  readonly/><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Address</label><br>
           <textarea name="address" id="address" onClick="c1(this.name)" value="<?php echo $sd[2];?>" placeholder="Address"  rows="5"><?php echo $sd[2];?></textarea><br><br>
        <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">City</label><br><br>
           <input type="text" name="city" id="city" onClick="c1(this.name)" placeholder="City" value="<?php echo $sd[3];?>" /><br><br>
          <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">State</label><br><br>
           <input type="text" name="state" id="state" onClick="c1(this.name)" placeholder="State" value="<?php echo $sd[4];?>"/><br><br>
           <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Contact Number</label><br>
           <input type="text" name="contactno" id="contactno" onClick="c1(this.name)" placeholder="Contact number" value="<?php echo $sd[5];?>"/><br><br>
          <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Qualification</label><br>
           <input type="text" name="qual" id="qual" onClick="c1(this.name)" placeholder="Qualification" value="<?php echo $sd[6];?>" /><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Passing Year</label><br> 
         <input type="date" name="pyear" id="pyear" onClick="c1(this.name)" placeholder="Passing Year" value="<?php echo $sd[7];?>" /><br><br>
          <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Date Of Birth</label><br> 
         <input type="date" name="dob" id="dob" onClick="c1(this.name)" placeholder="Date Of Birth" value="<?php echo $sd[8];?>"/><br><br>
          <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Age</label><br><br>
         <input type="text" name="age" id="age" onClick="c1(this.name)" placeholder="Age" value="<?php echo $sd[9];?>"/><br><br>
          <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Designation</label><br>   
         <input type="text" name="desig" id="desig" onClick="c1(this.name)" placeholder="Designation" value="<?php echo $sd[10];?>"/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Skills</label><br>   
         <input type="text" name="skill" id="skill" onClick="c1(this.name)" placeholder="skill" value="<?php echo $sd[11];?>"/><br><br>
         <label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Experience</label><br>   
         <select name="expi" id="expi">
             <option value="<?php echo $sd[12];?>"><?php echo $sd[12];?></option>
  <option value="0-1 years">0-1 years</option>
  <option value="1 year">1 year</option>
  <option value="2 years">2 years</option>
  <option value="0-2 years">0-2 years</option>
  <option value="1-2 years">1-2 years</option>
  <option value="2-3 years">2-3 years</option>
  <option value="3 years">3 years</option>
  <option value="2-5 years">2-5 years</option>
  <option value="4 years">4 years</option>
  <option value="5 years">5 years</option>
  <option value="5-7 years">5-7 years</option>
  <option value="6 years">6 years</option>
  <option value="7 years">7 years</option>
  <option value="7-8 year">7-8 years</option>
   <option value="8 years">8 years</option>
  <option value="8-10 years">8-10 years</option>
   <option value="9 years">9 years</option>
    <option value="10 years">10 years</option>
</select><br><br>
         <input type="submit" value="Update" name="update" class="btn btn-primary btn-large btn-block"/><br>
        
        </form>
                 </div>      
         </div>
             <script>
                
         </script>
         <?php
         if(isset($_POST['update']))
         {
             include_once 'database.php';
             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $address=$_POST['address'];
             $city=$_POST['city'];
             $state=$_POST['state'];
             $contact=$_POST['contactno'];
             $qual=$_POST['qual'];
             $pyear=$_POST['pyear'];
             $dob=$_POST['dob'];
             $age=$_POST['age'];
             $desig=$_POST['desig'];
             $email=$_POST['email'];
             $skill=$_POST['skill'];
             $expi=$_POST['expi'];
             $query=mysqli_query($c, "update user set fname='$fname',lname='$lname',address='$address',city='$city',state='$state',contactno='$contact',qualification='$qual',passingyear='$pyear',dob='$dob',age=$age,designation='$desig',skills='$skill',experience='$expi' where email='$email'");
        if($query)
        {
          echo "<script>alert('Profile updated successfully');window.location.replace(\"dashboard.php\");</script>";
        }
             }
         ?>
         
         </body>
         </html>