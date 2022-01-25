<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloForm.css">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Cadastro Atleta</title>
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
        <form action="cad_Atleta.php" method="post">
            <div id="lin1">
                <label class="primeiroInput"> <p>Nome de Usuário</p> </label>
                <input type="text" id="nomeUsuariO" name="nome" placeholder="Ex: ace_esporte" required>

                <label> <p>Senha</p> </label>
                <input type="password" id="senhA" name="senha" required>

                <label> <p>Nome Completo</p> </label>
                <input type="text" id="nomeCompleto" name="nome_completo" required>
            </div>
            <div id="lin2">
                <label class="primeiroInput"> <p>E-mail</p> </label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

                <label> <p>Data de Nascimento</p> </label>
                <input type="date" id="dataNascimento" name="data_nascimento" required>

                <label>  <p>CPF</p> </label>
                <input type="text" maxlength="16" id="cpf" name="cpf" placeholder="Ex: XXX.XXX.XXX-XX" required>
            </div>
            <div id="lin3">
                <label class="primeiroInput"> <p>Esporte de Interesse</p> </label>
                <input type="text" id="esporte" name="esporte" placeholder="Nome do esporte" required>

                <label> <p>Breve Biografia</p> </label>
                <input type="text" id="biografia" name="biografia" maxlength="150" placeholder="O que você quer que os outros saibam sobre você?" required>
            </div>
            <div id="lin4">
                <label class="primeiroInput"> <p>Clube</p> </label>
                <input type="text" id="clube" name="clube" placeholder="Nome do clube do qual você pertence" required>

                <label> <p>Quantidade de Patrocinadores</p> </label>
                <input type="number" id="qtdPatrocinador" name="qtde_patrocinador" required>

                <label> <p>Telefone</p> </label>
                <input type="text" id="telefone" name="telefone" maxlength="16" placeholder="Ex: (DD) XXXXX-XXXX" required>
            </div>

            <div id="linhaBotao">
                <input type="submit"  value="Cadastrar">
            </div> 

        </form>

    </div>

</body>

</html>