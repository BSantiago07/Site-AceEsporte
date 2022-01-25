<?php
  session_start();
  include_once "../cadastro/Banco.php";

  $nome = $_SESSION['nome'];

  $sql = "DELETE FROM usuario WHERE nome='$nome'";

  if(mysqli_query($conn, $sql)){
    mysqli_close($conn);
    header("Location: ../index.html");
  }else{
    echo "Erro: ".$sql."<br>".mysqli_error($conn);
  }

?>