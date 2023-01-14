<?php
include("DBcon.php");
$query="SELECT * FROM user";
$query_conff=mysqli_query($conff,$query);
// print_r($data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <title>LIST</title>
    <script>
        $(document).ready(function(){
           $("#datatable").DataTable();
        });
    </script>
</head>
<style>
.content{
   margin-top:50px;
}

</style>
<body>
  <div class="content">
    <table id="datatable" class="display">
        <thead>
            <tr>
                <td>ID</td>
            <td>NAME</td>
            <td>TYPE</td>
        </tr>
        </thead>
        <tbody>
            <?php
            while($data=mysqli_fetch_assoc($query_conff))
            {   
                $type=$data['type'];
                $val="";
                if($type=='0')
                {
                        $val="Teacher";
                }
                elseif($type==1)
                {
                    $val="Student";
                }
                else{
                    $val="Other";}
                
           echo" <tr>
                <td>".$data['stud_id']."</td>
                <td>".$data['name']."</td>
                
                <td>$val</td>
            </tr>";
            }?>
        </tbody>

    </table>
</div>      
</body>
</html>