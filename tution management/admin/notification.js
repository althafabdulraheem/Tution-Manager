$(document).ready(function(){
  
    $(".dropdown").hide();
    var x=true;
    $("a#notify").click(function(){
       
        if(x)                    //check for true(only true value it enters into if)
       { 
        $(".dropdown").slideDown("slow");
        x=false;
       }
       else{
           $(".dropdown").slideUp("slow");
           x=true;
       }
    });

});