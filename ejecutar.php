<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        
        <title>Calculo Area Octagono Regular</title>
    </head>
        <body>
            
            <?php
                if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular'){
                    $lado = $_POST['lado'];
                    $apotema = $_POST['apotema'];
                    $area = null;

                     if(!empty($lado) or !empty($apotema)){
                         echo "<h2 align='center'> CALCULO DEL AREA DEL OCTAGONO REGULAR</h2>";
                         $area = 4 * $lado * $apotema;
                        

                         echo "<br> Lado:" .$lado;
                         echo "<br> Apotema:" .$apotema;
                         echo "<br/><br/>";
                         echo "<br> El valor Del Area es: " .$area;
                         echo "<br/><br/>";
                         echo "<a href='index.html'>Regresar</a>";
                     }
                }
            ?>
                
                
        </body>
        </html>