<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estiloGeral.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Patrocinadores</title>
</head>

<body>
    <div id="header">
        <div id="logo">
            <a href="./index.html"> <img src="./img/logoMenu.png"> </a>
        </div>
        <nav id="menu">
            <p> <a href="./perfis/escolhaPerfil.php"> Cadastro </a> </p>
            <p> <a href="./paineis/painelNoticias.php"> Notícias </a> </p>
            <p> <a href="./atletas.php"> Atletas </a> </p>
            <p> <a href="./patrocinadores.php"> Patrocinadores </a> </p>
            <p> <a href="./clubes.php"> Clubes </a> </p>
            <p> <a href="./paineis/painelEsportes.php"> Esportes </a> </p>
            <?php
                session_start();
                include_once "./cadastro/Banco.php";
                $tipoUsuario = $_SESSION['tipoUsuario'];

                if($tipoUsuario == 'atleta'){
                    echo '<p> <a href="./perfis/perfilAtleta.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'amador'){
                    echo '<p> <a href="./perfis/perfilAmador.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'patrocinador'){
                    echo '<p> <a href="./perfis/perfilPatrocinador.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'clube'){
                    echo '<p> <a href="./perfis/perfilClube.php"> Meu Perfil </a> </p>';
                }
            ?>
            <p> <a href="index.html"> Sair </a> </p>
        </nav>
    </div>

    <div class="titlePatrocinador">
            <h1>Patrocinadores</h1>
    </div>

    <div id="mainPatrocinador">
        <div class="linhaBox">
            <?php
                $qry = "SELECT * FROM patrocinador";
                $res = mysqli_query($conn,$qry);

                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="perfilPatrocinador">
                <div class="boxPerfil">
                    <img src="./img/perfilPatrocinador.png">
                </div>
                <div class="nomePerfil" style="margin: 20px 0; text-align:center;">
                    <h5><?php echo $row['nome_empresa']; ?></h5>
                </div>
                <div class="botao">
                    <p id="botaoPatrocinador">
                        <a href="patrocinadorVer.php?nome=<?php echo $row['nome']?>">
                            Ver Perfil 
                        </a>
                    </p>
                </div>
            </div>

            
        </div>
        <?php
                }
            }
        ?>
    </div>
    
</body>

</html>