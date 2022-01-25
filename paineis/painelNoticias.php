<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Notícias</title>
</head>

<body>
    <div id="header">
        <div id="logo">
            <a href="../index.html"> <img src="../img/logoMenu.png"> </a>
        </div>
        <nav id="menu">
            <p> <a href="../perfis/escolhaPerfil.php"> Cadastro </a> </p>
            <p> <a href="./painelNoticias.php"> Notícias </a> </p>
            <p> <a href="../atletas.php"> Atletas </a> </p>
            <p> <a href="../patrocinadores.php"> Patrocinadores </a> </p>
            <p> <a href="../clubes.php"> Clubes </a> </p>
            <p> <a href="./painelEsportes.php"> Esportes </a> </p>
            <?php
                session_start();
                include_once "../cadastro/Banco.php";
                $tipoUsuario = $_SESSION['tipoUsuario'];

                if($tipoUsuario == 'atleta'){
                    echo '<p> <a href="../perfis/perfilAtleta.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'amador'){
                    echo '<p> <a href="../perfis/perfilAmador.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'patrocinador'){
                    echo '<p> <a href="../perfis/perfilPatrocinador.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'clube'){
                    echo '<p> <a href="../perfis/perfilClube.php"> Meu Perfil </a> </p>';
                }
                
            ?>
            <p> <a href="../index.html"> Sair </a> </p>
        </nav>
    </div>

    <div id="main">
        <div id="titlePainel">
            <h1>Últimas Notícias</h1>
        </div>
        
        <div class="l1">
            <?php
                $qry = "SELECT * FROM painel_noticia";
                $res = mysqli_query($conn,$qry);

                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="textNoticia">
                <div class="titleNoticiaPainel">
                    <h4> <?php echo $row["titulo_noticia"]; ?></h4>
                </div>
                
                <div class="olhoNoticiaPainel">
                    <p>  <?php echo $row["olho_noticia"]; ?></p>
                </div>
                
                <div class="botaoNoticiaPainel">
                    <p id="botaoNoticia"> <a href="../noticia.php?titulo_noticia=<?php echo $row['titulo_noticia']?>"> Saiba Mais </a> </p>
                </div>
               

            </div>
            <!-- add outra noticia -->
            <?php
                }
            }
            ?>
        </div>
    </div>
</body>

</html>