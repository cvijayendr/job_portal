
<div>
    
    
    
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "list rooms";

$rtype=$_REQUEST['v'];
include_once 'database.php';
echo "<br><br><br><br><br><br><br><br><br>";
for($i=1;$i<=$rtype;$i++)
{
    
    
    echo "<div style=\"width:100%;height:370px;border:1px solid #585858;margin:auto\">";
    echo "<table border=0 style\"width:100%\">";
    echo "<tr><td><br><label style=\"float:left;font-family: sans-serif;font-size: 20px;\">Company Name $i&nbsp;&nbsp;&nbsp;</label></td><td><input type=\"text\" name=\"a[]\" required/><br><br></td></tr>";
    echo "<tr><td><label style=\"float:left;font-family: sans-serif;font-size: 20px;\">Location $i&nbsp;&nbsp;&nbsp;</label></td><td><input type=\"text\" name=\"b[]\" required/><br><br></td></tr>";
    echo "<tr><td><label style=\"float:left;font-family: sans-serif;font-size: 20px;\">Time Period $i&nbsp;&nbsp;&nbsp;</label></td><td><input type=\"text\" name=\"c[]\" required/><label style=\"font-family: sans-serif;font-size: 15px;\">(ex:2010-2014)</label><br><br></td></tr>";
    echo "<tr><td><label style=\"float:left;font-family: sans-serif;font-size: 20px;\">Position $i&nbsp;&nbsp;&nbsp;</label></td><td><input type=\"text\" name=\"d[]\" required/><br><br></td></tr>";
    echo "<tr><td><label style=\"float:left;font-family: sans-serif;font-size: 20px;\">Experience $i&nbsp;&nbsp;&nbsp;</label></td><td><input type=\"text\" name=\"e[]\" required/><label style=\"float:left;font-family: sans-serif;font-size: 15px;\">(ex:7months or 2years)</label><br><br></td></tr>";
    echo "</table></div><br>";
    
}
   echo "<br> <input type=\"submit\" value=\"Generate\" name=\"gen\" class=\"btn btn-primary btn-large btn-block\"/>";  
       
?>
</div>
</html>