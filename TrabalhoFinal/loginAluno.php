<?php

session_start(); 

function checkLogin($pdo, $email, $senha)
{
  $sql = <<<SQL
    SELECT senha
    FROM ALUNO
    WHERE email = ?
    SQL;

  try {
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $row = $stmt->fetch();
    if (!$row) return false; 

    return password_verify($senha, $row['senha']);
  } 
  catch (Exception $e) {
 
    exit('Falha inesperada: ' . $e->getMessage());
  }
}

require "database.php";
$pdo = mysqlConnect();

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

if (checkLogin($pdo, $email, $senha)) {
 
  $_SESSION['usuario'] = $email;

  header("location: /privada/aluno/index.php");
} else {
  
  header("location: /privada/login/credenciaisAluno.html");
}
