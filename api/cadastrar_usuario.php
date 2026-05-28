<?php
    // comunicar com o banco
    include "../config/config.php";

    // ver se estamos recebendo no servidor um metodo de requisição do tipo post
    if($_SERVER['REQUEST_METHOD']=="POST"){
        // receber as informações do formulario pelo metodo post
        $nome=$_POST['nome']; 
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $tipo=$_POST['tipo'];

        echo "Nome: ".$nome." | Email: ".$email." | Senha: ".$senha." | Tipo: ".$tipo;

        // tentar realizar o cadastro no banco
        try{
            $sql="INSERT INTO usuarios (nome, email, senha_hash, perfil) VALUES ('$nome', '$email', '$senha', '$tipo')";
            $insert=$pdo->prepare($sql);
            $insert->execute();

            echo "<br>Usuário cadastrado com sucesso!";
        } catch(PDOException $e){
            echo "Erro ao cadastrar".$e->getMessage();
        }

    }else{
        header("Location: ../home.php");
        exit();
    }

?>