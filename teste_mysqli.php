<?php 

	require_once('db.class.php');

	$sql = " SELECT * FROM usuarios ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	// retornos das querys
	// update true/false
	// insert true/false
	// select false/resource
	// delete true/false
	
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		$dados_usuario = array();

		while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			$dados_usuario[] = $linha;
		};

		foreach ($dados_usuario as $usuario) {
			var_dump($usuario);
			echo ' <br><br>';
		};
	
	} else{
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

?>