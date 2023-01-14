<?php
include("DBcon.php");





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="attendance.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Add-Attendance</title>
</head>
<body>
    <div class="navbar">
        <div class="nav-head">
            TEACHER
        </div>
        <div class="nav-link">
            <ul>
                <li><a href="./teacher.php">Home</a></li>
                <li><a href="./list-attendance.php">List</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <div class="toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
       
    </div>
    
  <div class="slctbox">  
    <select id="class">
        <option value="none" disabled selected="selected">Select Class <span id="icon">&#11015;&#65039;</span></option>
        <option value="8" align="center">Eight</option>
        <option value="9" align="center">Ninth</option>
        <option value="10" align="center">Tenth</option>
    </select>
 </div>  
    <div class="content">
        <form action='normalAttendance-back.php' method='post'>
            <div class="table">
                
            </div>
            

         
        </form>
    </div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

        $(document).ready(function(){

          
            $("#class").change(function()
            {
                var std=$("#class").val();
                $(".table").load("attendance-load.php",{std:std});
            });
          
        });

</script>  
</body>
</html>