<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloForm.css">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Cadastro Patrocinador</title>
</head>

<body>
    <div id="header">
        <div id="logo">
            <a href="../index.html"> <img src="../img/logoMenu.png"> </a>
        </div>
    </div>

    <div class="titleCadastro">
        <h1>Cadastro</h1>
    </div>

    <div class="mainCadastro">
        <?php
            session_start();
            include_once "../cadastro/Banco.php";

            $nome = $_GET['nome'];
            $qry = "SELECT * FROM patrocinador WHERE nome='$nome'";

            $res = mysqli_query($conn, $qry);
            if ($res) {
                $row = mysqli_fetch_assoc($res);
            } else {
                echo "<p>Erro: ". $qry ." | ". mysqli_error($conn) ."</p>";
                mysqli_close($conn);
            }
        ?>

        <form action="edit_Patrocinador.php" method="post">
            <div id="lin1">
                <label class="primeiroInput"> <p>Nome da Empresa</p> </label>
                <input type="text" id="nomeEmpresa" name="nome_empresa" value="<?php echo $row['nome_empresa']?>" required>
            </div>
            <div id="lin2">
                <label class="primeiroInput"> <p>E-mail</p> </label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']?>" required>

                <label>  <p>CNPJ</p> </label>
                <input type="text" id="cnpj" name="cnpj" value="<?php echo $row['cnpj']?>" required>

                <label>  <p>Telefone</p> </label>
                <input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']?>" required>
            </div>
            <div id="lin3">
                <label class="primeiroInput"> <p>Esporte de Interesse</p> </label>
                <input type="text" id="esporte" name="esporte" value="<?php echo $row['esporte']?>" required>

                <label class="primeiroInput"> <p>LinkedIn</p> </label>
                <input type="text" id="linkedin" name="linkedin" value="<?php echo $row['linkedin']?>" required>

                <label> <p>Quantidade de Atletas Patrocinados</p> </label>
                <input type="number" id="qtdAtletas" name="qtde_atletas_patrocinados" value="<?php echo $row['qtde_atletas_patrocinados']?>" required>
            </div>

            <div id="linhaBotao">
                <input type="submit"  value="Cadastrar">
            </div> 

        </form>

    </div>

</body>

</html>