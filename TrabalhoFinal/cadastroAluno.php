<?php

require "database.php";
$pdo = mysqlConnect();

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

$hashsenha = password_hash($senha, PASSWORD_DEFAULT);

try {

  $sql = <<<SQL
  INSERT INTO ALUNO (email, senha)
  VALUES (?, ?)
  SQL;

  $stmt = $pdo->prepare($sql);
  $stmt->execute([$email, $hashsenha]);

  header("location: /privada/login/credenciaisAluno.html");
  exit();
} 
catch (Exception $e) {  
  //error_log($e->getMessage(), 3, 'log.php');
  if ($e->errorInfo[1] === 1062)
    exit('Dados duplicados: ' . $e->getMessage());
  else
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}
