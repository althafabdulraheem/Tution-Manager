<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mark</title>
</head>
<style>
   *{
    box-sizing:border-box;
   }
   body{
       margin:0;
       padding:0;
   }
   .select-box{
       margin-top:50px;
       display:flex;
       justify-content:center;
       
   }
   select{
       padding:50px;
   }
   .content{
     
   }
   table{
     
      margin-top:30px;
   }
   td{
       font-weight:bold;
       text-transform:uppercase;
       
   }
 #name{
       color:black;
     
       vertical-align:middle; /*for botstrap center not work */
   }

  
  .status{
      position:fixed;
     bottom:0;
  }
  #thead{
      background-color:#12d7c4;
      font-weight:bold;
  }
select{
    -moz-apperance:none;
    -webkit-appearance:none;
    background-color:#4db6ac;
   
    border:double white;
    color:white;
    font-weight:bolder;
}
option{
    background-color:white;
    color:black;
}

ul li::marker {
  content: "#";
}
#pass{color:#116461;font-size:2vw;font-weight:bold;}
#fail{color: #717671;font-weight:bold;font-size:1.3vw;}
@media(max-width:500px)
{
 #pass{
      font-size:5vw;
   }
   #fail{
       font-size:4vw;
   }
}
</style>
<body>
  <div class="select-box">  
    <select id="class">
        <option value="" selected="selected" disabled>Select Class</option>
        <option value="10">TENTH</option>
         <option value="9">NINTH</option>
         <option value="8">EIGHT</option>   
    </select>
  </div>
  
  <div class="content">
      <div class="head">
      </div>  
            <div class="table">
               
                  
            </div>
            <ul class='status'>
                    <li  id="pass">PASS</li>
                    <li id="fail">FAIL</li>

                
                    
                    </ul>
  </div>             
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           $("#class").change(function(){
                var x=$("#class").val();
                $(".table").load("load-mark.php",{class:x});
           });
        });

    </script>
</body>
</html>