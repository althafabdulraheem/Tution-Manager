<?php
include("DBcon.php");
$query="SELECT * FROM notification WHERE status='unread'";
$query_conff=mysqli_query($conff,$query);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>WELCOME ADMIN</title>
</head>
<style>
    .content{
        display:flex;
        height:100vh;
        align-items:center;
        justify-content:center;
        
        background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

    }
    .main{
        max-width:680px;
       display:flex;
       flex-direction:column;
      
        width:800px;
        height:50%;
        height:50vh;
        justify-content:center;
        align-items:center;
        background-color:white;
       border-style:dashed;
       border-radius:80px 162px;
       border-color:#a7c4fc;
        
       
    }
    .row1{
       
        margin-left:10px;
       padding-left:20px;
    }
    .row2{
      
        margin-left:10px;
       padding-left:20px;
    }
    a{
        margin:30px;
    }
    @media screen and (max-width:566px)
    {
        .main{
            background-color:transparent;
            border:none;
        }
    }
    
</style>
<body>
    <header>
        <div class="head">
            <div class="left">ADMIN</div>
            <div class="middle"><a href="#" id="notify">NOTIFICATIONS</a>
                <div class="dropdown">
                    <ul>
                        <?php

                            while($data=mysqli_fetch_assoc($query_conff))
                            {
                            echo"<li><a href='$data[link]?data=student&x=10'>$data[name]</a></li>
                            
                            ";
                            }

                       ?>
                    </ul>
                </div>
        
            </div>
            <div class="right">
                <a href="list-dummy.php">LIST</a>
                <a href="logout.php" id="log">LOGOUT</a></div>
        </div>
       
    </header>
  <div class="content">  
    <div class="main">
        <div class="row1">
            <a href="add.php"><img src="./img/add1.png" height="90px" width="110px"/></a>
            <a href="salary.php"><img src="./img/salary1.png" height="90px" width="110px"/></a>
            <a href="fee.php"><img src="./img/fee1.png" height="100px" width="110px"/></a>
        </div>
        <br><br>                 
        <div class="row2">    
            <a href="adminMark.php"><img src="./img/mark1.png" height="90px" width="110px"/></a>
            <a href="attendance-admin.php"><img src="./img/attendance1.png" height="90px" width="110px"/></a>
            <a href="search.php"><img src="./img/search.png" height="90px" width="110px"/></a>
        </div>    
    </div>
  </div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
<script src="notification.js"></script>
</body>
</html>