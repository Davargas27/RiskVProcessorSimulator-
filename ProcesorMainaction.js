$(document).ready(function(){

    $("#codearea").keypress(function(){ 
        setTimeout(
            () => {
                $('#e3_rectangle').css('fill','red'); 
            },2* 1000);        
    }); 

    $("#btnProcesar").on('click',function(){ 
        $('#e3_rectangle').css('fill','#6d77ab');       
    }); 
});