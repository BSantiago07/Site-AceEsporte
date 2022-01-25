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
        <form action="cad_Clube.php" method="post">
            <div id="lin1">
                <label class="primeiroInput"> <p>Nome de Usuário</p> </label>
                <input type="text" id="nomeUsuariO" name="nome" placeholder="Ex: ace_esporte" required>

                <label> <p>Senha</p> </label>
                <input type="password" id="senhA" name="senha" required>

                <label> <p>Nome do Clube</p> </label>
                <input type="text" id="nomeClube" name="nome_clube" required>
            </div>
            <div id="lin2">
                <label class="primeiroInput"> <p>E-mail</p> </label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

                <label> <p>Esporte</p> </label>
                <input type="text" id="esporte" name="esporte" placeholder="Nome do esporte" required>

                <label>  <p>CEP</p> </label>
                <input type="text" id="cep" name="cep" maxlength="9" placeholder="Ex: XXXXX-XXX" required>

            </div>
            <div id="lin3">
                <label class="primeiroInput"> <p>Descrição</p> </label>
                <input type="text" id="descricao" name="descricao" maxlength="150" placeholder="O que você quer que os outros saibam sobre o você?" required>

                <label> <p>Quantidade de Atletas no Clube</p> </label>
                <input type="number" id="qtdAtletas" name="qtde_atletas" required>
            </div>

            <div id="linhaBotao">
                <input type="submit"  value="Cadastrar">
            </div> 

        </form>

    </div>

</body>

</html>