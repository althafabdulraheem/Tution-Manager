<?php
$query="SELECT * FROM notification WHERE status='unread'";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);
?>