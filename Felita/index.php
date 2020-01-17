<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/css/position.css" rel="stylesheet" />

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

  <?php wp_head(); ?>
  </head>
  <body>
    
    <!-- Primeiro menu -->
    <nav class="emp navbar-light navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        <div class="col-md-2 m-lg-auto emp">
          <li><img src="<?php bloginfo('template_url'); ?>/img/logo_felita.png" width="100%" height="80" class="d-inline-block align-top" alt=""></li>
        </div>

          <div class="col-md-2 m-lg-auto configdiv"  style="border: none;">
            <li class="nav-item">
              <p style="color: #495678; font-weight: bold;"><img src="<?php bloginfo('template_url'); ?>/img/telefone_nada.png" width="20%" height="20" class="d-inline-block align-bottom" style="margin: 5px;" alt="">TELEFONE</p>
            </li>
            <h6 style="color: #ccc; font-weight: bold; font-size: 10px;text-align: center;">11 2222-2222</h6>
          </div>

          <div class="linha-vertical"></div>

          <div class="col-md-2 m-lg-auto">
            <li class="nav-item">
              <p style="color: #495678; font-weight: bold; text-align: center;"><img src="<?php bloginfo('template_url'); ?>/img/relogio.jpg" width="10%" height="15" class="d-inline-block align-bottom" style="margin: 5px;" alt="">horário de ATENDIMENTO</p>
            </li> 
          </div>

          <div class="linha-vertical"></div>

          <div class="col-md-2 m-lg-auto">
            <li class="nav-item">
            <p style="color: #495678; font-weight: bold; text-align: center;"><img src="<?php bloginfo('template_url'); ?>/img/email.png" width="20%" height="20" class="d-inline-block align-bottom" style="margin: 5px;" alt="">EMAIL</p>
            </li>
            <h6 style="color: #ccc; font-weight: bold; font-size: 10px;text-align: center;">emailexample@example.com.br</h6>
          </div>

          <div class="col-md-3 m-lg-auto">
            <li class="nav-item">
              <p class="teste p-2" style="background: #495678; text-align: center;"><img src="<?php bloginfo('template_url'); ?>/img/whatsapp_white.png" width="12%" height="20" class="d-inline-block align-top" style="margin: 5px;" alt="">11 99999 - 9999</p>
            </li>
          </div>
        </ul>
      </div>
    </nav>

    <!-- Segundo menu -->
    <nav class="navbar navbar-expand-lg navbar-light color">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-md-8 m-lg-auto" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item col-md-auto mude">
            <a class="nav-link mude" href="#" style="color: #fff; margin: 0; text-align: center;">HOME</a>
          </li>
          <li class="nav-item col-md-8">
            <a class="nav-link mude" href="#" style="color: #fff; margin: 0; text-align: center;">SOBRE</a>
          </li>
          <li class="nav-item col-md-8">
            <a class="nav-link mude" href="#" style="color: #fff; margin: 0; text-align: center;">PRODUTOS</a>
          </li>
          <li class="nav-item col-md-8">
            <a class="nav-link mude" href="#" style="color: #fff; margin: 0; text-align: center;">CONTATOS</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Carousel do site -->
    <div id="carouselExampleIndicators" class="carousel slide tamanho" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/blue2.png" class="d-inline-block align-top" width= "30%" height="600px" style="float: right; z-index: -1;" alt="Primeiro slide">
          <div class="col-md-3" style="color: #fff; top: 30%; left: 10%; height: 260px; position: absolute; font-weight: bold;">
            <h5>LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND</h5>
            <p>
              Lorem Ipsum is simply dummy text of the
              printing and typesetting industry. Lorem
              Ipsum has been the industry's standard
            </p>
            <div class="col-md-6">
              <button type="button" class="btn btn-outline-light btn-lg rounded-0 pula" style="float: left; margin-top: 10%;">Saiba Mais</button>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/blue2.png" class="d-inline-block align-top" width= "60%" height="600px" style="margin: 5px;" alt="Segundo slide">
          <div class="col-md-3" style="color: #fff; top: 30%; left: 10%; height: 260px; position: absolute; font-weight: bold;">
            <h5>LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND</h5>
            <p>
              Lorem Ipsum is simply dummy text of the
              printing and typesetting industry. Lorem
              Ipsum has been the industry's standard
            </p>
            <div class="col-md-6">
              <button type="button" class="btn btn-outline-light btn-lg rounded-0 pula" style="float: left; margin-top: 10%;">Saiba Mais</button>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/blue2.png" class="d-inline-block align-top" width= "60%" height="600px" style="margin: 5px;" alt="Terceiro slide">
          <div class="col-md-3" style="color: #fff; top: 30%; left: 10%; height: 260px; position: absolute; font-weight: bold;">
            <h5>LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND</h5>
            <p>
              Lorem Ipsum is simply dummy text of the
              printing and typesetting industry. Lorem
              Ipsum has been the industry's standard
            </p>
            <div class="col-md-6">
              <button type="button" class="btn btn-outline-light btn-lg rounded-0 pula" style="float: left; margin-top: 10%;">Saiba Mais</button>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    <!-- Fim do carousel -->

    <!-- Qualidade de produtos e costura -->
    <div class="container col-md-8 espaco">
          <h5 class="change">QUALIDADE DE PRODUTOS E COSTURA</h5>
          <h2 class="bold-change">Qualidade, preço baixo e confiança</h2>
          <h6  class="change">Diversas cores e modelos</h6>
    </div>
    
    <div class="container col-md-auto" style="margin-left: 10%; border: none;">

      <div class="card-deck emp2" style="border: none;">
        <div class="card col-md-4 pula" style="border: none;">
        <div class="circulo">
          <img src="<?php bloginfo('template_url'); ?>/img/t-shirt.png" width="50%" class="d-inline-block align-bottom invert" style="margin: 25%;" alt="camiseta" />
        </div>
          <div class="card-body">
          <h5 class="card-title change">QUANTIDADE MÍNIMA DE PEÇAS</h5>
          <p class="card-text change">
            Lorem Ipsum is simply
            dummy text of the printing 
            and typesetting industry. 
            Lorem Ipsum has been the
          </p>
          </div>
        </div>
        <div class="card col-md-4 pula" style="border: none;">
        <div class="circulo">          
          <img src="<?php bloginfo('template_url'); ?>/img/selo.png" width="50%" class="d-inline-block align-bottom invert" style="margin: 25%;" alt="selo" />
       </div>
          <div class="card-body">
            <h5 class="card-title change">QUALIDADE DE PRODUTOS</h5>
            <p class="card-text change">
              Lorem Ipsum is simply
              dummy text of the printing 
              and typesetting industry. 
              Lorem Ipsum has been the
            </p>
          </div>
        </div>
        <div class="card col-md-4 pula" style="border: none;">
        <div class="circulo">
          <img src="<?php bloginfo('template_url'); ?>/img/atendente.png" width="50%" class="d-inline-block align-bottom invert" style="margin: 25%;" alt="atendente" />
        </div>
          <div class="card-body">
            <h5 class="card-title change">ATENDIMENTO CUSTOMIZADO</h5>
            <p class="card-text change">
              Lorem Ipsum is simply
              dummy text of the printing 
              and typesetting industry. 
              Lorem Ipsum has been the
            </p>
          </div>
        </div>
      </div>
  
      <div class="card-deck" style="border: none; margin-left: 17%; margin-top: -6%; margin-bottom: 10%; padding-right: 15%;">
        <div class="card col-md-5 pula" style="border: none;">
        <div class="circulo">
          <img src="<?php bloginfo('template_url'); ?>/img/preco.png" width="50%" class="d-inline-block align-bottom invert" style="margin: 25%;" alt="preço" />
        </div>
          <div class="card-body">
          <h5 class="card-title change">PREÇO BAIXO</h5>
          <p class="card-text change">
            Lorem Ipsum is simply
            dummy text of the printing 
            and typesetting industry. 
            Lorem Ipsum has been the
          </p>
          </div>
        </div>
        <div class="card col-md-5 pula" style="border: none;">
        <div class="circulo">
          <img src="<?php bloginfo('template_url'); ?>/img/paleta-cores.png" width="50%" class="d-inline-block align-bottom invert" style="margin: 25%;" alt="paleta de cores" />
        </div>
          <div class="card-body">
            <h5 class="card-title change">PALETA DE CORES</h5>
            <p class="card-text change">
              Lorem Ipsum is simply
              dummy text of the printing 
              and typesetting industry. 
              Lorem Ipsum has been the
            </p>
          </div>
        </div>
      </div>
    
    </div>
    
    </div>

<div class="divFundo">
    <img src="<?php bloginfo('template_url'); ?>/img/Prancheta.png" class="d-inline-flex " width= "100%" alt="Fundo"/>
  </div>

  <!-- Camiseta 1 -->
<div class="container go1 white">

  <div class="row">

    <div class="col-sm-8 col-1 col-sm-6 col-xs-12 sem pula" style="vertical-align: top; border: solid 1px #000; border: none; background: none;">

    <div class="card-body textMove1">
    <h5 class="card-title text-bold">CAMISETAS PÓLO</h5>
              <h6 class="card-title">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.</h6>
              <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the 
                industry's standard dummy text ever since the 1500s,
                scrambled it to make a type specimen book. It has
                survived not only fve centuries, but also the leap into 
                electronic typesetting, remaining essentially
              </p> 
    </div>
    <div class="col-sm-8 col-2" >
      <img class="card-img-left img-responsive" src="<?php bloginfo('template_url'); ?>/img/polos.png" alt="Polos" style="width: 100%;" />
    </div>

    </div>

  </div>

</div>

<!-- Camiseta 2 -->
<div class="container go2 white">

  <div class="row">

    <div class="col-sm-8 col-1 col-sm-6 sem pula" style="vertical-align: top; border: solid 1px #000; border: none; background: none;">

    <div class="card-body textMove2">
    <h5 class="card-title text-bold">JALECO</h5>
              <h6 class="card-title">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.</h6>
              <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the 
                industry's standard dummy text ever since the 1500s,
                scrambled it to make a type specimen book. It has
                survived not only fve centuries, but also the leap into 
                electronic typesetting, remaining essentially
              </p> 
    </div>
    <div class="col-sm-8 col-2" >
      <img class="card-img-left img-responsive" src="<?php bloginfo('template_url'); ?>/img/jaleco-branco.png" alt="Jaleco" style="width: 100%;" />
    </div>

    </div>

  </div>

</div>

  <!-- Camiseta 3 -->
  <div class="container go3 white">

<div class="row">

  <div class="col-sm-8 col-1 col-sm-6 sem pula" style="vertical-align: top; border: solid 1px #000; border: none; background: none;">

  <div class="card-body textMove3">
  <h5 class="card-title text-bold">UNIFORMES</h5>
            <h6 class="card-title">Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.</h6>
            <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the 
              industry's standard dummy text ever since the 1500s,
              scrambled it to make a type specimen book. It has
              survived not only fve centuries, but also the leap into 
              electronic typesetting, remaining essentially
            </p> 
  </div>
  <div class="col-sm-8 col-2" >
    <img class="card-img-left img-responsive" src="<?php bloginfo('template_url'); ?>/img/blue.png" alt="Polos" style="width: 50%;" />
  </div>

  </div>

</div>

</div>

 <!-- Camiseta 4 -->
 <div class="container go4 white">

<div class="row">

  <div class="col-sm-8 col-1 col-sm-6 sem pula" style="vertical-align: top; border: solid 1px #000; border: none; background: none;">

  <div class="card-body textMove4">
  <h5 class="card-title text-bold">CALÇAS</h5>
            <h6 class="card-title">Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.</h6>
            <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the 
              industry's standard dummy text ever since the 1500s,
              scrambled it to make a type specimen book. It has
              survived not only fve centuries, but also the leap into 
              electronic typesetting, remaining essentially
            </p> 
  </div>
  <div class="col-sm-8 col-2" >
    <img class="card-img-left img-responsive" src="<?php bloginfo('template_url'); ?>/img/calca.png" alt="Calças" style="width: 50%;" />
  </div>

  </div>

</div>

</div>

  <!-- Google Maps -->
  <div class="container pula">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.8341550914324!2d-46.54527078522175!3d-23.466445984730097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef56e5bcebaa3%3A0x44ab7fa7beb0898c!2sAv.%20Em%C3%ADlio%20Ribas%2C%201056%20-%20Jardim%20Vila%20Galvao%2C%20Guarulhos%20-%20SP%2C%2007020-280!5e0!3m2!1spt-BR!2sbr!4v1579174697924!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border: solid 1px #000;" allowfullscreen=""></iframe>
  </div>
 
<!-- Footer -->
<footer class="page-footer font-small color color-white pt-4 emp">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-4">

        <!-- Content -->
        <img src="<?php bloginfo('template_url'); ?>/img/logo_felita.png" width="80%" height="80" class="d-inline-block align-top" alt="">
        <p class="text-min">Lorem Ipsum is simply dummy text of the printing and typesetting</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <div class="col-md-2 mb-md-0 mb-2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.8342915422436!2d-46.54527078495945!3d-23.466441063979033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef56e5bcebaa3%3A0x44ab7fa7beb0898c!2sAv.%20Em%C3%ADlio%20Ribas%2C%201056%20-%20Jardim%20Vila%20Galvao%2C%20Guarulhos%20-%20SP%2C%2007020-280!5e0!3m2!1spt-BR!2sbr!4v1579204315845!5m2!1spt-BR!2sbr" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-2 ">

         <!-- Contatos -->
        <h5 class="text-bold cent">Contatos</h5>
        <ul class="list-unstyled alinhar">
          <li>
            <p><img src="<?php bloginfo('template_url'); ?>/img/pin-icon.png" width="5%" class="d-inline-block align-bottom invert" style="margin: 5px;" alt="local">Lorem Ipsum is simply, 41</p>
          </li>
          <li>
            <p><img src="<?php bloginfo('template_url'); ?>/img/whatsapp-icon.png" width="5%" class="d-inline-block align-bottom invert" style="margin: 5px;" alt="whatsapp">(11) 99999-9999</p>
          </li>
          <li>
            <p><img src="<?php bloginfo('template_url'); ?>/img/email-icon.png" width="5%" class="d-inline-block align-bottom invert" style="margin: 5px;" alt="email">email@email.com.br</p>
          </li>
          <li>
            <p><img src="<?php bloginfo('template_url'); ?>/img/instagram-icon.png" width="5%" class="d-inline-block align-bottom invert" style="margin: 5px;" alt="instagram">/@Example</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-2">

        <!-- Links -->
        <h5 class="text-bold cent">Links</h5>

        <ul class="list-unstyled alinhar espacamento">
          <li>
            <a href="#!" style="color: #fff;">Home</a>
          </li>
          <li>
            <a href="#!" style="color: #fff;">Empresa</a>
          </li>
          <li>
            <a href="#!" style="color: #fff;">Benefícios</a>
          </li>
          <li>
            <a href="#!" style="color: #fff;">Como chegar</a>
          </li>
          <li>
            <a href="#!" style="color: #fff;">Reserva</a>
          </li>
          <li>
            <a href="#!" style="color: #fff;">Fale Conosco</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
  <!-- Copyright -->
  <div class=" text-center py-2 back-white text-bold" style="color: #495678;">© 2020 Felita Uniformes |
    <a href="https://agenciasense.com.br/" style="color: #495678;">Desenvolvido por - Agência SENSE</a>
  </div>
  <!-- Copyright -->
<!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <?php wp_footer(); ?>
  </body>
</html>