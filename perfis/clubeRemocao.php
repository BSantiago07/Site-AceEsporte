<?php
  session_start();
  include_once "../cadastro/Banco.php";

  $nome = $_SESSION['nome'];
  $qry = "DELETE FROM painel_noticia WHERE nome_clube='$nome'";

  mysqli_query($conn, $qry);

  $sql = "DELETE FROM clube WHERE nome='$nome'";

  if(mysqli_query($conn, $sql)){
    mysqli_close($conn);
    header("Location: ../index.html");
  }else{
    echo "Erro: ".$sql."<br>".mysqli_error($conn);
  }

?>