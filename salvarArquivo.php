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
			$nomeArquivo = $_POST['nomeArquivo'];
			$novoNome = str_replace(" ", "_", $nomeArquivo);

			$caminho = $pasta.$novoNome.".".$extensao;


		}

		if (move_uploaded_file($temporario, $caminho)) {

				try{

					$nomeArquivo;
					$caminhoArquivo = $caminho;

					$stmt = $con->prepare("insert into Arquivos (nome_trabalho, caminho_arquivo) values (?,?);");

					$stmt->bindValue(1, $$nomeArquivo);
					$stmt->bindValue(2, $caminhoArquivo);

					echo $stmt;
					// $stmt->execute();
				
				}catch(PDOException $e){
						echo $e->getMessage();
					}

				$mensagem = "Upload feito com sucesso!";
				header("Location: listadeArquivos.php");

			
			}else {

				$mensagem = "Erro, não foi possivel fazer o upload";
		
			}else {

			$mensagem = "Formato inválido, por favor faça um upload de um arquivo em PDF";

		 }
	}
?>