<?php
include("DBcon.php");
$id=$_POST['data'];
$query="SELECT type FROM user WHERE stud_id='$id'";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);
echo"$data[type]";




?>