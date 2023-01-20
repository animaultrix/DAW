<?php
/*
Se asume lo siguiente:

• La existencia de la base de datos mi_practica.
• El host localhost para la base de datos.
• El usuario miusuario para la base de datos.
• La clase Miclave para la base de datos.
• Que la base de datos mi_practica no contiene ninguna tabla.

Según las asunciones anteriores, estudia el siguiente fragmento de código y resuelve
 todos los fallos necesarios para que el resultado final imprima en pantalla «33».
 No puedes suprimir ningún bloque de código para alcanzar el resultado: el código 
 debe realizar todas las operaciones indicadas.
*/
$pdo=null;
try{
    $pdo = new PDO("mysql:host=localhost;dbname=mi_practica;",'miusuario','miclave');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->exec("CREATE TABLE tabla_uno(valor INT UNSIGNED NOT NULL)ENGINE=INNODB");
    $pdo->exec("CREATE TABLE tabla_dos(valor INT UNSIGNED NOT NULL)ENGINE=INNODB");
    
    $statement_insert_uno=$pdo->prepare("INSERT INTO tabla_uno(valor) VALUES(:valor)");
    $statement_insert_dos=$pdo->prepare("INSERT INTO tabla_dos(valor) VALUES(:valor)");

    $pdo->beginTransaction();
    $statement_insert_uno->execute([':valor' => 4]);
    $statement_insert_uno->execute([':valor' => 5]);
    $statement_insert_uno->execute([':valor' => 6]);
    $pdo->commit();

    $pdo->beginTransaction();
    $statement_insert_dos->execute([':valor' => 100]);
    $statement_insert_dos->execute([':valor' => 33]);
    $pdo->rollback();

    $pdo->beginTransaction();
    $statement_insert_dos->execute([':valor' => 15]);
    $statement_insert_dos->execute([':valor' => 3]);
    $pdo->commit();

    $suma_resultado_uno=0;
    $statement_resultados_uno=$pdo->query("SELECT SUM(valor) as suma FROM tabla_uno");
    $datos_resultados_uno=$statement_resultados_uno->fetch(PDO::FETCH_ASSOC);
    $suma_resultado_uno=$datos_resultados_uno['suma'];

    $suma_resultado_dos=0;
    $statement_resultados_dos=$pdo->query("SELECT * FROM tabla_dos");
    while($datos_resultados_dos=$statement_resultados_dos->fetch(PDO::FETCH_ASSOC)){
        $suma_resultado_dos+=$datos_resultados_dos['valor'];
    }

    echo $suma_resultado_uno+$suma_resultado_dos;
}
catch(PDOException $e){
    echo "Ha ocurrido un error de base de datos ".$e->getMessage();
    if($pdo->inTransaction()){
        $pdo->rollBack();
    }
}