<?php
include("DBcon.php");
$query="SELECT * FROM user";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);
// print_r($data);
print_r(json_encode($data));

?>