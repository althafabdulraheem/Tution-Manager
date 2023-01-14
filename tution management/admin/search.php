<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="search.css">
    
    <title>Search</title>
</head>
<body>

    <?php
include("DBcon.php");
$query="SELECT name FROM user WHERE type='1'";
$query_conff=mysqli_query($conff,$query);
?>

    <div class="search">
        <input list="names" id="name" name="name" autocomplete="off" placeholder="enter the name.............................">
            <datalist id="names" autocomplete="off">
                <?php
                    while($data=mysqli_fetch_assoc($query_conff))
                    {
                            echo"<option value='$data[name]'>";
                            
                            
                    }
                ?>
            </datalist>
        
            <button id="btn" class="button">
        <i class="fa fa-search"></i>
     </button>
            <br>
        </div>    
    <hr>
    <div id="profile">


    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       $("#btn").click(function(){ 
        var x=$("#name").val();
        if(x!=="")
        {
        console.log(x);
        $("#profile").load("search-load.php",{name:x});
        }
    });
    });
</script>
</html>