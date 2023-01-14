<?php
    include("DBcon.php");
    $name=$_POST['name'];
    $query="SELECT subject,mark,status FROM mark WHERE name='$name'";
    $q_conff=mysqli_query($conff,$query);
   
    // print_r($data);
    echo"
    <table class='table' id='marktab'>
            <tr id='thaed'>
                <td>SUBJECT</td>
                <td>MARK</td>
                <td>STATUS</td>
            </tr>
            ";
            while($data=mysqli_fetch_assoc($q_conff))
            {
                echo"
            <tr>
                <td>".$data['subject']."</td>
                <td>".$data['mark']."</td>
                <td>".$data['status']."</td>


            </tr>";
            }

  echo"  </table>";



?>