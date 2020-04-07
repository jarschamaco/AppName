
<?php
    session_start();
    include('../connect/conexion.php');
    $conexion=conexionBD();
    $pasar =0;
    $login_check =0;

    $corre = $_POST['email'];
    $cont = $_POST['password'];

   if ( (!$corre) || (!$cont)) {      
        echo $pasar;
   }else{
      $query = "SELECT email, password, name FROM user_table WHERE email = '$corre' AND password = '$cont'";
       $result = pg_query($conexion,$query);
       if (!$result) {
           die("Query faild!");
       }
       $login_check = pg_num_rows($result);
       if($login_check > 0){

        while ($row = pg_fetch_array($result)) {
          foreach ($row as $key => $val){
             $$key = stripslashes( $val );
          }
          $_SESSION['Active'] = true;
          $_SESSION['name'] = $row[2];
        }
        $pasar = 1;
       }else{
        $pasar = 2;
       }
        echo $pasar;
   }
?>