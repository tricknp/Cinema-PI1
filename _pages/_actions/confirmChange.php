<!DOCTYPE html>
<html>
<head>
	<title>Redirecting</title>
	<meta http-equiv="Refresh" content="0; URL=http://localhost/cinema-pi1/_pages/alter.php">
</head>
</head>
<body>

	<?php 
		include "../../_settings/settings.php";

		$cod = $_GET['cod'];
		$sala = $_POST['sala'];
		$filme = $_POST['filme'];
		$capacidade = $_POST['capacidade'];
		$hora = $_POST['hora'];
		$data = $_POST['data'];

		$sql = "UPDATE sessao 
		SET sala = '$sala', filme = '$filme', capacidade = '$capacidade', horaInicio = '$hora', data = '$data' 
		WHERE id=$cod";
			
		if ($con->query($sql) === TRUE) {
   			 //redirecionando
		}else{
    		echo "Error: " . $sql . "<br>" . $con->error;
		}
	$con->close();	
	?>


</body>
</html>