<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloForm.css">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Cadastro Notícia</title>
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
        <form action="cad_Noticia.php" method="post">
            <div id="lin1">
                <label class="primeiroInput"> <p>Digite o nome do Clube:</p> </label>
                <input type="text" id="codigo" name="nome_clube" required>

                <label class="primeiroInput"> <p>Digite a senha do Clube:</p> </label>
                <input type="password" id="codigo" name="senha_clube" required>
            </div>
            <div id="lin2">
                <label class="primeiroInput"> <p>Título da Notícia</p> </label>
                <input type="text" id="titulo" name="titulo_noticia" maxlength="65" required>

                <label> <p>Olho da Notícia</p> </label>
                <input type="text" id="olho" name="olho_noticia" maxlength="150" required> </input>

            </div>
            <div id="lin3">
                <label class="primeiroInput"> <p>Notícia</p> </label>
                <textarea name="noticia" id="noticia" maxlength="2000" cols="30" rows="10"></textarea>

            </div>

            <div id="linhaBotao">
                <input type="submit"  value="Cadastrar">
            </div> 

        </form>

    </div>

</body>

</html>