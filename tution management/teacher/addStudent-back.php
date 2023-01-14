<?php
//include("DBcon.php");
$conff=mysqli_connect("localhost","root","","tutionManagement");

$class=$_POST['class'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$school=$_POST['school'];
$mob=$_POST['mobile'];
$roll=$_POST['roll'];
//echo"$age $mob";
$insert1="INSERT INTO studInfo(dob,gender,father,mother,class,name,mobile,roll_no)VALUES('$age','$gender','$father','$mother','$class','$name','$mob','$roll')";
mysqli_query($conff,$insert1);
$fetch="SELECT id FROM studInfo WHERE name='$name'";
$query=mysqli_query($conff,$fetch);
$data=mysqli_fetch_assoc($query);
$stud_id=$data['id'];
// $type="student";
$insert2="INSERT INTO user(stud_id,name,password,type)VALUES('$stud_id','$name','$stud_id','student')";
mysqli_query($conff,$insert2);
?>