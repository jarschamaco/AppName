<?php 
	session_start();
    include('../connect/conexion.php');

    $conexion=conexionBD(); 
    $pasar =0;

    $id= $_POST['id'];

    echo $id;

    $query = "DELETE FROM user_table WHERE id=".$id;
	pg_query($conexion,$query);

 ?>