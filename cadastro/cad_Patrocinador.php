<?php
  session_start();
  include_once "Banco.php";
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $nome_empresa = $_POST['nome_empresa'];
  $email = $_POST['email'];
  $cnpj = $_POST['cnpj'];
  $telefone = $_POST['telefone'];
  $esporte = $_POST['esporte'];
  $linkedin= $_POST['linkedin'];
  $qtde_atletas_patrocinados= $_POST['qtde_atletas_patrocinados'];
 
 
    $sql = "INSERT INTO patrocinador(nome,senha,nome_empresa,email,cnpj,telefone,esporte,linkedin,qtde_atletas_patrocinados) VALUES('$nome','$senha','$nome_empresa','$email','$cnpj','$telefone','$esporte','$linkedin','$qtde_atletas_patrocinados')";
  
    if(mysqli_query($conn, $sql)){
      mysqli_close($conn);
      header("Location:../login.php");
    }else{
      echo "Erro: ".$sql."<br>".mysqli_error($conn);
    }
  
 
?>