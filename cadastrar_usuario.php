<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];

    try {
        $stmt = $conexao->prepare("INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) 
                                   VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome_usuario);
        $stmt->bindParam(':email', $email_usuario);
        $stmt->bindParam(':senha', $senha_usuario);
        $stmt->execute();

        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar usuário: " . $e->getMessage();
    }

    header("Location: index.php");
}