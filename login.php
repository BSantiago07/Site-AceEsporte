<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/estiloGeral.css">
    <link rel="stylesheet" href="./css/estiloForm.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Login</title>
</head>

<body>
    <div id="header">
        <div id="logo">
            <a href="./index.html"> <img src="./img/logoMenu.png"> </a>
        </div>
    </div>
  
    <div id="container">
        <div class="title" id="titleLogin">
            <h1>Login</h1>
        </div>
        <form action="autenticacao.php" method="post">
            <p> </p>
            <div id="line1">
                <label> Nome de Usuário </label> <br>
                <input type="text" id="nomeUsuario" name="nomeUsuario">
            </div>
            <div id="line2">
                <label id="labelSenha"> Senha </label> <br>
                <input type="password" id="senha" name="senha">
            </div>
            <br>
            <div class="lineRadio">
                <input type="radio" id="amador" name="Usuario" value="amador">
                <label for="amador">Amador</label>
                <input type="radio" id="atleta" name="Usuario" value="atleta">
                <label for="atleta">Atleta</label>
                <input type="radio" id="patrocinador" name="Usuario" value="patrocinador">
                <label for="patrocinador">Patrocinador</label>
                <input type="radio" id="club" name="Usuario" value="clube">
                <label for="clube">Clube</label>
                
            </div>
            <br>
            
            <div id="line3">
                <button id="entrarInicio"> <a> Entrar </a> </button>
            </div>
        </form>
    </div>
</body>

</html>