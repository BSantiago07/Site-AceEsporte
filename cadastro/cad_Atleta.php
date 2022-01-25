<?php
  session_start();
  include_once "Banco.php";
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $nome_completo = $_POST['nome_completo'];
  $email = $_POST['email'];
  $data_nascimento = $_POST['data_nascimento'];
  $cpf = $_POST['cpf'];
  $esporte = $_POST['esporte'];
  $biografia= $_POST['biografia'];
  $clube= $_POST['clube'];
  $qtde_patrocinador= $_POST['qtde_patrocinador'];
  $telefone= $_POST['telefone'];
 
    $sql = "INSERT INTO atleta(nome,senha,nome_completo,email,data_nascimento,cpf,esporte,biografia,clube,qtde_patrocinador,telefone) VALUES('$nome','$senha','$nome_completo','$email','$data_nascimento','$cpf','$esporte','$biografia','$clube','$qtde_patrocinador','$telefone')";
  
    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("Location:../login.php");
    }else{
      echo "Erro: ".$sql."<br>".mysqli_error($conn);
    }
  
?>