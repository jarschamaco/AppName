<?php 
	session_start();
    include('../connect/conexion.php');

    $conexion=conexionBD();
    $pasar =0;

    $email= $_POST['email'];
    $name= $_POST['name'];
    $password= $_POST['password'];
    $cargo= $_POST['cargo'];
    $contact= $_POST['contact'];
    $ubication= $_POST['ubication'];

    $query = "INSERT INTO user_table (email, name, password, rango, contacto, direccion) values ('$email','$name','$password', '$cargo', '$contact', '$ubication');";
	pg_query($conexion,$query);

 ?>