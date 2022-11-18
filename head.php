<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/fonts.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-8 d-flex align-items-center">
          <h1 class="fs-3 text-white">sebastião alves</h1>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end">
          <span class="text-white menu-button"><img src="./public/imagens-desktop/menu.svg" alt="menu"></span>
        </div>
        <div class="col-12 menu-header d-flex">
          <ul class="list-unstyled m-0 py-3">
            <li>
              <a class="text-white" href="home.php">HOME</a>
            </li>
            <li>
              <a class="text-white" href="">AUTOR</a>
            </li>
            <li>
              <a class="text-white" href="">LIVROS</a>
            </li>
            <li>
              <a class="text-white" href="">IMPRENSA</a>
            </li>
            <li>
              <a class="text-white" href="">CONTACTOS</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="carousel-mobile">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./public/imagens-mobile/cabecalho1.jpg" class="d-block w-100" alt="Senhora do Amor e da Guerra">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./public/imagens-mobile/cabecalho2.jpg" class="d-block w-100" alt="O caracol estrábico">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./public/imagens-mobile/cabecalho3.jpg" class="d-block w-100" alt="Coleccionador de amnésias">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


  </header>