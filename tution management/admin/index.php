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
    <title>Document</title>
</head>
<style>
  .main{
  display:flex;
 
}
.form{
display:flex;
flex-direction:column;
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

</style>
<body>
  <div class="main">
    <div class="img">
      <img src="20611.jpg">
    </div>
  <div class="form">
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
  <input class="form-control" type="text" placeholder="username" name="username" required><br>
  <input class="form-control" type="password" placeholder="password" name="password" required>
  <br>
  <div class="button" align="center">
    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">
  </div>
</form>
 </div>
</div>    
</body>
</html>