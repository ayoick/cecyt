<?php

//Variables de conexión a la BD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "09dct0010f";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

//Condicion para comprobar la conexion a la Base de Datos
    if(mysqli_connect_errno()){
        echo "Conexión fallida";
    }
	$mysqli->set_charset("utf8");

//función para realizar la busqueda
	$palabra=$_POST['xbusqueda']; //Variable que envia buscador.php
	$query="SELECT * FROM reinscripcion WHERE curp = '$palabra'"; //Query que busca la única coincidencia 
	$consulta3=$mysqli->query($query); //Variable donde se guardara el query para hacer uso de la misma 
	if($consulta3->num_rows>=1){ //If que verifica que mínimo existe un query
		//Titulares de la tabla
		echo "
		<table class='table'>
		<thead class='thead-dark'>
			<tr>
				<th>CURP</th>
				<th>A. PATERNO</th>
				<th>A. MATERNO</th>
				<th>NOMBRE</th>
				<th>SITUACION</th>
				<th>SEMESTRE</th>
			</tr>
		</thead>
		<tbody>";
		while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){ //Ciclo que imprime el resultado del query
			echo "<tr>
				<td>".$fila['curp']."</td>
				<td>".$fila['a_paterno']."</td>
				<td>".$fila['a_materno']."</td>
				<td>".$fila['nombre']."</td>
				<td>".$fila['situacion']."</td>
				<td>".$fila['semestre']."</td>
			</tr>";
		}
		echo "</tbody>
	</table>";
	}else{ //En caso de que no encuentre coincidencias, imprime este mensaje
		echo "<h5>Lo siento. No hemos encotrado ningun registro que coincida :(</h5> "; 
	}

?>