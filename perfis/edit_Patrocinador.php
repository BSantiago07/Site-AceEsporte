<?php
  session_start();
  include_once "../cadastro/Banco.php";
  $nome_empresa = $_POST['nome_empresa'];
  $email = $_POST['email'];
  $cnpj = $_POST['cnpj'];
  $telefone = $_POST['telefone'];
  $esporte = $_POST['esporte'];
  $linkedin= $_POST['linkedin'];
  $qtde_atletas_patrocinados= $_POST['qtde_atletas_patrocinados'];

  $nome = $_SESSION['nome'];

  $sql = "UPDATE patrocinador SET nome_empresa='$nome_empresa',email='$email', cnpj='$cnpj', telefone='$telefone', esporte='$esporte', linkedin='$linkedin', qtde_atletas_patrocinados='$qtde_atletas_patrocinados' WHERE nome='$nome'";

  if(mysqli_query($conn, $sql)){
    mysqli_close($conn);
    header("Location: perfilPatrocinador.php");
  }else{
    echo "Erro: ".$sql."<br>".mysqli_error($conn);
  }

?>