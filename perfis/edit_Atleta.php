<?php
  session_start();
  include_once "../cadastro/Banco.php";
  $nome_completo = $_POST['nome_completo'];
  $email = $_POST['email'];
  $data_nascimento = $_POST['data_nascimento'];
  $cpf = $_POST['cpf'];
  $esporte = $_POST['esporte'];
  $biografia= $_POST['biografia'];
  $clube= $_POST['clube'];
  $qtde_patrocinador= $_POST['qtde_patrocinador'];
  $telefone= $_POST['telefone'];

  $nome = $_SESSION['nome'];

  $sql = "UPDATE atleta SET nome_completo='$nome_completo',email='$email',data_nascimento='$data_nascimento',cpf='$cpf',esporte='$esporte',biografia='$biografia', clube='$clube', qtde_patrocinador='$qtde_patrocinador', telefone='$telefone' WHERE nome='$nome'";

  if(mysqli_query($conn, $sql)){
    mysqli_close($conn);
    header("Location: perfilAtleta.php");
  }else{
    echo "Erro: ".$sql."<br>".mysqli_error($conn);
  }

?>