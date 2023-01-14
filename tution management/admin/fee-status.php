<?php
include("DBcon.php");
$status=$_POST['status'];
$name=$_POST['name'];
$query="SELECT $status FROM fee WHERE stud_id='$name'";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);

$result=$data[$status];
if($result=="paid")
{



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="alert alert-info" role="alert">
 Already Paid For This Month.......
</div>
</body>
</html>
<?php
}

?>