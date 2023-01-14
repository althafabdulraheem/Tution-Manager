<?php
session_start();
include("DBcon.php");
$class=$_POST['class'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$school=$_POST['school'];
$mob=$_POST['mob'];
$roll=$_POST['roll'];
$qualification=$_POST['qualification'];
$subject=$_POST['subject'];

$type=$_POST['type'];


if($type=="teacher")
{
  
  $query="INSERT INTO teacher(name,mother,father,mob,subject,qualification)VALUES('$name','$mother','$father','$mob','$subject','$qualification')";
  mysqli_query($conff,$query);
  $_SESSION['save']="yes";
  $idF="SELECT id FROM teacher WHERE mob='$mob' AND name='$name'";
  $idFCONFF=mysqli_query($conff,$idF);
  $idF=mysqli_fetch_assoc($idFCONFF);
  $Tid=$idF['id'];
  $quser="INSERT INTO user(stud_id,name,password,type)VALUES('$Tid','$name','$Tid','0')";
 mysqli_query($conff,$quser);
  header("location:add.php");
}
if($type=="student")
{
  $query="INSERT INTO studInfo(dob,gender,father,mother,class,name,mobile,roll_no)VALUES('$age','$gender','$father','$mother','$class','$name','$mob','$roll')";
  mysqli_query($conff,$query);
  $_SESSION['save']="yes";
  $idF="SELECT ID FROM studInfo WHERE mobile='$mob' AND name='$name'";
  $idFCONFF=mysqli_query($conff,$idF);
  $idF=mysqli_fetch_assoc($idFCONFF);
  $Tid=$idF['ID'];
  $quser="INSERT INTO user(stud_id,name,password,type)VALUES('$Tid','$name','$Tid','1')";
  echo"$quser";
  mysqli_query($conff,$quser);
  header("location:add.php");
}



?>