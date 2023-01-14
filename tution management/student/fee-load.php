<?php
include("DBcon.php");
$query="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='fee'";
$query_conff=mysqli_query($conff,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width:100%;
    }
   
    span{
        float: right;
    padding: 3px;
    background-color: white;
    color: #a59e9e;
    border-radius: 50%;
    cursor:pointer;
    }
    span:hover{
        background-color:red;
        color:white;
    }
    #msg{
        background-color: #1780eb;
    font-weight: bold;
    color: white;
    border-top:#1780eb;
    border-bottom:#141414;
    }
    #fee-head{
        background-color: #232526;
    color: azure;
    font-weight: 900;
    border-bottom:#141414;
    }
    .table>:not(caption)>*>* {
    padding: 0.5rem 3.5rem;
    background-color: var(--bs-table-bg);

    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
#datafee td
{
    color:black;
    font-weight:bold;
    background-color:white;
}
.table td, .table th {
border-top:none;

}

</style>
<body>
<table  class="table">
        <tr id="msg">
            <td colspan=2>Fee-Details<span id="closs"><i style="font-size:24px" class="fa">&#xf00d;</i></span></td>
        </tr>
        <tr id="fee-head">
                
                <td>Month</td>
                <td>Status</td>
            </tr>
    <?php
        while($data=mysqli_fetch_assoc($query_conff))
        {
        // print_r($data);
        $x1=$data['COLUMN_NAME'];
        if($x1=="stud_id"||$x1=="id"||$x1=="amount"||$x1=="class"||$x1=="date")//month ozhike remove
        {
           

        }
        else{
            $q2="SELECT $x1 FROM fee WHERE stud_id='10053'";
            $q2_conff=mysqli_query($conff,$q2);
            $data2=mysqli_fetch_assoc($q2_conff);
        
        echo"
        
    
            <tr id='datafee'>
                <td>$x1</td>
                <td>".$data2[$x1]."</td>
            </tr>
                    ";}

        }?>
    
          
            
    
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#closs").click(function(){
                $(".fee-load").hide();
                $(".overlay").css("display","none");
                $("html,body").css({
                        "overflow":"visible",
                        "height":"auto"
                });
            });
        });

        </script>
</body>
</html>