<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Fee</title>
 
</head>
<style>
   h1{
        background-color:rgba(0, 0, 0, 0);
    }
.forms{
    display:flex;
    justify-content:center;
    height:100vh;
    align-items:center;
   
}

input{
    padding:10px;
    margin:4px;
    border-color: #2ccbeb69;
    caret-color:#0dcaf0;
    caret-shape: block;
}
input[type=number]
{
    width:189px;

    
}
select{
    -moz-apperence:none;
    -webkit-appearance: none;
     
    padding:10px;
    margin:4px;
    border-color:#2ccbeb69;
    border-width:3px;
    background-color:white;
    width:271px
}


input[type=submit]{

    width: 277px;
    background-color: #2ccbeb69;
    border-style:none;
    font-weight:bold
}
input[type=submit]:hover{
    background-color:#0dcaf0;
    color:white;
}
input:focus{
    box-shadow: 0 0 11px rgba(81, 203, 238, 1);
    outline:none;
    border: 3px solid #0dcaf0;
}
/* #cash{
    color: transparent;  
  text-shadow: 0 0 0 black;
} */

</style>
<body> 
    <div class="alert"></div>

        <div class="forms">
           
            <form action="fee-back.php" method="post">
            <h1 align="center">FEE</h1>   
            <?php
            include("DBcon.php");
            $query="SELECT * FROM studInfo";
            $query_conff=mysqli_query($conff,$query);
            ?>
            <input list="names" id="name" name="name" placeholder="Enter name......" autocomplete="off" required>
                <datalist id="names" autocomplete="off">
                    <?php
                        while($data=mysqli_fetch_assoc($query_conff))
                        {
                                echo"<option value='$data[ID]'>$data[name]</option>";
                                
                                
                        }
                    ?>
                </datalist><br>  
               
             

            <select id="month" name="mon" required>
                <option value="" disabled selected='selected'>Select month</option><!-- for select for reqred fist val should nul!-->
                <option value="Jun">JUNE</option>
                <option value="Jul">JULY</option>
                <option value="Aug">AUGUST</option>
             
            </select><br>
            <input type="text" name="amount" id="amount" placeholder="amount" autocomplete="off" required><br>
            <input type="text" name="class" placeholder="class" id="class" readonly><br>
            <select id="types" name="type">
                <option value="cash">CASH</option>
                <option value="bank">BANK</option>
            </select><br>
            <div id="bank">
            <input type="text" name="account"  placeholder="account number" autocomplete="off">
            <br><input type="text" name="bank"  placeholder="bank name">
            </div>
            
            
            <input type="submit">
            </form>
        </div>    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                    
                        $("#bank").hide();
                        $("#types").change(function(){
                                var x=$("#types").val();
                            
                                if(x=="bank")
                                {
                                    $("#bank").show();
                                }
                                else{
                                    $("#bank").hide();
                                }
                        });
                        $("#month").change(function(){
                                var x=$("#month").val();
                                var y=$("#name").val();
                            $(".alert").load("fee-status.php",{status:x,name:y});
                        });
                        $("#name").focusout(function(){
                            var z=$("#name").val();
                            if(z!=="")
                            {            
                                    $.post("fee-class.php",{id:z},function(data,status)
                                    {  
                                            $("#class").val(data);
                                    });
                            }        
                        });
                });
            
            </script> 
</body>
</html>