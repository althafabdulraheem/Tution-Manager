<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mark.css">
    
    <title>AddMark</title>
</head>
<body>

  <div class="selecter">  
    <select id="class">
        <option value="" selected="selected" disabled>select</option>
        <option value="10">ten</option>
        <option value="9">nine</option>
        <option value="8">eight</option>
    </select>
  </div>   
    <form action="test.php" method="post" id="mark">
    <div class="table">

    </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#class").change(function(){
                var x=$("#class").val();
                $(".table").load("addMark-load.php",{class:x});
            });
        });
    </script>
</body>
</html>