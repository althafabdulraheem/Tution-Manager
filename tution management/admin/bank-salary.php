<?php
include("DBcon.php");
$id=$_POST['data'];
$query="SELECT bank_name,account_no FROM teacher WHERE id='$id'";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);
echo"$data[bank_name],$data[account_no]";
?>