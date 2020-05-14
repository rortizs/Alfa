<?php

require_once "../config/global.php";


$conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);



if(mysqli_connect_errno()){


        printf("No se pudo realizar la conexión a la base de datos: %s\n",mysqli_connect_error());

        exit();

}
else{
    echo "Si conecta la base de datos";
}

?>