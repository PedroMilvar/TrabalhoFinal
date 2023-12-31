<?php
session_start();

// Verifica se a variável de sessão 'usuario' está definida
if (!isset($_SESSION['usuario'])) {
    header("location: /privada/login/credenciaisAluno.html");
    die("Acesso negado, voce precisa estar logado");
    exit();
}

// Se o usuário está autenticado, você pode acessar a variável de sessão 'usuario'
$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Favoritos</title>
  <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../style.css" />
</head>

<body>
  
  <header>
    <div>
      <a href="/index.html">
        <img src="/img/logo.png" alt="Logo" height="60" width="250">
      </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light cor_menu">
      <div class="container">
        <a class="navbar-brand" href="index.php">Página Inicial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="favoritos.php">Favoritos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pesquisar.php">Pesquisar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ranking.php">Ranking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <main class="container mt-5">
      <p>Bem vindo, <?php echo $_SESSION['usuario']; ?></p>
    <h2 class="mb-5">Meus Favoritos</h2>

    <div class="column">
      <!-- Curso 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/curso_o-que-e-python_2015.png" class="card-img-top" alt="Curso 1">
          <div class="card-body">
            <h4 class="card-title">Programação</h4>
            <p class="card-text">O objetivo deste curso é articular teoria e prática do raciocínio lógico
              por meio da Linguagem de Programação Python, desenvolvendo programas básicos em modo
              console, apresentando, de forma simples, a plataforma de desenvolvimento PyCharm.</p>
            <a href="#" class="btn btn-danger"><i class="fas fa-heart"></i> Favorito</a>
          </div>
        </div>
      </div>

      <!-- Curso 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/banner-gastronomia-1-1024x512.png" class="card-img-top" alt="Curso 2">
          <div class="card-body">
            <h4 class="card-title">Gastronomia</h4>
            <p class="card-text">O Curso de Gastronomia tem como finalidade proporcionar ao aluno
              importantes conhecimentos em suas diversas especificações, tais como: Tecnologia de
              Alimentos, Higiene e Manipulação de Alimentos, Cozinha Brasileira.</p>
            <a href="#" class="btn btn-danger"><i class="fas fa-heart"></i> Favorito</a>
          </div>
        </div>
      </div>

      <!-- Curso 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/AMINISTRACAO_CAPA.png" class="card-img-top" alt="Curso 3">
          <div class="card-body">
            <h4 class="card-title">Administração</h4>
            <p class="card-text">Formar profissionais-cidadãos conscientes de suas responsabilidades e
              preparados para uma atuação profissional de excelência na área de administração,
              contribuindo firmemente para o desenvolvimento socioeconômico.</p>
            <a href="#" class="btn btn-danger"><i class="fas fa-heart"></i> Favorito</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Ícone de coração (Font Awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

  <footer class="bg-black text-white text-center">
    <p>© Copyright 2023. Todos os direitos reservados.</p>
  </footer>

</body>

</html>