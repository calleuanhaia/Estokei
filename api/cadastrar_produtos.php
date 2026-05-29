<?php
    include "../config/config.php";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $sku=$_POST['sku'];
        $nome=$_POST['nome'];
        $descricao=$_POST['descricao'];
        $quantidade_atual=$_POST['quantidade_atual'];
        $estoque_minimo=$_POST['estoque_minimo'];
        $preco_custo=$_POST['preco_custo'];
        $preco_venda=$_POST['preco_venda'];
        $localizacao=$_POST['localizacao'];

        try{
            $sql="INSERT INTO produtos (sku, nome, descricao, quantidade_atual, estoque_minimo, preco_custo, preco_venda, localizacao) VALUES ('$sku','$nome','$descricao',$quantidade_atual,$estoque_minimo,$preco_custo,$preco_venda,'$localizacao')";
            $insert=$pdo->prepare($sql);
            $insert->execute();

            echo "<br>Produto cadastrado com sucesso!";

            header("Location: ../index.php?page=lista_produtos.php");
            exit();
        } catch(PDOException $e){
            echo "Erro ao cadastrar".$e->getMessage();
        }

    }else{
        header("Location: ../index.php");
        exit();
    }
?>