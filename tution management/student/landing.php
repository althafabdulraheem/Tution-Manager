<?php
session_start();
include("DBcon.php");
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$Attendance="SELECT COUNT(id) FROM attendance";
$Attendace_conff=mysqli_query($conff,$Attendance);
$data1=mysqli_fetch_assoc($Attendace_conff);
$total=$data1['COUNT(id)'];
$Attendance2="SELECT COUNT(status) FROM attendance WHERE stud_id='$id' AND status='present'";
$Attendace_conff2=mysqli_query($conff,$Attendance2);
$data2=mysqli_fetch_assoc($Attendace_conff2);
$atndance=$data2['COUNT(status)'];
if($total>0)
{
    $percentage1=($atndance/$total)*100;
}
else{
    $percentage1=0;
}    
$sum="SELECT SUM(outof) FROM mark WHERE name='$name'";
$sum_conff=mysqli_query($conff,$sum);
$data3=mysqli_fetch_assoc($sum_conff);
$mark_total=$data3['SUM(outof)'];
$sum_ind="SELECT SUM(mark) FROM mark WHERE name='$name'";//individual sum
$sum_ind_conff=mysqli_query($conff,$sum_ind);
$data4=mysqli_fetch_assoc($sum_ind_conff);
$ind_sum=$data4['SUM(mark)'];
if($mark_total>0)
{
    $percentage2=($ind_sum/$mark_total)*100;
}
else 
    {
        $percentage2=0;   
    }

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
    <title><?php echo strtoupper("$name"); ?>|Profile</title>
</head>
<style>
    *{
        box-sizing:border-box;
    }
    .navbar{
        background-color:#8BC6EC;
background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);


    }
    body{
     padding:0;
     margin:0;
     position:relative;   
    }
.navbar-brand
{
    color:white;
    font-weight:bold;
   
}
.main{
    /* background-color: black; */
position: relative;
width: 100%;
}
.landing{

    display:flex;
    justify-content:center;
    height:100vh;
    align-items:center;
    flex-wrap:wrap;
    /* background-color:red; */
    
    
}
.data{
    /* position: absolute; */
    /* height:100vh; */
    width:100%;

}
.attendance,.marks{
    margin:40px;
    max-width:400px;
    width:500px;
    height:60vh;
    background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
box-shadow: 0px 7px 13px 0px rgb(0 0 0 / 62%);
padding: 0;
overflow:hidden;


border-radius:17px;
}
#attendance,#mark{
    font-size:5vw;
}

.mark, mark {

    padding:0;


}
.head{
    width:100%;
   
    color:white;
    display:flex;
    justify-content:center;
   
}
.content{
    display:flex;
    align-items:center;
    height:60%;
    font-size:10vw;
    justify-content:center;

}
a{
    text-decoration:none;
    font-size:1.5vw;
    font-weight:bold;
    letter-spacing:2px;
    color:blue;
}
.button{
    
   display:flex;
   justify-content:center;
   padding:20px;
   background-color:white;
    border-color: white; 
   
   
}
.button:hover{
    background-color:transparent;
    font-weight:bold;
    color:red;
    
}
a:hover{
    color:white;
}
/* .attndnce{
    margin-top:350px;
    position:relative;
   
   
} */
td{
    padding:10px;

}
#first{
    background-color: #90b0e7;
color: white;
font-weight: bolder;


}

.ui-dialog-titlebar-close
{
    background-color:red;
    color:black;
}
/* #cross{
    position: absolute;
    top: -7px;
    right: -15px;
    background-color: #efe8e8c7;
    padding: 7px;
    border-radius: 50%;
    cursor: pointer;
    color: grey;
    z-index: 1;
} */
.logout{
    display:flex;
    gap:15px;
}
.logout a{

   display:inline-block;
    margin-right:7px;
    color:white;
    font-weight:950;
    width:95px;
    
}
.logout a:hover{
  color:black;
  
}
header{
    position: sticky;
  position: -webkit-sticky;
  top:0;
   
}
.athead,.mhead{
    position: sticky;
  position: -webkit-sticky;
  top:0;
    width:100%;
    height:55px;
    background-color:#8BC6EC;
background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
border-bottom: solid #1e6aad33;

}
h1{
    margin-left:9px;
    text-transform:capitalize;
    color:white;
    letter-spacing:2px;
    font-weight:bold;
}
table{
    background-color:white;
}
#thaed
{
    background-color: #90b0e7;
color: white;
font-weight: bolder;
}
.scroll-top{
    display:none;
    padding: 30px;
    background-color: #95a1e8;
    color: white;
    font-weight: bold;
    position: fixed;
    right: 0;
    border-radius: 34px 9px;
    cursor:pointer;
}
.fee-load{
    position: absolute;
    top: 36%;
    right: 40%;
    z-index: 200;

}
.overlay{   
    display:none;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    background-color: rgb(14 14 14 / 50%);
    }
 li{
     list-style:none;
 }
 .nav-link{
     color:white;
     font-weight:bold;
     font-size:20px;

 }
.table{
    background-color:white;
}
.mtable{
   
    width: 100%;
  overflow-y:hidden;
    overflow-x:scroll;
}
 @media(max-width:580px)
 {
     .fee-load{
         right:20%;
      
     }
     a{
         font-size:20px;
     }
     #attendance,#mark{
         font-size:50px;
         

     }
     
 }
 @media(max-width:400px)
 {
     .fee-load{
         right:10%;
     }
 }
 @media(max-width:310px)
 {
     .fee-load{
         right:0;
     }
 }
</style>
<body>
    <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo strtoupper("$name");echo" |$id";?></a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    
                    
                    </ul>
                
                    <li class="nav-item-inline my-2 my-lg-0 ">
                            <a class="nav-link" href="#" id="fee">FEE</a>
                    </li>
                    &nbsp &nbsp &nbsp &nbsp<li class="nav-item-inline my-2 my-lg-0 ">
                            <a class="nav-link" href="../admin/logout.php">LOGOUT</a>
                    </li>
                    
                    

                </div>
                </nav>

    </header>
    <div class="fee_warning">
            <?php  
                $month=date('M');
                $fee="SELECT $month FROM fee WHERE stud_id='$id'";
                $fee_conff=mysqli_query($conff,$fee);
                $fee_data=mysqli_fetch_assoc($fee_conff);
                $x=$fee_data[$month];
                if($x=="unpaid")
                {
                   echo" <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>
                        <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                        </svg>
                        <strong>Reminder!</strong> Please Pay The <mark><strong>FEE</strong></mark> For This Month.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='    Close'></button>
                    </div>";
                }
            ?>        
    </div>
    <div class="fee-load">

    </div>
    <section class="main">
        <div class="overlay">

        </div>                  
            <div class="landing">
                <div class="attendance">
                    <div class="head">
                        <h1>Attendance</h1>
                    </div>
                    <div class="content">

                        <p id="attendance"> <?php echo round($percentage1).'%'  ?></p>
                    </div>
                    <div class="button">
                        <a href="#atdata"  id="attendanceV">VIEW</a>
                    </div>
                </div>
                <div class="marks">
                        <div class="head">
                                <h1>Mark</h1>
                        </div>
                            <div class="content">

                                <p id="mark"> <?php echo round($percentage2).'%'  ?></p>
                            </div>
                            <div class="button" >
                                <a href="#mrkdata" id="markV">VIEW</a>
                            </div>
                </div>
            
            <div class="data">
                    <div class="attndnce" id="atdata">
                        <div class="athead">
                            <h1>attendance</h1>
                        </div>
                        <div class="attable">
                            
                        </div>
                    </div>    
                    <div class="mark" id="mrkdata">
                        <div class="mhead">
                            <h1>mark</h1>
                        </div>
                        <div class="mtable"></div>
                    </div>
            </div>   
                
              <div class="scroll-top">
                    <i style='font-size:24px' class='fas'>&#xf102;</i>
              </div>

    </section>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $(".attndnce").hide();
                $(".mark").hide();
                $(".attendance").mouseenter(function(){
                    // $("#attendance").css("font-size","5vw");
                    $("#attendance").text("<?php   echo"$atndance / $total";   ?>");
                });
                $(".marks").mouseenter(function(){
                    
                    $("#mark").text("<?php echo"$ind_sum / $mark_total"; ?>");
                });
                
                $("a#markV").click(function(){
                    
                  $(".mark").show();    
                    $(".mtable").load("load-mark.php",{name:"<?php echo"$name";?>"});
                });
                $("a#attendanceV").click(function(){
                   
                    $(".attndnce").show();
                   $(".attable").load("load-attendance.php",{id:"<?php echo"$id"; ?>"});
                });
                $("a#fee").click(function(){
                        
                        
                            $(".fee-load").load("fee-load.php");
                          $(".overlay").css("display","block");  
                            $(".fee-load").css({
                                    "overflow-y":"scroll",
                                    "overflow-x":"hidden",
                                    "height":"50%"

                            });
                            $("html,body").css({
                                    "overflow":"hidden",
                                    "height":"100%"
                            });           
                });
                $(".scroll-top").click(function(){
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    //    window.scrollTo({top:0,behaviour:smooth});
                });
               $(window).scroll(function(){
                    var scroll=$(window).scrollTop();
                           if(scroll>=500)
                           {
                               $(".scroll-top").css("display","block");
                           }                            
                   });
                  
            });

    </script>

</body>
</html>