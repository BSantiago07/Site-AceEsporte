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
        <form action="cad_Patrocinador.php" method="post">
            <div id="lin1">
                <label class="primeiroInput"> <p>Nome de Usuário do Patrocinador</p> </label>
                <input type="text" id="nomeUsuariO" name="nome" placeholder="ace_esporte" required>

                <label> <p>Senha</p> </label>
                <input type="password" id="senhA" name="senha" required>

                <label> <p>Nome da Empresa</p> </label>
                <input type="text" id="nomeEmpresa" name="nome_empresa" required>
            </div>
            <div id="lin2">
                <label class="primeiroInput"> <p>E-mail</p> </label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

                <label>  <p>CNPJ</p> </label>
                <input type="text" id="cnpj" name="cnpj" maxlength="18" placeholder="Ex: XX.XXX.XXX/0001-XX" required>

                <label>  <p>Telefone</p> </label>
                <input type="text" id="telefone" name="telefone" maxlength="16" placeholder="Ex: (DD) XXXXX-XXXX" required>
            </div>
            <div id="lin3">
                <label class="primeiroInput"> <p>Esporte de Interesse</p> </label>
                <input type="text" id="esporte" name="esporte" placeholder="Nome do esporte" required>

                <label> <p>LinkedIn</p> </label>
                <input type="text" id="linkedin" name="linkedin" placeholder="Ex: AceEsporte" required>

                <label> <p>Quantidade de Atletas Patrocinados</p> </label>
                <input type="number" id="qtdAtletas" name="qtde_atletas_patrocinados" required>
            </div>

            <div id="linhaBotao">
                <input type="submit"  value="Cadastrar">
            </div> 

        </form>

    </div>

</body>

</html>