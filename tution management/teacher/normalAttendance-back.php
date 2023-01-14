<?php
$count=count($_POST['id']);
$name=$_POST['name'];
$roll=$_POST['roll'];
$id=$_POST['id'];
$check=$_POST['check'];
$date=date('d-m-y');
$class=$_POST['class'];
include("DBcon.php");

$i=0;
while($i<$count)
{
      if($check[$i]=="")
      {
          $x="absent";
      }
      else{
          $x="present";
     }
        // echo"$class---$id[$i]----$x------$date<br> ";
        $query="INSERT INTO attendance(class,stud_id,status,date)VALUES('$class','$id[$i]','$x','$date')";
        mysqli_query($conff,$query);
        $i++;

}
header("location:normalAttendance-frnd.php");
?>