<?php
$nomeArquivo = $_POST['nomeArquivo'];
$c=explode(" ",$nomeArquivo);
$cc=count($c);
for ($i = 0; $i <= $cc; $i++) {
$nomecomunder=''.$nomecomunder.''.$c[$i].'_';
}
echo $nomecomunder;
?>
