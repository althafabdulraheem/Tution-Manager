<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</head>
<script>
    $(document).ready(function(){
       
        $.ajax({
            url:"list-back.php",
            method:"POST",
            dataType:"json",
            success:function(data){
              
                $("#table").DataTable({
                    data:data,
                    columns:[
                        {"data":"stud_id"},
                        {"data":"name"},
                        {"data":"password"},
                        {"data":"type"},
                    ]
                });
            }
        });
    });
</script>
<body>
    <table id="table" class="display">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>TYPE</td>
                <td>hh</td>
            </tr>
        </thead>
        
    </table>
    
</body>
</html>
