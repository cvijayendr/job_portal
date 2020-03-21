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
        $g=mysqli_query($c,"select count(jobpostid) from jobpost");
        $g1=mysqli_fetch_array($g);
        echo "<p style=\"font-family:sans-serif;font-size: 25px;\">Total Posts=$g1[0]</p>";
        $r=  mysqli_query($c,"select j.jobpostid,c.cname,j.jobtitle,j.description,j.salary,j.experience,j.qualification,j.skill,j.createdate from jobpost j,company c where c.cid=j.cid ");
        echo "<table><tr><th>SNo</th><th>CompanyName</th><th>Job-Title</th><th>Job-Description</th><th>Salary</th><th>Experience</th><th>Qualification</th><th>Skills</th><th>Created Date</th><th>Action</th></tr>";
        while($s=  mysqli_fetch_array($r))
        {
            echo "<tr><td>$p</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td><td>$s[4]</td><td>$s[5]</td><td>$s[6]</td><td>$s[7]</td><td>$s[8]</td><td><a style=\"color:red\" href=\"postdel.php?v=$s[0]\">Delete</a></td></tr>";
        $p++;            
        }
        ?>
        <script>
        function f1()
{
    alert("Posted-Job Deleted successfully!!!");
}    
        </script>>
    </body>
</html>