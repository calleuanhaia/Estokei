<?php
    include "../config/config.php";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email=$_POST['email'];
        $password=$_POST['password'];

        try{
            $selecionar="SELECT nome FROM usuarios WHERE email='$email' AND senha_hash='$password'";
            $select=$pdo->prepare($selecionar);
            $select->execute();

            $existeRegistro = (bool) $select->fetchColumn();

            if($existeRegistro){
                echo "Este registro existe";
            } else {
                echo "Este registro não existe";
            }
        }catch (PDOException $e){
            echo "Erro ao logar".$e->getMessage();
        }
    }else{
        header("Location: ../index.php");
        exit();
    }
?>