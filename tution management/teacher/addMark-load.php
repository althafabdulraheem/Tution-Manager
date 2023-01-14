<?php
include("DBcon.php");
$class=$_POST['class'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #sub{
        background-color:#11b4eb;
    }
    #subject{
        padding: 10px;
    width: 99%;
    padding-left: 18px;
    letter-spacing: 5px;
    font-weight: bold;
    border: solid #11b4eb;
  }
  #subject:focus{
      outline:none;
  }
  input[type=text]
{
    padding-left: 7px;
    padding-bottom: 18px;
    border-style: hidden;
    font-size: 12px;
    font-weight: bold;
}
input[name=outof]
{
    
    caret-color:rgba(7, 218, 255, 0.952);
    font-size: 25px;
}
#last{
    
    display:none;
}
select[name=typeres]
{
    background-color: #0099CC;
    width: 100%;
    color:#0099CC;
    text-transform: capitalize;
    font-weight: bold;
    border-style:hidden;
}
select[name=typeres] option{
    background-color: #0099CC;
}
select[name=typeres]:focus{

   outline:none;

}
#resrow
{
    /* display:none; */
    background-color:#0099CC;
    
}
input[name=resoutof]
{
    background-color:#0099CC;
    color:#0099CC;
}
input[name=resoutof]::placeholder
{
    color:white;
}
select[name="typeres"]
{
    display:none;
}
input[name="resoutof"]
{
    display:none;
}
  @media screen and (max-width:750px)
  {
        input[name=outof]
        {
            font-size:14px;
        }
  }
  @media screen and (max-width:500px)
  {
     input[name=outof]{
          display:none;
          

      }
      #mode{
          display:none;
      }
      body{
          background-color:white;
      }
      input[name=subbtn]
      {
          display:none;
      }
      table{
          width:100%;
      }
     #last{
         display:inline-block;
         background-color:#11b4eb;
         width:200%;
        
         padding-left:150px;
        }
    input[name=resoutof]
            {
                display:block;
                color:white;
            }
           
                select[name=typeres]
                {
                     color:white;
                     font-weight:bold;   
                    display:block;
                }


        
    }     


</style>
<body>

    <?php
        $query0="SELECT COUNT(*) FROM studInfo WHERE class='$class'";
        $q0_conff=mysqli_query($conff,$query0);
        $fcount=mysqli_fetch_assoc($q0_conff);
       $count=$fcount['COUNT(*)'];
        if($count==0)
        {
            echo"<h1 align='center' style='    color: #c7bfbf;
            '>No Students Found.....</h1>";
        }
        else{
    
    ?>

    <table border=1px>
        
        <td colspan='2' id="sub"><select id="subject" name="subject"><option value='maths'>MATHS</option>
            <option value='physics'>PHY</option>
            <option value='chemistry'>CHE</option></select></td>
            <input type="hidden" name="class" value="<?php echo"$class"; ?>">
            <select name="type" id="mode">
                <option value="1">first</option>
                <option value="2">second</option>
                <option value="3">third</option>
            </select>
            <input type='text' name='outof' placeholder='Outof.............' autocomplete="off">
           <tr id="resrow">
               <td> <select name="typeres">
                <option value="1">first</option>
                <option value="2">second</option>
                <option value="3">third</option>
            </select></td>
               <td><input type="text" placeholder="OutOff" name="resoutof" autocomplete="off"></td>
           </tr>
    
    <?php

        $query="SELECT name FROM studInfo WHERE class='$class'";
        $q_conff=mysqli_query($conff,$query);
        while($data=mysqli_fetch_assoc($q_conff))
        {
            echo"<tr>
           
            <td><input type='text' name='name[]' value=".$data['name']." readonly></td>
            <td><input type='text' name='mark[]' placeholder='mark' required autocomplete='off'></td>
           </tr>";
        }

  
    ?>
       <tr id="last">
            <td colspan="2" align="center"><input type='submit' value='Done' id='donebtn'></td>
          
        
        </tr>
    
    </table> 
        <input type="submit" value="Done" id="donebtn" name="subbtn">

   
   <?php

    }
    ?>

  
</body>
</html>