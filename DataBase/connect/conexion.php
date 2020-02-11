<?php
	function conexionBD(){
		try {
			//conectamos con el servidor
			$conectar= pg_connect("host='localhost' port=5432 dbname=postgres user=postgres password=1234");
			if (!$conectar) {
				echo "Error: ".pg_last_error();
			}else{
				//echo "Conexion existosa";
				return $conectar;
			}
		} catch (Exception $e) {
			echo "Problemas try: ". $e;
		}
	}
?>