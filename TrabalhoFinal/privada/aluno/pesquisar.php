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
  <title>Pesquisar</title>
  <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../style.css" />
  <script type="text/javascript" src="script.js"></script>
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
    
    <h2 class="mb-4">Cursos Disponíveis</h2>

      <div class="input-group mb-3">
          <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar cursos">
          <div class="input-group-append">
              <span class="input-group-text" style="cursor: pointer;" onclick="limparCampoPesquisa()">
                  <i class="fas fa-times"></i>
              </span>
          </div>
          <div class="input-group-append">
              <button class="btn btn-primary" onclick="filtrarCursos()">Pesquisar</button>
          </div>
      </div>



    <div class="row">
      <!-- Curso 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/AMINISTRACAO_CAPA.png" class="card-img-top" alt="Curso 1">
          <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <h4 class="card-title">Administração</h4>
            <p class="card-text">Formar profissionais-cidadãos conscientes de suas responsabilidades e preparados para
              uma atuação profissional de excelência na área de administração, contribuindo firmemente para o
              desenvolvimento socioeconômico.</p>
            <p class="card-text"><b>Carga Horária:</b> 30 horas</p>
            <p class="card-text"><b>Turno:</b> Noturno</p>
            <p class="card-text"><b>Ementa:</b> Elaboração de estratégias de administração e planejamento de ações
              estratégicas para o crescimento econômico e social dos órgãos administrativos.</p>
          </div>
        </div>
      </div>

      <!-- Curso 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/banner-ciencias-contabeis-1024x512.png" class="card-img-top" alt="Curso 2">
          <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <h4 class="card-title">Ciências Contábeis</h4>
            <p class="card-text">o Curso de Ciências Contábeis busca proporcionar ao aluno sólidos conhecimentos em
              contabilidade em suas diversas especificações, tais como: Análise de Custos, Contabilidade Gerencial,
              Contabilidade Comercial, Contabilidade Industrial</p>
            <p class="card-text"><b>Carga Horária:</b> 40 horas</p>
            <p class="card-text"><b>Turno:</b> Noturno</p>
            <p class="card-text"><b>Ementa:</b> Durante a graduação, nós te guiamos por uma trilha geral, com todos os
              conhecimentos necessários para a carreira. Ao longo dessa trilha, você poderá escolher uma área de ênfase
              por meio de matérias e atividades complementares, se quiser.</p>

          </div>
        </div>
      </div>

      <!-- Curso 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/curso_o-que-e-python_2015.png" class="card-img-top" alt="Curso 3">
          <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <h4 class="card-title">Programação</h4>
            <p class="card-text">O objetivo deste curso é articular teoria e prática do raciocínio lógico por meio da
              Linguagem de Programação Python, desenvolvendo programas básicos em modo console, apresentando, de forma
              simples, a plataforma de desenvolvimento PyCharm.</p>
            <p class="card-text"><b>Carga Horária:</b> 20 horas</p>
            <p class="card-text"><b>Online</b></p>
            <p class="card-text"><b>Ementa:</b> O curso começa de uma forma bem didática, explicando o que é o
              raciocínio lógico e mostrando que a lógica está presente em nosso cotidiano em diversas situações. Em
              seguida, passamos para a etapa de download da ferramenta, instalação e configurações iniciais, para,
              então, abordar o conteúdo mais técnico.</p>
          </div>
        </div>
      </div>

      <!-- Curso 4 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/ARQUITETURA-URBANISMO-CAPA.png" class="card-img-top" alt="Curso 3">
          <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <h4 class="card-title">Arquitetura e urbanismo</h4>
            <p class="card-text">Arquitetura e Urbanismo é uma área do conhecimento que se dedica à concepção e criação
              de espaços habitáveis e funcionais, considerando aspectos estéticos, sociais, culturais, econômicos,
              ambientais e tecnológicos.</p>
            <p class="card-text"><b>Carga Horária:</b> 20 horas</p>
            <p class="card-text"><b>Turno:</b> Noturno</p>
            <p class="card-text"><b>Ementa:</b> História da arquitetura e suas influências, Princípios de design
              arquitetônico, Estilos arquitetônicos ao longo da históri, Elementos arquitetônicos: formas, linhas,
              espaços, texturas.</p>
          </div>
        </div>
      </div>

      <!-- Curso 5 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../../img/banner-gastronomia-1-1024x512.png" class="card-img-top" alt="Curso 3">
          <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <h4 class="card-title">Gastronomia</h4>
            <p class="card-text">O Curso de Gastronomia tem como finalidade proporcionar ao aluno importantes
              conhecimentos em suas diversas especificações, tais como: Tecnologia de Alimentos, Higiene e Manipulação
              de Alimentos, Cozinha Brasileira.</p>
            <p class="card-text"><b>Carga Horária:</b> 20 horas</p>
            <p class="card-text"><b>Turno:</b> Noturno</p>
            <p class="card-text"><b>Ementa:</b> Todo o conteúdo está em formato de vídeo HD para que siga exatamente o
              que os Chefs estão a fazer no momento. Vídeos curtos e animados, para que consiga saber algo de novo,
              mesmo entre turnos. Dos princípios básicos de segurança alimentar, a técnicas avançadas de cozinhas do
              mundo</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-black text-white text-center">
    <p>© Copyright 2023. Todos os direitos reservados.</p>
  </footer>

</body>

</html>