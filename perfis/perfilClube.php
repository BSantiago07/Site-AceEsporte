<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Meu Perfil</title>
</head>

<body>
    <div id="header">
        <div id="logo">
            <a href="../index.html"> <img src="../img/logoMenu.png"> </a>
        </div>
        <nav id="menu">
            <p> <a href="escolhaPerfil.php"> Cadastro </a> </p>
            <p> <a href="../paineis/painelNoticias.php"> Notícias </a> </p>
            <p> <a href="../atletas.php"> Atletas </a> </p>
            <p> <a href="../patrocinadores.php"> Patrocinadores </a> </p>
            <p> <a href="../clubes.php"> Clubes </a> </p>
            <p> <a href="../paineis/painelEsportes.php"> Esportes </a> </p>
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
    <div id="corpoPerfil">
        <div id="fotoPerfil">
            <img src="../img/perfilClube.png">
        </div>
        <div id="cardPerfil">
            <?php
                if(isset($_SESSION['senha']) && isset($_SESSION['nome'])){
                    $senha = $_SESSION['senha'];
                    $nome = $_SESSION['nome'];
                    $tipoUsuario = $_SESSION['tipoUsuario'];
                  
                
                    $sql="SELECT * FROM clube WHERE senha = '$senha' AND nome = '$nome'";
                    $result=mysqli_query($conn, $sql);
                    if($row=mysqli_fetch_assoc($result)){
                                        
            ?>
            <ul>
                <li>
                    <h2> <b> <?php echo $row["nome_clube"]; ?> </b> </h2>
                </li>
                <li>
                    <p> <b> E-mail: </b><?php echo $row["email"]; ?> </p>
                </li>
                <li>
                    <p> <b> CEP: </b><?php echo $row["cep"]; ?> </p>
                </li>
                <li>
                    <p> <b> Esporte: </b><?php echo $row["esporte"]; ?> </p>
                </li>
                <li>
                    <p> <b> Quantidade de Atletas no Clube: </b><?php echo $row["qtde_atletas"]; ?> </p>
                </li>
                <li>
                    <p> <b>Breve Biografia: </b><?php echo $row["descricao"]; ?> </p>
                </li>
            </ul>
            <div class="botaoPerfilAE">
                <div class="botao">
                    <p class="botaoExclusao">
                        <a href="clubeRemocao.php?nome=<?php echo $row["nome"];  ?>">
                            Excluir Perfil
                        </a>
                    </p>
                </div>

                <div class="botao">
                    <p class="botaoAlteracao">
                        <a href="clubeAlteracao.php?nome=<?php echo $row["nome"];  ?>">
                            Alterar Perfil
                        </a>
                    </p>
                </div>

                <div class="botao">
                    <p class="botaoCriacao">
                        <a href="../cadastro/cadastroNoticia.php?nome=<?php echo $row["nome"];  ?>">
                            Criar Notícia
                        </a>
                    </p>
                </div>
            </div>
            <?php
				    }
                }else{
                    echo '<ul><li><h2>Usuario não autenticado</h2></li></ul>';
                }
			?>
        </div>
    </div>

</body>

</html>