<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloForm.css">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Cadastro Amador</title>
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
            $qry = "SELECT * FROM usuario WHERE nome='$nome'";

            $res = mysqli_query($conn, $qry);
            if ($res) {
                $row = mysqli_fetch_assoc($res);
            } else {
                echo "<p>Erro: ". $qry ." | ". mysqli_error($conn) ."</p>";
                mysqli_close($conn);
            }

        ?>
        <form action="edit_Amador.php" method="post">
            <div id="lin1">
                <label class="primeiroInput"> <p>Nome de Usuário</p> </label>
                <input type="text" id="nomeCompleto" name="nome_completo" value="<?php echo $row['nome_completo']?>" required >

                <label> <p>Data de Nascimento</p> </label>
                <input type="date" id="dataNascimento" name="data_nascimento" value="<?php echo $row['data_nascimento']?>" required>
            </div>
            <div id="lin2">
                <label class="primeiroInput"> <p>E-mail</p> </label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']?>" required>

                <label>  <p>CPF</p> </label>
                <input type="text" maxlength="14" id="cpf" name="cpf" value="<?php echo $row['cpf']?>" required>
            </div>
            <div id="lin3">
                <label class="primeiroInput"> <p>Esporte de Interesse</p> </label>
                <input type="text" id="esporte" name="esporte" value="<?php echo $row['esporte']?>" required>

                <label> <p>Breve Biografia</p> </label>
                <input type="text" id="biografia" name="biografia" value="<?php echo $row['biografia']?>" maxlength="150" required>
            </div>

            <div id="linhaBotao">
                <input type="submit"  value="Alterar">
            </div> 

        </form>

    </div>
   
</body>

</html>