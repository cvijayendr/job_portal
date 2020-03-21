<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            body
            {
                background-color: white;
                
                
            }
            #ab
            {
                margin: auto;
                width: 300px;
                height: 200px;
                border: 10px solid whitesmoke;
                border-radius:15px;
                text-align: center;
                box-shadow: 10px 10px 5px #888888;
                background-color: #666;
            }
            input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 7px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  margin-top: 10px;
 padding: 10px;
  border: 2px solid transparent;
  background: #4CAF50;
  color: #ffffff;
  font-size: 16px;
  line-height: 2px;
  padding: 10px 0;
  text-decoration: none;
  border-radius: 3px;
 display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #33ff33;
}

  

h2
{
   color: brown; 
   font-family: fantasy;
   font-size: 40px;
}

        </style>
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
    </head>
    <body>
        <div id="a">
                <img src="images/logo.png" alt="" height="100px" width="250px"/>
                
            </div>
            
            <div class="topnav" id="myTopnav">
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
 
  <a href="home.php">Home</a>
</div>
            
        <br><br><br><br><br><label style="font-family: sans-serif;font-size: 32px;margin:auto;margin-left: 420px">Enter Your Confirmation Code</label><br><br>
        <form action="res.php" method="post">
            <div id="ab">
                <br><br><input type="number" placeholder="Confirmation Code" name="p"/><br><br><br>
              <div class="btn">
               <input type="submit" value="Submit" name="sub" class="btn btn-primary btn-large btn-block"/>
              </div>
            </div>
        </form>
        <?php
        
       if(isset($_POST['sub']))
       {
           $e=$_SESSION['email'];
           $c=$_POST['p'];
           $k=mysqli_query($c,"select confirmcode from user where email='$e' ");
           $k1=mysqli_fetch_array($k);
           if($k1[0]==$c)
           {
               $m=mysqli_query($c,"update user set status=1 where email='$e'");
               echo "<script>alert('confirmed successfully!!!');</script>";
               header('Location:login.php');
           }
           else
           {
             echo "<script>alert('You Entered wrong confirmation code!!!!');</script>";  
           }
       }
        ?>
    </body>
</html>
