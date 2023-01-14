<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Orbitron&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
   <title>salary</title>

 
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
    box-shadow: 0 0 7px rgba(81, 203, 238, 1);
    outline:none;
    border: 3px solid #0dcaf0;
}
/* #cash{
    color: transparent;  
  text-shadow: 0 0 0 black;
} */
</style>
<body>


<div class="forms">
        
        <form action="salary-back.php" method="post">
        <h1 align="center"> SALARY</h1>
                <?php
                include("DBcon.php");
                $query="SELECT name,stud_id  FROM user WHERE type='0' OR type='2'";
                $query_conff=mysqli_query($conff,$query);
                ?>

                <input list="names" id="name" name="name" autocomplete="off" placeholder="enter name.....">
                    <datalist id="names" autocomplete="off" >
                        <?php
                            while($data=mysqli_fetch_assoc($query_conff))
                            {
                                    echo"<option value='$data[stud_id]'>$data[name]</option>";
                                    
                                    
                            }
                        ?>
                    </datalist> <br>  





                <input type="text" name="amount" id="amount" placeholder="amount......  " autocomplete="off"><br>
                <select id="types" name="type" required><br>
                    <option value="cash">CASH </option>
                    <option value="bank">BANK </option>
                </select>
                <input type="number" id="hour" name="hour" placeholder="Hours...." min=1 max=5><br>
             
                <input type="text" id="month" name="month" placeholder="month">
               
                <input type="text" id="date" name="date" placeholder="select the date"><br>
                <div id="bank"><br>
                    <label for="account">Account_Number:</label>
                    <br>
                    <input type="text" id="account" name="account"  placeholder="account number"><br>
                    <label for="bank_name">Bank:</label><br>
                    <input type="text" id="bank_name" name="bank"  placeholder="bank name">
                </div>
                <input type="submit" Value="SUBMIT">
        </form>
</div> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    // <script>
     $(document).ready(function(){
        $( "#date" ).datepicker({
    beforeShow: function(input, inst) {
        inst.dpDiv.css({
            marginTop: -input.offsetHeight + 'px', 
            marginLeft: input.offsetWidth + 'px'
        });
    }
});
        $("#date").hide();
$("#month").hide();
$("#month").hide();
$("#hour").hide();
$("#bank").hide();
$("#types").hide();


$("#name").focusout(function(){

     var name=$("#name").val();
    
      

                                    $("#types").show();
                                    $("#types").change(function(){

                                        var x=$("#types").val();
                                    
                                        if(x=="bank")
                                        {   
                                            $("#bank").show();
                                            $.post("bank-salary.php",{data:name},function(data,status){
                                            var F_data=data.split(",");
                                            $("#bank_name").val(F_data[0]);
                                            $("#account").val(F_data[1]);
                                            
                                            });
                                        }
                                        else{
                                            $("#bank").hide();
                                        }
                                    
                                            
                                        });
                
                var x=$("#name").val();
                $.post("type-salary.php",{data:x},function(type,status){
                        if(type=="0")
                        {

                            $("#date").show();
                        
                            $("#hour").show();
                            $("#month").hide();
                            $("#types option[value=bank]").removeAttr("disabled","true");
                            $.post("amount-salary.php",{data:x},function(data,status){
                            $("#amount").val(data);
                        });
                        
                        }
                        else
                        {
                        //   $("select").attr("disabled","true");
                            $("#types option[value=bank]").attr("disabled","true");
                            $("#date").hide();
                            $("#month").show();
                            $("#hour").hide();
                            $("#bank").hide();
                            $("#amount").val("");
                        }
                        

                });
                
                });
   

});
 
 </script> 
</body>
</html>