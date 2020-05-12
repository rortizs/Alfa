<?php

    require_once "../config/conexion.php";

    $consulta="SELECT * FROM `prueba`";

    $resultado=mysqli_query($conexion,$consulta);


    while ($fila=mysqli_fetch_array($resultado)){
        echo "<p>";
        echo "-"; //un separador
        echo $fila ["id"];
        echo "-"; // un separador
        echo $fila ["nombre"];
        echo "-"; // un separador
        echo $fila ["apellido"];
        echo "-"; // un separador
        echo $fila ["edad"];
        echo "<p>";
    }
?>