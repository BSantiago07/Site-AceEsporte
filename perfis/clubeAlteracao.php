<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloForm.css">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Cadastro Clube</title>
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
            $qry = "SELECT * FROM clube WHERE nome='$nome'";

            $res = mysqli_query($conn, $qry);
            if ($res) {
                $row = mysqli_fetch_assoc($res);
            } else {
                echo "<p>Erro: ". $qry ." | ". mysqli_error($conn) ."</p>";
                mysqli_close($conn);
            }
        ?>

        <form action="edit_Clube.php" method="post">
            <div id="lin1">
                <label class="primeiroInput"> <p>Nome do Clube</p> </label>
                <input type="text" id="nomeClube" name="nome_clube" value="<?php echo $row['nome_clube']?>" required>
            </div>
            <div id="lin2">
                <label class="primeiroInput"> <p>E-mail</p> </label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']?>" required>

                <label> <p>Esporte</p> </label>
                <input type="text" id="esporte" name="esporte" value="<?php echo $row['esporte']?>" required>

                <label>  <p>CEP</p> </label>
                <input type="text" id="cep" name="cep" value="<?php echo $row['cep']?>" required>

            </div>
            <div id="lin3">
                <label class="primeiroInput"> <p>Descrição</p> </label>
                <input type="text" id="descricao" name="descricao" value="<?php echo $row['descricao']?>" maxlength="150" required>

                <label> <p>Quantidade de Atletas no Clube</p> </label>
                <input type="number" id="qtdAtletas" name="qtde_atletas" value="<?php echo $row['qtde_atletas']?>" required>
            </div>

            <div id="linhaBotao">
                <input type="submit"  value="Alterar">
            </div> 

        </form>

    </div>

</body>

</html>