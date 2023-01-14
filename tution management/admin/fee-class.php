<?php
include("DBcon.php");
$id=$_POST['id'];
$query="SELECT class FROM studInfo WHERE ID='$id'";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);
echo"$data[class]";
?>