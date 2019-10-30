<!DOCTYPE html>
<html>
<head>
	<title>Lista de Arquivos</title>
</head>
<body>
	<div  class ="container">
		<a href="index.php">Voltar para adicionar Anais</a>
		<p> ............................................... ..................... </p>            
		<table border="2">
			<tr>
				<th>Nome</th>
			</tr>
			<?php 
				include_once('conexao.php');
				$resultado = $con->query("select * from Arquivos;");
				foreach ($resultado  as $row) {         
			?>
			<tr>
				<td>
					<a href ='<?=$row["caminho_arquivo"];?>'><?=$row["nome_trabalho"];?></a>
				</td>
			</tr>
			<?php
				}
			?>
		</tabela>     
	</div>
</body>
</html>