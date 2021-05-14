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
            .centrar{
            text-align: center;
            margin-top:100px;
            }
    </style>    
</head>
<body>
    <div>     
        <form action="" method="post" class="centrar">
            <h2>Introduce un número mayor a 0</h2>
            <input type="text" id="entrada" name="entrada">
            <input type="submit" value="convertir a texto" id="enviar" name="enviar">
        </form>
        
    </div>
    <?php
        if (isset($_POST["enviar"])) {

            $numero = str_split($_POST["entrada"]); 
            echo "<h3 class=\"centrar\">";
            foreach ($numero as $key) {
                global $cadena;
                $cadena .= $key." ";
            }
            echo "$cadena </h3>";            
        }  
    ?>
</body>
</html>