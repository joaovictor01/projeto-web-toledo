<!DOCTYPE html>

<html lang="pt-br">

<head>
  <title>Empresa XPTO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <p id="background"></p>
  <main class="container mx-auto mt-1 w-90">
    <header class="row">
      <!-- oculte a barra de acessibilidade -->
      <div id="barra_acessibilidade" class="col-12" hidden>
        <ul id="atalhos">
          <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
          <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
        </ul>
      </div>

      <!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->
      <div class="col-sm-3">
        <img src="images/logo.png" alt="Logotipo da empresa com dois triângulos sobrepostos.">
      </div>

      <div class="col-sm-9">
        <h1>Empresa XPTO</h1>
      </div>
    </header>

    <section>
      <div>
        <!-- oculte o header abaixo 
          consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
        <h2 id="menu" hidden>Menu</h2>
      </div>
      <div>
        <!-- torne o menu responsivo, conforme o exemplo
          consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
        <nav class="navbar navbar-expand-md navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Serviços</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>  

    <section class="">
      <div class="home-container">
        <img src="./images/charlesdeluvio-pjAH2Ax4uWk-unsplash.jpg" alt="text editor with code" style="width:100%; height: 320px">
        <div class="text-center centered">
          <p class="large-text">AJUDAMOS VOCÊ COM SOLUÇÕES DE TI</p>
          <p> Fale conosco!</p>
          <a type="button" class="btn btn-primary" href="contact.html">Contato</a>
        </div>
      </div>
      <br>
    </section>

    <footer class="row">
      <div class="col-12">
        <p>Copyright © 2021</p>
      </div>
    </footer>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="js/main.js"></script>
  <noscript>Atualize seu navegador</noscript>

</body>

</html>
