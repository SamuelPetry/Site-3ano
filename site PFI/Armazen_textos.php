<?php 
	include 'Banco.php';
	$conec = $con;
	$conector = fetch($conec);

	function fetch($conec){
		$pesq = "SELECT id, titulo, autor, dat, tipo FROM texto ORDER BY dat ASC";
		// Faz uma consulta no banco de dados
		$resultado = $conec->query($pesq);

		if($resultado == true){ 
			if ($resultado->num_rows > 0) {
				$row = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
			    $mensagem = $row;
			} else {
			   $mensagem = "Nenhum valor encontrado"; 
			}
		}
		return $mensagem;
	}
 ?>