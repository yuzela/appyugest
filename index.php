<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="assets/css/style.css?v=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/logo.png">
  <title>Yuzela Mídia | Transformando Ideias em Soluções</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts - Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Estilo customizado -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="font-family: 'Inter', sans-serif;">
    

<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="assets/img/logo.png" alt="Logo" width="32" class="me-2"> 
      <strong>Yuzela Mídia</strong>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Botão de Idioma (Dropdown) -->
    <div class="d-flex ms-auto me-3">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe me-1"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
            <li><a class="dropdown-item" href="#" onclick="changeLang('pt'); return false;">Português 🇧🇷</a></li>
            <li><a class="dropdown-item" href="#" onclick="changeLang('en'); return false;">English 🇬🇧</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- Menu Principal -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#sobre" data-pt="Sobre Nós" data-en="About">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="#servicos" data-pt="Serviços" data-en="Services">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="#projetos" data-pt="Portfólio" data-en="Portfolio">Portfólio</a></li>
        <li class="nav-item"><a class="nav-link" href="#presenca" data-pt="Nossa Presença" data-en="Our Presence">África</a></li>
        <li class="nav-item"><a class="nav-link" href="#depoimentos" data-pt="Clientes" data-en="Clients">Clientes</a></li>
        <li class="nav-item"><a class="nav-link" href="#contato" data-pt="Contato" data-en="Contact">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Hero Section -->
<header class="bg-gradient text-white text-center py-5 mt-5" style="background: linear-gradient(135deg, #1e3c72, #2a5298);">
  <div class="container">
  <h1 class="display-4 fw-bold" data-pt="Transformando Ideias em Soluções Digitais" data-en="Turning Ideas into Digital Solutions">
  Transformando Ideias em Soluções Digitais
</h1>
<p class="lead mt-3" data-pt="Desenvolvemos softwares inteligentes e escaláveis para impulsionar seu negócio." data-en="We develop smart and scalable software to boost your business.">
  Desenvolvemos softwares inteligentes e escaláveis para impulsionar seu negócio.
</p>
<a href="#contato" class="btn btn-light btn-lg mt-4 shadow" data-pt="Fale Conosco" data-en="Contact Us">
  Fale Conosco
</a>
  </div>
</header>

<!-- Sobre -->
<section id="sobre" class="py-5" data-aos="fade-up">
  <div class="container text-center">
    <h2>Sobre Nós</h2>
    <p class="mt-3">Somos uma empresa de software dedicada a criar soluções personalizadas, com foco em inovação, qualidade e resultados reais para nossos clientes.</p>
  </div>
</section>
<body style="font-family: 'Inter', sans-serif;">
<!-- Serviços -->
<!-- Serviços -->
<section id="servicos" class="bg-light py-5">
  <div class="container text-center">
    <h2 class="mb-5" data-aos="fade-up">Nossos Serviços</h2>
    <div class="row g-4 justify-content-center">
  <div class="col-12 col-md-4" data-aos="zoom-in">
    <div class="card card-servico h-100 p-4 shadow-sm rounded-4 border-0">
      <i class="fas fa-code fa-3x mb-3 text-primary"></i>
      <h5 data-pt="Desenvolvimento Web" data-en="Web Development">Desenvolvimento Web</h5>
      <p data-pt="Criação de sites, sistemas web e plataformas sob medida com as melhores tecnologias do mercado." data-en="Building websites, web systems and custom platforms with the best technologies.">
        Criação de sites, sistemas web e plataformas sob medida...
      </p>
    </div>
  </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="card card-servico h-100 p-4 shadow-sm rounded-4 border-0">
          <i class="fas fa-mobile-alt fa-3x mb-3"></i>
          <h5>Aplicativos Mobile</h5>
          <p>Desenvolvimento de apps Android e iOS que conectam você ao seu cliente de forma intuitiva e eficaz.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card card-servico h-100 p-4 shadow-sm rounded-4 border-0">
          <i class="fas fa-chart-line fa-3x mb-3"></i>
          <h5>Estratégia Digital</h5>
          <p>Consultoria em automação, marketing digital e transformação tecnológica voltada para resultados.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portifólio -->
<section id="portifolio" class="py-5" data-aos="fade-up">
  <div class="container text-center">
    <h2 class="mb-5">Portfólio de Projetos</h2>
    <div class="row g-4 justify-content-center">
      <!-- Projeto 1 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
         
          <div class="card-body">
            <h5 class="card-title">Afrikgest Sistema Gestão Empresarial & Lojas</h5>
            <p class="card-text">Plataforma completa de gestão financeira, RH e estoque para PMEs.</p>
            <a href="#" class="btn btn-primary btn-sm">Ver Detalhes</a>
          </div>
        </div>
      </div>

      <!-- Projeto 2 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
          
          <div class="card-body">
            <h5 class="card-title">Yugest e Afrikgest Sistema de Gestão Escolar</h5>
            <p class="card-text">Solução mobile e desktop para gestão completo de colégio, instituto, universidades publica e privada.</p>
            <a href="#" class="btn btn-primary btn-sm">Ver Detalhes</a>
          </div>
        </div>
      </div>

      <!-- Projeto 3 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
          
          <div class="card-body">
            <h5 class="card-title">Yuzmaster Site Institucional Corporativo</h5>
            <p class="card-text">Website corporativo com SEO otimizado, chatbot e newsletter integrado.</p>
            <a href="#" class="btn btn-primary btn-sm">Ver Detalhes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Depoimentos -->
<section id="depoimentos" class="py-5" data-aos="fade-up">
  <div class="container text-center">
    <h2 class="mb-5">O Que Nossos Clientes Dizem</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="card border-0 shadow p-4">
          <p>"Profissionais incríveis! Entregaram tudo no prazo e com muita qualidade."</p>
          <strong>- Carlos Mendes, CEO da TechCorp</strong>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow p-4">
          <p>"Equipe competente e muito atenciosa. Fizeram toda diferença na nossa operação."</p>
          <strong>- Ana Clara, Marketing Agência X</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contato -->
<section id="contato" class="py-5" data-aos="fade-up">
  <div class="container">
    <h2 class="text-center mb-4">Vamos Conversar?</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="send_email.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control rounded-pill" name="nome" required placeholder="Seu nome">
          </div>
          <div class="mb-3">
          <label for="nome" class="form-label" data-pt="Nome" data-en="Name">Nome</label>
<input type="text" class="form-control rounded-pill" name="nome" required placeholder="Seu nome" data-pt="Seu nome" data-en="Your name">

<label for="email" class="form-label" data-pt="Email" data-en="E-mail">Email</label>
<input type="email" class="form-control rounded-pill" name="email" required placeholder="seu@email.com" data-pt="seu@email.com" data-en="your@email.com">
<button type="submit" class="btn btn-primary w-100 rounded-pill btn-lg shadow" data-pt="Enviar Mensagem" data-en="Send Message">Enviar Mensagem</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Nossa Presença na África -->
<section id="presenca" class="bg-light py-5">
  <div class="container text-center" data-aos="fade-up">
    <h2 class="mb-5">Nossa Presença na África</h2>
    <p class="lead mb-4">A Yuzela Mídia está presente nos principais países africanos, oferecendo soluções digitais sob medida.</p>

    <div class="row g-4 justify-content-center mt-4">
      <div class="col-md-4" data-aos="fade-right">
        <div class="card shadow-sm p-4 border-0 rounded-4">
          <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>
          <h5>Angola</h5>
          <p>Presença sólida em Luanda, servindo empresas locais e multinacionais com softwares customizados.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-left">
        <div class="card shadow-sm p-4 border-0 rounded-4">
          <i class="fas fa-building fa-2x text-primary mb-3"></i>
          <h5>Zâmbia</h5>
          <p>Operamos em Lusaka e arredores, integrando tecnologia local com a demanda digital global.</p>
        </div>
      </div>
      <div class="col-md-8 mt-4" data-aos="zoom-in">
        <div class="card bg-white shadow-lg border-0 rounded-4 p-4">
          <h5>Nossa Visão Pan-Africana</h5>
          <p class="mt-3">Estamos construindo um futuro digital para toda a África. Com escritórios em Angola e Zâmbia, e parceiros em diversos outros países, queremos levar inovação, automação e transformação digital para todos os cantos do continente.</p>
          <p><strong>Missão:</strong> Conectar empresas africanas com as melhores práticas tecnológicas globais.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-presenca shadow-sm p-4 border-0 rounded-4">
</section>

<!-- Rodapé -->
<div class="card card-presenca shadow-sm p-4 border-0 rounded-4">
<footer class="bg-dark text-white text-center py-4">
  <div class="container">
  <p class="mb-2" data-pt="&copy; 2025 Yuzela Mídia. Todos os direitos reservados." data-en="&copy; 2025 Yuzela Midia. All rights reserved.">
  &copy; 2025 Yuzela Mídia. Todos os direitos reservados.
</p>
    <div>
      <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
      <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
      <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-lg"></i></a>
      <a href="#" class="text-white"><i class="fab fa-whatsapp fa-lg"></i></a>
    </div>
  </div>
</footer>

<!-- Botão Fixo do WhatsApp -->
<a href="https://wa.me/244948066499?text=Olá%2C%20vim%20do%20site%20da%20Yuzela%20Mídia!" 
   target="_blank" 
   class="whatsapp-button" 
   title="Fale conosco no WhatsApp">
  <i class="fab fa-whatsapp fa-2x"></i>
</a>

<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<!-- Script Customizado -->
<script src="assets/js/script.js"></script>
</body>
</html>