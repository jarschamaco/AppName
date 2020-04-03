
<?php
    session_start();
    include('../connect/conexion.php');
    $conexion=conexionBD();
    $pasar =0;

    $usuario = $_POST['email'];

   if (isset($_POST['email']) && isset($_POST['password'])) {
       $query = "SELECT email, password, name FROM user_table;";
       $result = pg_query($conexion,$query);
       if (!$result) {
           die("Query faild!");
       }
        $json= array();
        while ($row = pg_fetch_row($result)) {
            if ($_POST['email'] == $row[0] && $_POST['password'] == $row[1]) {
               $_SESSION['user']='use1';
               $_SESSION['Active'] = true;
               $_SESSION['name'] = $row[2];
               $pasar=1;
            }
            if ($_POST['email'] != $row[0] && $_POST['password'] != $row[1]) {
               $pasar=2;
            }
        }
        if (pg_num_rows($result)==0) {
          $pasar=3;
        }
        echo $pasar;
   }else{
        echo $pasar;
   }
?>