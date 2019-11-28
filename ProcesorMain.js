$(document).ready(function(){

    function readCode(cadenaADividir,separador,limiter) {

        arrayLines = cadenaADividir.split(limiter);
        console.log(arrayLines);
        for(var i=0; i < arrayLines.length; i++) {
            arrayLine = arrayLines[i].trim();   
            
            arrayLine = arrayLine.split(separador);

            if(arrayLine.length >= 2){

                instruction = arrayLine[0].split(' ')[0];
                parameter1 = arrayLine[0].split(' ')[1];
                parameter2 = $.trim(arrayLine[1]);
                parameter3 = $.trim(arrayLine[2]);                
                
                response = procesar(instruction,parameter1,parameter2,parameter3);

                if(response && $.trim(instruction.toLowerCase()) === 'beq'){
                    i += parseInt(parameter3);
                }

            }else{
                if(arrayLine[0] !== '')
                {
                    $('.valCalculate').text('0');
                    alert('El formato de las instrucciones dadas no es el correcto');
                }              
            }
        }
    }   

    $("#btnProcesar").click(function(){
        var codeString = $("#codearea").val();
        codeString = $.trim(codeString);
        readCode(codeString,',',';');
    });

    $("#btnLimpiar").click(function(){
        $('.valCalculate').text('0');
    });

    function procesar(instruction,parameter1,parameter2,parameter3) {

        switch($.trim(instruction.toLowerCase())) {
            case 'addi':
                resultado = (parseInt ($(' #'+parameter2).text()) + parseInt(parameter3));
                hexString = resultado.toString(16);
                $("#"+parameter1).text(resultado);
                $("#"+parameter1).next().children('td').first().text(hexString);
              break;
            case 'add':
                resultado = (parseInt($('#'+parameter2).text()) + parseInt($('#'+parameter3).text()));
                $("#"+parameter1).text(resultado);
              break;
            case 'subi':
                resultado = (parseInt($('#'+parameter2).text()) - parseInt(parameter3));
                $("#"+parameter1).text(resultado);
            break;
            case 'sub':
                resultado = (parseInt($('#'+parameter2).text()) - parseInt($('#'+parameter3).text()));
                $("#"+parameter1).text(resultado);
               
            break;
            case 'lw':
                $("#"+parameter1).text(parseInt($('#'+parameter2).text()));
            break;
            case 'sw':
                $("#"+parameter1).text(parseInt($('#'+parameter2).text()));
            break;
            case 'beq': 
                if(parseInt($('#'+parameter1).text()) !== parseInt($('#'+parameter2).text()))
                    return true; 
                else
                    return false;
            break;  
            default:
                $('.valCalculate').text('0');
                alert('No es posible ejecutar la instrucción ' + instruction  + ', por favor valide las instrucciones dadas e intentelo nuevamente.');
        }
        return true;
    }
});