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
	<form style="margin-left:30%;margin-right:30%;margin-top:10%; background-color:#F4F6F6 ; padding:3%; border-radius:2%;" action="salvar.php" method="POST" enctype="multipart/form-data">
		
<input name = "nomeArquivo" id="motivo" placeholder="Insira o nome do arquivo..." type="text">
<div class="file-field input-field">
      <div class="btn">
        <span>Arquivo</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div><center>
<input class="waves-effect waves-light btn" type="submit">
    </center></form>
  </div>

</body>
</html>
