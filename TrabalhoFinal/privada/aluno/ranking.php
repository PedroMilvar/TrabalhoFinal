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
  <title>Ranking</title>
  <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <script type="text/javascript" src="script.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script src="ranking.js"></script>

  <main class="container mt-5">
    <p>Bem vindo, <?php echo $_SESSION['usuario']; ?></p>

    <h1>Ranking de Avaliação de Cursos</h1>

    <table class="table mt-4" id="rankingTable">
      <thead>
        <tr>
          <th>Curso</th>
          <th>Avaliação Média</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id="adminCurso">Administração</td>
          <td id="adminAvaliacao">1.0</td>
        </tr>
        <tr>
          <td id="contabeisCurso">Ciências Contábeis</td>
          <td id="contabeisAvaliacao">3.5</td>
        </tr>
        <tr>
          <td id="programacaoCurso">Programação</td>
          <td id="programacaoAvaliacao">4.6</td>
        </tr>
        <tr>
          <td id="arquiteturaCurso">Arquitetura e Urbanismo</td>
          <td id="arquiteturaAvaliacao">4.3</td>
        </tr>
        <tr>
          <td id="gastronomiaCurso">Gastronomia</td>
          <td id="gastronomiaAvaliacao">4.6</td>
        </tr>
      </tbody>
    </table>

<div class="container mt-5">
    <h2>Avalie um Curso:</h2>
    <form id="avaliacaoForm">
      <div class="form-group">
        <label for="curso">Curso:</label>
        <select class="form-control" id="curso" required>
          <option value="Administração">Administração</option>
          <option value="Ciências Contábeis">Ciências Contábeis</option>
          <option value="Programação">Programação</option>
          <option value="Arquitetura e Urbanismo">Arquitetura e Urbanismo</option>
          <option value="Gastronomia">Gastronomia</option>
        </select>
      </div>
      <div class="form-group">
        <label for="avaliacao">Avaliação (1-5):</label>
        <input type="number" class="form-control" id="avaliacao" min="1" max="5" required>
      </div>
      <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
    </form>
</div>
  </main>

  <footer class="mt-5 bg-black text-white text-center">
    <p>© Copyright 2023. Todos os direitos reservados.</p>
  </footer>

</body>

</html>