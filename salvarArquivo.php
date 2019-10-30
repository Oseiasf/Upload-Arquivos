<?php

	include_once('conexao.php');

	// ini_set( 'display_errors', true );
	// error_reporting( E_ALL );


	if (isset($_POST['enviar-formulario'])) {
		$formatosPermitidos = array("pdf");

		$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

		if (in_array($extensao, $formatosPermitidos)) {
			$pasta = "arquivo/";
			$temporario = $_FILES['arquivo']['tmp_name'];
			$novoNome = $_POST['nomeArquivo2'].".$extensao";
			$caminho = $pasta.$novoNome;

			//var_dump( is_writable("arquivo/") ); //informe oque retornar desse dump
  			//echo '<br />',$caminho;
			//echo $novoNome;
			// echo $caminho;
			//var_dump($_FILES);

			if (move_uploaded_file($temporario,$caminho)) {

				try{

					$stmt = $con->prepare("insert into Arquivos (nome_trabalho, caminho_arquivo) values (?,?)");
					$nomeArquivo = $_POST["nomeArquivo"];
					$caminhoArquivo = $caminho;

					$stmt->bindValue(1, $nomeArquivo);
					$stmt->bindValue(2, $caminhoArquivo);

					$stmt->execute();
				
				}catch(PDOException $e){
						echo $e->getMessage();
					}

				$mensagem = "Upload feito com sucesso!";
				header("Location: listadeArquivos.php");

			
			}else {
				$mensagem = "Erro, não foi possivel fazer o upload";
				
			//echo "De ".$temporario." estou movendo para"." ".$pasta.$novoNome;
			}
		}else {

			$mensagem = "Formato inválido, por favor faça um upload de um arquivo em PDF";
			// echo "Não existe";
		 }

		echo $mensagem;
		// echo $extensao;

		// var_dump($_FILES);
	}
?>