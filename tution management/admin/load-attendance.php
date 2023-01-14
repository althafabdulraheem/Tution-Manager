<?php
include("DBcon.php");
$use=$_POST['name'];
$query="SELECT COUNT(*) FROM attendance WHERE class='$use'";
$query_conff=mysqli_query($conff,$query);
$c=mysqli_fetch_assoc($query_conff);
$count=$c['COUNT(*)'];

if($count=="0")
{
    echo"";
}
else{
    $query2="SELECT * FROM attendance WHERE class='$use'";
$query_conff2=mysqli_query($conff,$query2);



            echo"
            <table class='highlight'>
            <tr>
            <td>Name</td>
            <td>Date</td>
            <td>Status</td> 
            </tr>";
            while($data=mysqli_fetch_assoc($query_conff2))
            {
            
                echo"
                <tr>
                <td>".$data['stud_id']."</td>
                <td>".$data['date']."</td>
                <td>".$data['status']."</td>
                </tr>";
            }

}
?>