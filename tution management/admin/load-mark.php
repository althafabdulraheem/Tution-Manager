<?php
include("DBcon.php");
$use=$_POST['class'];
$query="SELECT COUNT(*) FROM mark WHERE class='$use'";
$query_conff=mysqli_query($conff,$query);
$c=mysqli_fetch_assoc($query_conff);
$count=$c['COUNT(*)'];

if($count=="0")
{
    echo"<h1 align='center' style='    color: #c7bfbf;
    margin-top: 37px;'>No Records Found.....</h1>";
}
else{
    $query2="SELECT DISTINCT name FROM mark WHERE class='$use'";
$query_conff2=mysqli_query($conff,$query2);



            echo"
            <table class='table table-striped'>
            <tr id='thead'>
            <td style='color:white;'>Name</td>
            <td style='color:white;'>Subject</td>
           
            </tr>";
            while($data=mysqli_fetch_assoc($query_conff2))
            {
                echo"
                <tr>
                <td id='name'>".$data['name']."</td>";
                $x=$data['name'];
           
                $q="SELECT subject,mark,status,outof FROM mark WHERE name='$x'";
                $q_c=mysqli_query($conff,$q);
                echo"<td>";
                while($datax=mysqli_fetch_assoc($q_c))

                    {    
                        
                        $status=$datax['status'];
                        if($status=="pass"){
                        echo"
                        
                        <ul>
                            <li style='color:#116461;font-weight:bold;'>".$datax['subject']."=".$datax['mark']."/".$datax['outof']."</li>
                            
                           
                            </ul>
                            
                           ";}

                         else{
                                echo"
                                    <ul>
                                    <li style='color: #717671;font-weight:bold;'>".$datax['subject']."=".$datax['mark']."/".$datax['outof']."</li>
                                    
                                
                                    </ul>
                                    
                                ";

                         }  
                    }echo"</td></tr>";
                        
                       
         
            }
            echo"</table>
           
            
            ";
}
?>