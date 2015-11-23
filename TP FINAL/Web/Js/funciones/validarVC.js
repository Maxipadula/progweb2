var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/;

$(document).ready(function () {

    $("#boton").click(function (){

        var fyh = $("#fyh").val();
        var lugar = $("#lugar").val();

                    if(fyh == "" || !expr2.test(fyh)){
                         $("#mensaje1").fadeIn("slow");
                         return false;
                    }
                    else{
                        $("#mensaje1").fadeOut();

                            if(lugar == "" || !expr1.test(lugar)){
                            $("#mensaje2").fadeIn("slow");
                            return false;
                         }
                        else{
                            $("#mensaje2").fadeOut();
                            }

                        }   
    
    });
    
});
