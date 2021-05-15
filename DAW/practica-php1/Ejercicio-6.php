<!-- Debemos crear una función que, recibiendo un número entero y mayor que 0, 
convierta cada número en su correspondiente con letras, es decir, 3523 lo 
debe mostrar como «tres cinco dos tres». Antes de escribir el código 
debemos explicar cómo lo haríamos. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio-6</title>
    <style>
        .caja{
            position: absolute;
            top:50%;
            left: 50%;
            height: 400px;
            width: 400px;
            margin-top: -300px;
            margin-left: -215px;
            padding: 30px;               
            background-color: gainsboro;
            border-radius: 9px;
            text-align: center;
        }  
    </style>
</head>
<body>
    <div class="centrar caja">     
        <form action="" method="post" class="centrar">
            <h2 style="padding-top: 33px;">Introduce un número mayor a 0</h2>
            <input oninput="if(this.value.length > this.maxLength)" type="text" maxlength="17" id="entrada" name="entrada">
            <input type="submit" value="convertir a texto" id="enviar" name="enviar">
        </form>
        <?php

            global $cadena;
            global $noNum;
            if (isset($_POST["enviar"])) {

                $numeros = str_split($_POST["entrada"]);
                foreach ($numeros as $key) {
                    
                    switch ($key) {

                        case '1': $cadena .= "uno "; break;
                        case '2': $cadena .= "dos "; break;
                        case '3': $cadena .= "tres "; break;
                        case '4': $cadena .= "cuatro "; break;
                        case '5': $cadena .= "cinco "; break;
                        case '6': $cadena .= "seis "; break;
                        case '7': $cadena .= "siete "; break;
                        case '8': $cadena .= "ocho "; break;
                        case '9': $cadena .= "nueve "; break;
                        case ' ': $cadena .= ""; break;
                        case '': $cadena .= ""; break;
                        default: $noNum .= "'".$key."' ";
                    }                
                }
                echo '';
                echo "<h3>".$_POST["entrada"]."</h3>";
                echo $cadena != "" ? "<hr style='width: 200px;'>" : "";            
                echo "<h3>$cadena</h3>";
                if ($noNum!=null) {
                    echo "<h3><span style='color: red;'>No son numeros: $noNum.</span></h3>";
                }else if ($cadena==null){
                    echo "<h3><span style='color: red;'>Vacio.</span></h3>";
                }                 
            } 
        ?>
    </div>
</body>
</html>