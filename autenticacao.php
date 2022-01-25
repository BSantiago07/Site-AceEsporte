<?php
    session_start();
    include_once "./cadastro/Banco.php";

    if(isset($_POST['nomeUsuario']) && isset($_POST['senha'])){
        $nome = $_POST['nomeUsuario'];
        $senha = $_POST['senha'];
        $tipoUsuario = $_POST['Usuario'];

        if($tipoUsuario == 'atleta'){
            $qry = "SELECT * FROM atleta  WHERE nome='$nome' AND senha='$senha'"; 
        }else if($tipoUsuario == 'amador'){
            $qry = "SELECT * FROM usuario  WHERE nome='$nome' AND senha='$senha'";
        }else if($tipoUsuario == 'patrocinador'){
            $qry = "SELECT * FROM patrocinador  WHERE nome='$nome' AND senha='$senha'";
        }else if($tipoUsuario == 'clube'){
            $qry = "SELECT * FROM clube  WHERE nome='$nome' AND senha='$senha'";
        }        

        $res = mysqli_query($conn, $qry);

        if(mysqli_num_rows($res)>0){
            if($row = mysqli_fetch_assoc($res)){
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['senha'] = $row['senha'];
                $_SESSION['tipoUsuario'] = $tipoUsuario;
            }
            if($tipoUsuario == 'atleta'){
                header("Location: ./perfis/perfilAtleta.php");
            }else if($tipoUsuario == 'amador'){
                header("Location: ./perfis/perfilAmador.php");
            }else if($tipoUsuario == 'patrocinador'){
                header("Location: ./perfis/perfilPatrocinador.php");
            }else if($tipoUsuario == 'clube'){
                header("Location: ./perfis/perfilClube.php");
            }
        }else{
            header("Location: login.php");
        }
        mysqli_close($conn);
    }
   
   

?>