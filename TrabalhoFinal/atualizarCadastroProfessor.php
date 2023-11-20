<?php
session_start();
require "database.php";
$pdo = mysqlConnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_SESSION['usuario'];
    $nome = $_POST["nome"] ?? "";
    $dataNascimento = $_POST["data-nascimento"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
    $cpf = $_POST["cpf"] ?? "";
    $estado = $_POST["estado"] ?? "";
    $cidade = $_POST["cidade"] ?? "";
    $biografia = $_POST["biografia"] ?? "";

    
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    } else {
        
        $imagem = null;
    }

    
    $sql = <<<SQL
            UPDATE PROFESSOR SET nome=?, data_nascimento=?, telefone=?, cpf=?, estado=?, cidade=?, imagem=?, biografia=? WHERE email=?
            SQL;
    
    try {
  
        $stmt = $pdo->prepare($sql);
        if (!$stmt->execute([$nome, $dataNascimento, $telefone, $cpf, $estado, $cidade, $imagem, $biografia, $usuario])) {
            throw new Exception('Falha na atualização do professor');
        }

       
        header("location: /privada/professor/index.html");
        exit();
    } catch (Exception $e) {
        exit('Falha ao atualizar os dados: ' . $e->getMessage());
    }
}
?>
