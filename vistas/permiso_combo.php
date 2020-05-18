<?php

include ("../modelos/db_user.php")

if(isset($_POST['id']))

$query_permiso = mysqli_query($conn, "SELECT id, nombre_permiso FROM permisos");
$result_permiso = mysqli_num_rows( $query_permiso);
mysqli_close($conn);
?> 


<?php

if($result_permiso > 0){
 while($permiso = mysqli_fetch_array($query_permiso)){

?>

<option value="<?php echo $permiso['id']; ?>"><?php echo $permiso['nombre']; ?> </option>
<?php
 }
}


echo $mensaje;



?>




