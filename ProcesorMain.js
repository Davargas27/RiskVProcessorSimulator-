$(document).ready(function(){

    function readCode(cadenaADividir,separador,limiter) {

        arrayLines = cadenaADividir.split(limiter);

        for (var i=0; i < arrayLines.length; i++) {
            console.log(arrayLines[i]);
            arrayLine = arrayLines[i];   
            
            arrayLine = arrayLine.split(separador);
            console.log('wwq',arrayLine.length);

            if(arrayLine.length >= 2){
                instruction = arrayLine[0].split(' ')[0];
                parameter1 = arrayLine[0].split(' ')[1];
                parameter2 = $.trim(arrayLine[1]);
                parameter3 = $.trim(arrayLine[2]);                

                console.log('inst',instruction);
                procesar(instruction,parameter1,parameter2,parameter3);
            }
           // console.log(arrayLines[i].split(separador));
        }
    }   

    $("#btnProcesar").click(function(){
        var codeString = $("#codearea").val();
        console.log(codeString);
        readCode($.trim(codeString),',',';');
    });

    $("#btnLimpiar").click(function(){
        $('.valCalculate').text('0');
    });

    function procesar(instruction,parameter1,parameter2,parameter3) {

        switch($.trim(instruction.toLowerCase())) {
            case 'addi':
                resultado = (parseInt($(' #'+parameter2).text()) + parseInt(parameter3));
                $("#"+parameter1).text(resultado);
                console.log('entro');
              break;
            case 'add':
                resultado = (parseInt($('#'+parameter2).text()) + parseInt($('#'+parameter3).text()));
                $("#"+parameter1).text(resultado);
                console.log('res',resultado);
              break;
            default:
              // code block
          }
    }
});