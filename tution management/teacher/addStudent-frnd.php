<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

   .alert{
       margin:40px;
   }
   li{
       list-style:none;
       color:white;
       font-weight:bold;
   }
   li:hover{
       color:black;
   }


</style>

<body>

    <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">TEACHER</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    
                    
                    </ul>
                
                    <li class="nav-item-inline my-2 my-lg-0 ">
                            <a class="nav-link" href="teacher.php" id="fee">HOME</a>
                    </li>
                    &nbsp &nbsp &nbsp &nbsp<li class="nav-item-inline my-2 my-lg-0 ">
                            <a class="nav-link" href="../admin/logout.php">LOGOUT</a>
                    </li>
                    
                    

                </div>
            </nav>

    </header>
  
      <form action="add-back.php" method="post">
      <div class="main-form">   
                     
      <h1 align="center">Add Student</h1>
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
                <input class="form-control" type="text" placeholder="enter name" name="name" autocomplete="off" ><br>
               <label class="form-check-label" for="male">Male</label>
               &nbsp  &nbsp  &nbsp<input class="form-check-input" type="radio" value="male" name="gender" id="male">
                &nbsp
                <label  class="form-check-label" for="female">Female</label>  &nbsp  &nbsp  &nbsp
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
     
    
    
   
</body>
</html>