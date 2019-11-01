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
		<label>Nome do trabalho</label><input type="text" name="nomeArquivo">
		Nome do arquivo sepadados por "_"<input type="text" name="nomeArquivo2">
		<a href="listadeArquivos.php">Lista</a>
		<input type="file" name="arquivo"><br>
		<input type="submit" name="enviar-formulario">	
	</form>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
<div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
