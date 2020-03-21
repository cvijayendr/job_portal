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
           Dashboard
        </title>
        <link rel="stylesheet" type="text/css" href="styles/generate.css" />
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
  
  <a href="Logout.php">Logout</a>
  <a href="Dashboard.php">dashboard</a>
</div>
          <form action="" method="post">     
             <br><br>
             
        <div id="ban">
            <div id="head">
                <p style="font-family: sans-serif;font-size: 20px;margin-top: 15px;">Generate Resume</p>
            </div>
            
            <div id="ban1">
                
                <p style="font-family: sans-serif;font-size: 30px;margin-top: 25px;">&nbsp;&nbsp;Personal Details Section</p>
                <table>
                    
                <tr><td><label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Name</label></td>
            <td><input type="text" name="name" id="cname"  required/></td></tr>
         <tr><td><label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Address</label></td>
           <td> <input type="text" name="address" id="hname"   required/></td></tr>
         <tr><td><label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Contact Number</label></td>
            <td><input type="text" name="contactno" id="contactno"  required/></td></tr>
        <tr><td><label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Email</label></td>
            <td><input type="text" name="email" id="email"   required/></td></tr>
            </table>
                
                <p style="font-family: sans-serif;font-size: 30px;margin-top: 25px;">&nbsp;&nbsp;Experience Section</p>
                <table>
                    <tr>
                        <td><label style="float:left;font-family: sans-serif;font-size: 20px;margin-left: 50px;">Number Of Company You Want To Add For Experience</label></td>
                    <td><select id="experience" name="exp" onchange="r1(this.value)" required="">
                            <option value="0">select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                    </select></td>
                    </tr>
                </table>
            </div>
                <div id="experiencesection" style="height:600px;width:auto;"></div>
               </div>
           
        
          
           </form>
     </div>
        
        <script>
        function r1(str)
        {
            
        
        var x;
            
                x=new XMLHttpRequest();
           x.open("GET","demo.php?v="+str,true);
           x.send();   
               x.onreadystatechange=function(){
                   
                   if(x.status==200 && x.readyState==4)
                       {
                           document.getElementById("experiencesection").innerHTML=x.responseText;
                       }
               };
                
                }
                
                
            

           
             </script>
             <?php
             include_once 'database.php';
             
             if(isset($_POST['gen']))
             {
                 $id=$_SESSION['name'];
                 $m=mysqli_query($c,"select userid from user where email='$id'");
                 $m1=mysqli_fetch_array($m);
                 $userid=$m1[0];
                 $name=$_POST['name'];
                 $address=$_POST['address'];
                 $contactno=$_POST['contactno'];
                 $email=$_POST['email'];
                $P=array(); 
                $p1=array();
                $p2=array();
                $p3=array();
                $p4=array();
                
                 $p=$_POST['a'];$p1=$_POST['b'];$p2=$_POST['c'];$p3=$_POST['d'];$p4=$_POST['e'];
                 for($i=0;$i<sizeof($p);$i++)
                 {
                     //echo "<script>alert('$id,$name,$address,$contactno,$email,$p[$i],$p1[$i],$p2[$i],$p3[$i],$p4[$i]');</script>";
                     $r=mysqli_query($c,"insert into resume values('',$userid,'$name','$address','$contactno','$email','$p[$i]','$p1[$i]','$p2[$i]','$p3[$i]','$p4[$i]')");
                     if($r)
                     {
                         echo "<script>alert('Resume generated successfully');</script>";
                         header('Location:dashboard.php');
                     }
                        
                 }
             }
             ?>
         </body>
         </html>