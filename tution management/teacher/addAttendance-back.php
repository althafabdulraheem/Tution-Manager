<?php

include("DBcon.php");
if(isset($_POST['attendace']))
{
        
        $date=date("d-m-y");
        $P_query="SELECT * FROM `studInfo` WHERE ID NOT IN (SELECT ID FROM cache)AND class IN(SELECT class FROM cache)";
        $P_conff=mysqli_query($conff,$P_query);
        while( $P_data=mysqli_fetch_assoc($P_conff))
        {
            $P_id=$P_data['ID'];
            $P_name=$P_data['name'];
            $P_class=$P_data['class'];

            // echo"<br> $P_name"; 
            $P_insert="INSERT INTO attendance(class,stud_id,status,date)VALUES('$P_class','$P_id','present','$date')";     
            mysqli_query($conff,$P_insert);                                                                      
        }
        
        
        $fetch="SELECT * FROM cache";
        $query=mysqli_query($conff,$fetch);
              

        while($data=mysqli_fetch_assoc($query))
        {
            $C_date=$data['date'];                         //  C--------->data from cache
            $C_name=$data['name'];
            $C_id=$data['ID'];
            $C_date=$data['date'];
           //echo"$C_id";
            $insert1="INSERT INTO attendance(class,stud_id,date,status) VALUES('$P_class','$C_id','$C_date','absent')";
            mysqli_query($conff,$insert1);
            

        }
        //     $delete="TRUNCATE TABLE cache";
        //     mysqli_query($conff,$delete);
        //    header("location:addAttendance-frnd.php");

}
else{
// echo"$roll $class";
$roll=$_GET['rolno'];
$class=$_GET['class'];
$fetch="SELECT ID,name FROM studInfo WHERE roll_no='$roll'&& class='$class'";
$query=mysqli_query($conff,$fetch);
$data=mysqli_fetch_assoc($query);
//print_r($data);
$id=$data['ID'];
$name=$data['name'];
$dates=date("d-m-y");
// echo"$id $name $dates";
$insert2="INSERT INTO cache(id,name,date,class)VALUES('$id','$name','$dates','$class')";
mysqli_query($conff,$insert2);
header("location:addAttendance-frnd.php");
}
?>
