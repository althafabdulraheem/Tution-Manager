<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Tuition</title>
   
</head>
<style>
  h1{
    display:none;
  }
  .main{
  display:none;
 
}
.form{
display:flex;

width:50%;
height:100vh;

justify-content:center;
align-items:center;
background-color:#138ed529;
}
img{
max-width:90%;
height:100vh;
}
input[type=submit]:hover{
  background-color:#138ed529;
  border-color:#138ed529;
box-shadow:0px 6px 8px 0px #0d6efd;

}
.pre{
  
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;


}
@media(max-width:760px)
{
  .img{
    display:none;
  }
  .form{
    width:100%;
  }
  h1{
    margin-top:15px;
    padding-top:5px;
    color: white;
  text-shadow:2px 2px 4px #000000;
  width:100%;
  height:50px;
  background-color:white;
    display:block;
    position:fixed;
    top:0;
  }
}

</style>
<body>
  <div class="pre">
    <div class="loader">
   <img src="1481.gif"style="width:48px;height:48px;">
   </div>
  </div>
  <div class="main">
          <div class="img">
            <img src="20611.jpg">
          </div>
          <div class="form">
               <h1 align="center">TUITION MANAGEMENT</h1>
                     <form action="login-back.php" method="post">
                                  <?php  
                                  if(isset($_SESSION['wrong']))
                                  {
                                    echo"    <div class='alert alert-danger'role='alert'>
                                        Wrong User Credentials !!!
                                      </div>";
                                      unset($_SESSION['wrong']);
                                  }
                                    ?>
                                    <input class="form-control" type="text" placeholder="username" name="username" required autocomplete="off" autofocus><br>
                                    <input class="form-control" type="password" placeholder="password" name="password" required>
                                    <br>
                                    <div class="button" align="center">
                                      <input type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">
                                    </div>
                      </form>             
                  
          </div>      
</div>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script>
         $(window).on("load",function(){
          $(".pre").fadeOut(1500);
          $(".main").css("display","flex");
          
         });

    </script>    
</body>
</html>