<?php
    include("DBcon.php");
    $id=$_POST['id'];
    $query="SELECT  * FROM attendance WHERE stud_id='$id'";
    $q_conff=mysqli_query($conff,$query);
   
    // print_r($data);
    echo"
    <table class='table table-striped'>
            <tr id='first'>
                <td>DATE</td>
                <td>STATUS</td>
            </tr>
            ";
            while($data=mysqli_fetch_assoc($q_conff))
            {
                echo"
            <tr>
                <td>".$data['date']."</td>
                <td>".$data['status']."</td>
             


            </tr>";
            }

  echo"  </table>
                            
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
$(document).ready(function(){
    $('#cross').click(function(){
        $('.attndnce').hide();
    });

});

</script>  
  
  
  ";

  //<p id='cross' >x</p>------------above -script below -echo


?>