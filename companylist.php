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
        include_once 'database.php';
        $p=1;
        $g=mysqli_query($c, "select count(cid) from company");
        $g1=mysqli_fetch_array($g);
        echo "<p style=\"font-family:sans-serif;font-size: 25px;\">Total Companies=$g1[0]</p>";
        $r=  mysqli_query($c, "select cname,ctype,website,contactno,cid from company");
        echo "<table><tr><th>SNo</th><th>CompanyName</th><th>Company Type</th><th>Website</th><th>ContactNo</th><th>Action</th></tr>";
        while($s=  mysqli_fetch_array($r))
        {
            echo "<tr><td>$p</td><td>$s[0]</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td><td><a style=\"color:red\" onClick=\"f1()\" href=\"companydel.php?v=$s[4]\">Delete</a></td></tr>";
        $p++;
            
        }
        ?>
        <script>
    function f1()
{
    alert("Company Deleted successfully!!!");
}    
    </script>
    </body>
</html>