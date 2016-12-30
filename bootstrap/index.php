<!DOCTYPE html>
<html>
    <head>
        <title>Encuestas San Vicente Fundación</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            $(inicial);
            
            function inicial(){
                $("#botoncito").click(function(){
                    
                    /*$(".textos").each(function($index){
                        alert("El elemento "+$index+" contiene: "+$(this).val());
                    }); */
                    $("<input type='text'><br>").appendTo("#contenedorcito");
                    document.location.history.ba
                    //alert("Hay "+ $(".textos").length + " cajas de texto");
                    
                    
                    //$(this).css("background-color", "blue");
                    //$("input[name='opcion1']").css({"background-color":"blue", "color": "white"}).val("Juan Fernmando Aremnas ");
                    //$("input[name='opcion1']").val("Juan Fernando").css()
                     
                    //alert("En el campo está escrityo en número "+$("input[name=edad]").val());
                });
            }
        </script>

    </head>
    <body style="background-color: #FAFAFA;">
        
        
        <b>Ingrese su edad</b><br><br>
        
        <div id="contenedorcito">
            <input type="text" class="textos" name="opcion1" ><br>
            
            
            
        </div>
         
        
        
        
        
        
        <br><br>
        
        <input type="button" value="Procesar" id="botoncito">
        

        <!-- <div class="container" style="font-family: Trebuchet MS; background-color: white;">
             <div style="text-align: center;">
                 <h3 style="font-weight: bold;">ENCUESTA DE SATISFACCIÓN DEL CLIENTE INTERNO CON LOS SERVICIOS DE APOYO DIAGNÓSTICO Y TERAPÉUTICO</h3>
             </div>
             <div class="panel panel-default">
                 <div class="panel-heading" style="background-color: rgb(0,105,65);"><img src="bplogo.png" class=""></div>
                 <div class="panel-body" style="font-size: 18px;">
                     
                     Esta encuesta pretende evaluar la satisfacción del trabajador de Centros Especializados con el cumplimiento de las actividades ejecutadas por los apoyos diagnósticos y/o terapéuticos. Recuerde que sus respuestas deben corresponder a la percepción general del periodo en evaluación y no a eventos o situaciones ocurridas recientemente. <br><br>
                     <div class="row">
                         <div class="col-md-4">
                             <div class="alert alert-warning"> <b>Nota:</b> esta encuesta es anónima. </div>
                         </div>
                     </div> 
                     Por favor califique con uno (1) la apreciación más negativa y con cinco (5) la más positiva. Si su calificación es menor de tres (3), apreciaríamos mucho que en el campo Observaciones nos especifique el aspecto a mejorar. Si no tiene respuesta para algún ítem, señale NS/NR (No Sabe, No Responde).<br><br>
                     
                     <a href="http://172.28.24.10/enclieninterno/?to=amZhMQ==" style="background-color: #97BF0D;" class="btn btn-primary btn-block btn-lg" role="button">Diligenciar la encuesta</a>
                 </div>
             </div>
         </div>-->

        
    </body>
</html>