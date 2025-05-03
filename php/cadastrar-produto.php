<?php

    include("conexao.php");

    $nomeDoProduto = $_POST['nomeProduto'] ?? null;
    $marca = $_POST['marca'] ?? null;
    $preco = $_POST['preco'] ?? null;
    $descricao = $_POST['descricao'] ?? null;

    if (!$nomeDoProduto || !$marca || !$preco || !$descricao) {
        echo "Preencha todos os campos.";
        exit;
}
    try{

        $pdo->beginTransaction();

        $varProduto = $pdo->prepare("INSERT INTO produto (nome, marca, preco, descricao) VALUES (:nome, :marca, :preco, :descricao)");
        $varProduto->bindParam(':nome', $nomeDoProduto);
        $varProduto->bindParam(':marca', $marca);
        $varProduto->bindParam(':preco', $preco);
        $varProduto->bindParam(':descricao', $descricao);
        $varProduto->execute();

        $pdo->commit();

        echo "Cadastro realizado com sucesso!";

    } catch (Exception $e) {
        $pdo->rollBack();
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
?>