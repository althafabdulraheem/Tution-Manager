<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
    <title>Admin|Attendance</title>

</head>
<style>
       .radio{
           margin:30px
       } 
</style>
<body>
    <?php  
        if(isset($_GET['data']))
        {
            $val=$_GET['data'];
            $class=$_GET['x'];
            echo"$val $class";
            echo"<script>$(document).ready(function(){
                $('#student').attr('checked','true');
                $('#table').load('load.php',{name:$class});
                $('#dispclass').text('-'+$class );

                
            });</script>";
        }

    ?>
    <form action="attendanceDisplay.php" method="post">
        <p align="center">hloo</p>
        <div class="radio">
                <label>
                    <input type="radio" name="type" id="student">
                    <span>
                        student
                    </span>
                </label>
                <br>
                <label>
                    <input type="radio" name="type">
                    <span>Teacher</span>
                </label>
               <br> <label>
                    <input type="radio" name="type">
                    <span>Other</span>
                </label>
                <br><label>
                    <input type="radio" name="type" checked="checked">
                    <span>None</span>
                </label> 
               
        </div>
    <div class="input-field" id="class">     
       <select name="class" id="cls">
           <option value="" selected="selected">select class</option>
            <option value="1">one</option>
            <option value="2">two</option>
            <option value="3">three</option>
            <option value="4">four</option>
            <option value="5">five</option>
            <option value="6">six</option>
            <option value="7">seven</option>
            <option value="8">eight</option>
            <option value="9">nine</option>
            <option value="10">ten</option>
        </select>
        <label>choose the class</label>
    </div>   
  

 

  

 
       
    </form>
    <br><br>
    <div class="card-panel teal lighten-2 white-text">Attendance<span id="dispclass"></span></div>
   <p id="table"></p> 
      
    </table>

    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var sel = document.querySelectorAll('select');
    M.FormSelect.init(sel);
}); 
//   this above code is for maetrialise-css select box(for selct class)
    $(document).ready(function(){
      
        
         $("#class").hide();  
         $("table").hide(); 
        $("#student").click(function(){
            
            var x=$("#student").val();
            
            $("#class").show();
            $("table").show();

            
        });
        $("#cls").change(function(){
            var x=$("#cls").val();
            $("#table").load("load.php",{name:x});
           

        });
    });  
    </script>
</body>
</html>