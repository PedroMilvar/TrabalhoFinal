<?php

function checkLogin($pdo, $email, $senha)
{
  $sql = <<<SQL
    SELECT senha
    FROM PROFESSOR
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
  header("location: /privada/professor/index.html");
  }
 
else 
  header("location: /privada/login/credenciaisProfessor.html");


 
 


