<?php
include("DBcon.php");
$query="SELECT * FROM attendance";
$queryC=mysqli_query($conff,$query);
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
    <title>Attendance-List</title>
    <script>
        $(document).ready(function(){
            $("table").DataTable(
                {}
            );
        });

    </script>
</head>
<body>
    <table id="example" class="display">
        <thead><tr>
            <td>Id</td>
            <td>Class</td>
            <td>Date</td>
            <td>Status</td>
        </tr></thead>
        <tbody>
            <?php
        while($data=mysqli_fetch_assoc($queryC))
  
            echo"<tr>
                <td>".$data['stud_id']."</td>
                <td>".$data['class']."</td>
                <td>".$data['date']."</td>
                <td>".$data['status']."</td>
            </tr>";
            ?>
        </tbody>
    </table>
    
</body>
</html>