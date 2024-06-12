<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalNews</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>
            <img src="img/logo.png" alt="Logo PinhalNews" class="logo">
            <div class="titulos">
                <spam class="titulo1">PinhalNews</spam>
                <p class="titulo2">seu site de notícias da cidade e do mundo.</p>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Principal</a></li>
                <li><a href="todas.php">Todas as Noticias</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="area.php">Area Restrita</a></li>
            </ul>
        </nav>
        <main id="main-index">
            <?php 
                $sql = "SELECT * FROM tb_noticia ORDER BY RAND() LIMIT 6;";
                $resultado = mysqli_execute_query($conexao, $sql);
                while($dados = mysqli_fetch_array($resultado))
                {
                    echo '
                    <article>
                        <img src="img/'.$dados["imagem"].'" alt="foto noticia" class="fotonoticia">
                        <p class="textonoticia">'.$dados["titulo"].'</p>
                        <a href="noticia.php?id_noticia='.$dados["id_noticia"].'">
                            <img src="img/saibamais.png" alt="Saiba Mais" class="saibamais">
                        </a>
                    </article>
                    ';                    
                }
            ?>        
        </main>
        <footer>
            <a href="#"><img src="img/whats.png" alt="whatsapp" width="226"></a>
            <p>Copyright © 2024 Pinhal News - Desenvolvido e otimizado por Alunos Etec INFO.</p>
            <a href="#"><img src="img/redes.png" alt="redes social" width="148"></a>
        </footer>
    </div>
</body>
</html>