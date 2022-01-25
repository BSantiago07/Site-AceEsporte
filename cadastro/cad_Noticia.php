<?php
  session_start();
  include_once "Banco.php";
  $nome_clube = $_POST['nome_clube'];
  $titulo_noticia = $_POST['titulo_noticia'];
  $olho_noticia = $_POST['olho_noticia'];
  $noticia= $_POST['noticia'];
  $senha_clube = $_POST['senha_clube'];

  
  $sql = "INSERT INTO painel_noticia(nome_clube,titulo_noticia,olho_noticia,noticia,senha_clube) VALUES('$nome_clube','$titulo_noticia','$olho_noticia','$noticia','$senha_clube')";

  if(mysqli_query($conn, $sql)){
    mysqli_close($conn);
    header('Location:../paineis/painelNoticias.php');
  }else{
    echo "Erro: ".$sql."<br>".mysqli_error($conn);
  }
  
  
 
?>