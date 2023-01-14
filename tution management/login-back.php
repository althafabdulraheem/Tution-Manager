<?php
session_start();
include("DBcon.php");
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT stud_id,name,type FROM user WHERE name='$username'&& password='$password'";
echo"$query";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);

    
   
    
    if($username=="admin"&& $password=="123")
    {
        header("location:./admin/admin.php");
    }
    else if($data['type']=="0")
    {
        header("location:teacher/teacher.php");
    }
    elseif($data['type']=="1")
    {
        $_SESSION['name']=$username;
        $_SESSION['id']=$data['stud_id'];
        header("location:student/landing.php");
    }
    elseif($data['type'=="2"])
    {
        header("location:other.php");
    }
    else{
        $_SESSION['wrong']="yes";
        header("location:index.php");
    }


   



?>