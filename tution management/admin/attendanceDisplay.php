<?php
include("DBcon.php");
$type=$_POST['type'];
$class=$_POST['class'];
$query="SELECT * FROM attendance";
$query_conff=mysqli_query($conff,$query);
while($data=mysqli_fetch_assoc($query_conff))
{
    print_r($data);
}
?>