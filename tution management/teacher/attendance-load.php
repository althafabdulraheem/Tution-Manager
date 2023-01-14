<?php
include("DBcon.php");
$class=$_POST['std'];
$query0="SELECT COUNT(*) FROM studInfo WHERE class='$class'";
$q0_conff=mysqli_query($conff,$query0);
$fcount=mysqli_fetch_assoc($q0_conff);
$count=$fcount['COUNT(*)'];
$date=date("d-m-y");
if($count==0)
{
    echo"<h1 align='center' style='    color: #c7bfbf;
    '>No Students Found.....</h1>";
}
else{
        $find="SELECT COUNT(*) FROM attendance WHERE date='$date' AND class='$class'";
        $find_C=mysqli_query($conff,$find);
        $find_D=mysqli_fetch_assoc($find_C);
        $find_count=$find_D['COUNT(*)'];
        if($find_count !=0)
        {
                echo"<h1 style='    color: #e9e2e2;
                font-size: larger;'><span style='color: #d1d5d7;
                font-weight: bolder;'>Already Submited</span> attendance for today</h1>";
        }
        else{

            $i=0;
            $query="SELECT name,ID,roll_no FROM studInfo WHERE class='$class' ";
            $query_conff=mysqli_query($conff,$query);?>


            <table>
                            <tr class="heading">
                                <td class="id">ID</td>
                                <td>NAME</td>
                                <td class="roll">ROLL NO</td>            
                            </tr>
            <?php                
            while($data=mysqli_fetch_assoc($query_conff))
            {
                $i++;
            echo"
                        
                            <tr>
                            
                            <td class='id'><input type='text' value=".$data['ID']." name='id[]' readonly></td>
                            <td id='rel'><input type='text' value=".$data['name']." name='name[]' readonly>
                            <small>".$data['roll_no']."</small>
                            </td>
                            <td class='roll'><input type='text' value=".$data['roll_no']."  name='roll[]' readonly></td>
                            <input type='hidden' value='$class' name='class'>
                            <td><input type='text' id=".$i." class='chk' value='' data-id=".$i." name='check[]' maxlength='1' autocomplete='off'></td>
                        <td class='remove' id=r".$i." data-id=".$i.">X</td>
                            
                            </tr>

                        
                    


            ";}  


          

            ?>

                    <tr><td colspan='4'><button id="subbtn" data-count="0">Submit</button></td></tr>       
            </table>
            <?php
   } }?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){   
        $(".chk").keydown(function(event){
            //console.log(event); diable keyboard
            return false;
        });
        $(".remove").hide();
        let count=0;
        let x=true;
        $(".chk").click(function(){
            
                     
           if($(this).val()=="")
           {
            $(this).val("✔");
            count++;
        
 
               
           }
           else{
               $(this).val("");
               count--;
               
           }
        //    $(this).attr("readonly","true");
        $("button").attr("data-count",count);
           
         
        });
      
        // $(".chk").click(function(){
        //    if($(this).val()=="")
        //    {
        //     count++;
        //    }
           
          
            // if($(this).val()!=="")
            // {   
                
            //     let id=$(this).attr("id");
            //     $("#r"+id).show();
                
               
            
                
           
            // }
        // });
        // $(".remove").click(function(){
                  
        //             var x=$(this).attr("id");

        //             var z=x.replace('r','');
                   
        //             $("#"+z).val("");
                    
        //             count--;
        //             $("button").attr("data-count",count);
        //             $(this).hide();
                 
        //         });
       
    });
    </script>
