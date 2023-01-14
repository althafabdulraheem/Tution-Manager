<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>ADD</title>
    
</head>
<style>
   .sub-form{
       margin:50px;
   }
   .main-form{
       display:flex;
       justify-content:center;
       height:30vh;
       align-items:center;
      
   }
   #type{
       padding:40px;
      border-radius:30px;
      background-color:white;
      -moz-appearance: none;
   -webkit-appearance: none;
   appearance: none;
   border-style:solid;
   border-color:#0dcaf0;
   border-width:4px;
   font-weight:bold;
   font-size:23px;
   }
   .alert{
       margin:40px;
   }

</style>

<body>
  
      <form action="add-back.php" method="post">
      <div class="main-form">   
                <select name="type" id="type">
                    <option value="select">select one opition &#128101;</option>
                    <option id="teacher" value="teacher">teacher</option>
                    <option id="student" value="student">student</option>
                    <option id="other" value="other">other</option>
                    
                </select>       

        </div> 
        <?php
        if(isset($_SESSION['save']))
        {
            
            echo"<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <strong>saved!</strong> The data saved successfully......
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            unset($_SESSION['save']); 
        } 
            ?>
       
        <div id="form" class="sub-form">
                <input class="form-control" type="text" placeholder="enter name" name="name" ><br>
                <label class="form-check-label" for="male">Male</label>
                <input class="form-check-input" type="radio" value="male" name="gender" id="male">
                <label  class="form-check-label" for="female">Female</label>
                <input class="form-check-input" type="radio" value="female" name="gender" id="female"><br>
                <br>
                <select  class="form-select" name="class" id="class"><br>
                    <option value="">select class</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select><br>
                <input class="form-control" id="roll" type="number" name="roll" placeholder="roll"><br>
                <input class="form-control" type="date" name="age" required><br>
                <input type="text" class="form-control" placeholder="fathers name" name="father"><br>
                <input type="text" class="form-control" placeholder="mothers name" name="mother"><br>
                <input class="form-control" id="qualification" type="text" placeholder="qualification" name="qualification"><br>
                <input class="form-control" id="subject" type="text" placeholder="subject" name="subject"><br>
                <input  class="form-control" id="school" type="text" placeholder="schools name" name="school"><br>
                <input class="form-control" type="tel" placeholder="enter the mobile number" maxlength="10" minlength="10" pattern="[0-9]{10}" title="pls enter 10 digits" name="mob">
                <br>
                <div class="d-grid gap-2">
                <input type="submit" class="btn btn-info" name="submit">
                </div>
    </div>
    </form>
     
    
    <script>
            $(document).ready(function(){
                
               
                $("#form").hide();
               $("#type").change(function(){
                   var x=$(this).val();
                   if(x=="teacher")
                   {
                    $("#form").show();
                    $("#school").hide();
                    $("#roll").hide();
                    $("#class").hide();
                    $("#qualification").show();
                    $("#subject").show();
                   }
                   else if(x=="student")
                   {
                    $("#form").show();
                    $("#school").show();
                    $("#roll").show();
                    $("#class").show();
                    $("#qualification").hide();
                    $("#subject").hide();
                   }
                   else if(x=="other"){
                    $("#form").show();
                    $("#school").hide();
                    $("#roll").hide();
                    $("#class").hide();
                    $("#subject").hide();
                    $("#qualification").show();
                   }
                   else{
                       $("#form").hide();
                   }
                   console.log(x);
               });
            });
    </script>
   
</body>
</html>