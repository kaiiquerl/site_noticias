<?php 
$usuario  = "root";
$senha    = "";
$url      = "localhost";
$database = "SiteNoticias";

$conexao = mysqli_connect($url,$usuario,$senha,$database);

if (!$conexao)
{ 
    echo ("Não conectou");
}
?>