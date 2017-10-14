<?php
$gnoErr =$passwordErr  = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname="project_handler";  
$tbl_name=""; 
$conn = mysqli_connect($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"select count(*) FROM student");
$row=mysqli_fetch_array($result,MYSQLI_NUM);
echo "Total rows: " . $row[0];
$Total_students=$row[0];
$Total_members=4;
$Total_groups=ceil($Total_students/$Total_members);
echo "$Total_groups";
$res=mysqli_query($conn,"select cgpa from student");
$arr=mysqli_fetch_all($res,MYSQLI_ASSOC);
mysqli_free_result($res);
rsort($arr);
print_r($arr);
?>
