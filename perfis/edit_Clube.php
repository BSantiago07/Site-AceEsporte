<?php
  session_start();
  include_once "../cadastro/Banco.php";
  $nome_clube = $_POST['nome_clube'];
  $email = $_POST['email'];
  $esporte = $_POST['esporte'];
  $cep = $_POST['cep'];
  $descricao = $_POST['descricao'];
  $clube = $_POST['nome_clube'];
  $qtde_atletas = $_POST['qtde_atletas'];

  $nome = $_SESSION['nome'];

  $sql = "UPDATE clube SET nome_clube='$nome_clube',email='$email', esporte='$esporte', cep='$cep', descricao='$descricao', clube='$clube', qtde_atletas='$qtde_atletas' WHERE nome='$nome'";

  if(mysqli_query($conn, $sql)){
    mysqli_close($conn);
    header("Location: perfilClube.php");
  }else{
    echo "Erro: ".$sql."<br>".mysqli_error($conn);
  }

?>