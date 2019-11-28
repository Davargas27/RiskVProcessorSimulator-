$(document).ready(function(){

    $("#codearea").keypress(function(){ 
        $('#e3_rectangle').css('fill','red'); 
    }); 
    $("#btnProcesar").click(function(){ 
        $('#e3_rectangle').css('fill','#6d77ab'); 
    }); 
});