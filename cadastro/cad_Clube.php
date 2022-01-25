<?php
  session_start();
  include_once "Banco.php";
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $nome_clube = $_POST['nome_clube'];
  $email = $_POST['email'];
  $esporte = $_POST['esporte'];
  $cep = $_POST['cep'];
  $descricao = $_POST['descricao'];
  $clube = $_POST['nome_clube'];
  $qtde_atletas = $_POST['qtde_atletas'];

 
   
  $sql = "INSERT INTO clube(nome,senha,nome_clube,email,esporte,cep,descricao,clube,qtde_atletas)  VALUES('$nome','$senha','$nome_clube','$email','$esporte','$cep','$descricao','$clube','$qtde_atletas')";
  if(mysqli_query($conn, $sql)){
    mysqli_close($conn);
    header("Location:../login.php");
  }else{
    echo "Erro: ".$sql."<br>".mysqli_error($conn);
  }
  
?>