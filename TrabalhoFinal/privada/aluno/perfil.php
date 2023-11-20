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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil - Aluno</title>
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


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>

  <main class="container mt-5">
    <p>Bem vindo, <?php echo $_SESSION['usuario']; ?></p>
    <h2 class="mb-5">Altere os seus dados de perfil</h2>

    <form action="../../../atualizarCadastroAluno.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome completo:</label>
        <input type="text" name="nome" id="nome" class="form-control" maxlength="50">
      </div>

      <div class="mb-3 form-group">
        <label for="data" class="form-label">Data de nascimento:</label>
        <input type="date" name="data" id="data" class="form-control">
      </div>

      <div class="mb-3 form-group">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" class="form-control">
      </div>

      <div class="mb-3 form-group">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" name="cpf" id="cpf" class="form-control">
      </div>

      <p class="mb-4" style="font-weight: bold; color: #333;">Endereço:</p>
      <div class="input-group mb-4">
        <span class="input-group-text">Estado</span>
        <select class="form-select" aria-label="Selecione um estado" name="estado">
          <option selected>Estado</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
          <option value="EX">Estrangeiro</option>
        </select>
        <span class="input-group-text">Cidade</span>
        <input type="text" name="cidade" id="cidade" class="form-control">
      </div>
<!-- 
    <script>
        // Carrega a lista de estados via AJAX
        $(document).ready(function () {
            $.ajax({
                url: 'estados.php',
                dataType: 'json',
                success: function (data) {
                    var selectEstado = $('#estado');
                    $.each(data, function (sigla, estado) {
                        selectEstado.append($('<option>').val(sigla).text(estado));
                    });
                },
                error: function () {
                    alert('Erro ao carregar estados.');
                }
            });
        });
    </script>
--> 
      <div class="form-group mb-3">
        <label for="imagemPerfilAluno" class="custom-label">Alterar foto de perfil:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="imagemPerfilAluno" name="imagem" accept="image/*">
          <label class="custom-file-label" for="imagemCapa">Escolher arquivo</label>
        </div>
      </div>

      <div class="mb-3 form-group">
        <label for="exampleFormControlTextarea1" class="form-label">Biografia:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="biografia"></textarea>
      </div>
      <input type="hidden" name="email" value="<?php echo $_SESSION['usuario']; ?>">

      <input type="submit" class="btn btn-primary" id="alterarDadosAluno" value="Alterar Dados">

    </form>
    <div class="container mt-5">
      <a href="/index.html">
        <button type="button" class="btn btn-danger" id="deletarContaAluno">Deletar conta</button>
      </a>
    </div>
  </main>

  <footer class="bg-black text-white text-center">
    <p>© Copyright 2023. Todos os direitos reservados.</p>
  </footer>

</body>

</html>