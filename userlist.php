<html>
    <head>
        <style>
          table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 2px solid #585858;
}
        </style>
    </head>
    
    <body>
        <?php
        $p=1;
        include_once 'database.php';
        $g=mysqli_query($c,"select count(userid) from user");
        $g1=mysqli_fetch_array($g);
        echo "<p style=\"font-family:sans-serif;font-size: 25px;\">Total Users=$g1[0]</p>";
        $r=  mysqli_query($c,"select fname,lname,email,address,userid from user");
        echo "<table><tr><th>SNo</th><th>FirstName</th><th>LastName</th><th>Email</th><th>address</th><th>Action</th></tr>";
        while($s=  mysqli_fetch_array($r))
        {
            echo "<tr><td>$p</td><td>$s[0]</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td><td><a style=\"color:red\" href=\"userdel.php?v=$s[4]\">Delete</a></td></tr>";
        $p++;
            
        }
        ?>
        <script>
        function f1()
{
    alert("User Deleted successfully!!!");
}    
        </script>>
    </body>
</html>