
<?php
    session_start();
    include('../connect/conexion.php');
    $conexion=conexionBD();
    $pasar =0;

    $usuario = $_POST['email'];

   if (isset($_POST['email']) && isset($_POST['password'])) {
       $query = "SELECT email, password FROM user_table WHERE rango = '1';";
       $result = pg_query($conexion,$query);
       if (!$result) {
           die("Query faild!");
       }
        $json= array();
        while ($row = pg_fetch_row($result)) {
            if ($_POST['email'] == $row[0] && $_POST['password'] == $row[1]) {
               $_SESSION['user']='use1';
               $_SESSION['Active'] = true;
               $pasar=1;
            }
            if (($_POST['email'] != $row[0] || $_POST['password'] != $row[1]) && (!empty($_POST['email']) || !empty($_POST['password']))) {
               $pasar=2;
            }
        }
        echo $pasar;
   }else{
        echo $pasar;
   }
?>