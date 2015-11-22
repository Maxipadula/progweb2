var expr = /^[a-zA-Z]*$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var name = $("#name").val();
        
            if(name == "" || !expr.test(name)){
                $("#mensaje1").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje1").fadeOut();

                }
                
    });
    
});
