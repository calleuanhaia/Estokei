<?php
    include "../config/config.php";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $nome=$_POST['nome'];
        $contato=$_POST['contato'];

        echo "Nome: ".$nome." | Contato: ".$contato;

        try{
            $sql="INSERT INTO fornecedores (nome, contato) VALUES ('$nome', '$contato')";
            $insert=$pdo->prepare($sql);
            $insert->execute();

            echo "<br>Fornecedor cadastrado com sucesso!";

            header("Location: ../index.php?page=lista_fornecedores.php");
            exit();
        } catch(PDOException $e){
            echo "Erro ao cadastrar".$e->getMessage();
        }
    }else{
        header("Location: ../index.php");
        exit();
    }
?>