<!DOCTYPE html>
<html>
<head>
	<title>Upload de Arquivos</title>
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>
	<form action="salvarArquivo.php" method="POST" enctype="multipart/form-data">
		
<input name = "nomeArquivo" id="motivo" placeholder="Insira o nome do arquivo..." type="text">
<input name="arquivo" id="motivo" placeholder="Insira o arquivo" type="file">
<input type="submit">
    </form>
  </div>

</body>
</html>
