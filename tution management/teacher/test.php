<?php
//for mark -back
include("DBcon.php");
$i=0;
$c=count($_POST['name']);
// echo"$c";
$class=$_POST['class'];
$type=$_POST['type'];
$mark=$_POST['mark'];
$name=$_POST['name'];
$outof=$_POST['outof'];
if($outof=="")
{
    $outof=$_POST['resoutof']!==""?$_POST['resoutof']:100;
}
$subject=$_POST['subject'];
$final=($outof*50)/100;
while($i<$c)
{
    $a=$name[$i];
    $b=$mark[$i];
    if($b>=$final)
    {
        $status="pass";
    }
    else{
        $status="fail";
    }
  
    $query="INSERT INTO mark(name,subject,type,status,mark,outof,class)VALUES('$a','$subject','$type','$status','$b','$outof','$class')";
    echo"$query";
    mysqli_query($conff,$query);
    $i++;
header("location:addMark-frnd.php");
}



?>