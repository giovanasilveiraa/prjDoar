<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloindex.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Bootbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
    </script>

    <title>Doar.com</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Doar.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Instituições</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h3 class="h3">Escolha uma instituição para doar!</h3>
    <div class="container-div">
  <div class="row align-items-center">
    <div class="col-sm-4">
      <img class="rounded mx-auto d-block" src="imagens/acdc.png" alt="">
      <p align="center" class="paragrafo">Instituição ACDC</p>
    </div>
    <div class="col-sm-4">
      <img class="rounded mx-auto d-block" src="imagens/amparaAnimal.jpg" 
      alt="">
      <p align="center" class="paragrafo">Instituição Ampara Animal</p>
    </div>
    <div class="col-sm-4">
      <img class="rounded mx-auto d-block" src="imagens/doutoresAlegria.jpg" alt="">
      <p align="center" class="paragrafo">Instituição Doutores da Alegria</p>
    </div>
  </div>
  <div class="container-div">
  <div class="row align-items-center">
    <div class="col-sm-4">
      <img class="rounded mx-auto d-block" src="imagens/larDoAmor.jpg" alt="">
      <p align="center" class="paragrafo">Instituição Lar do Amor</p>
    </div>
    <div class="col-sm-4">
      <img class="rounded mx-auto d-block" src="imagens/larVicentino.jpg" 
      alt="">
      <p align="center" class="paragrafo">Instituição Lar Vicentino</p>
    </div>
    <div class="col-sm-4">
      <img class="rounded mx-auto d-block" src="imagens/luisaMell.jpg" alt="">
      <p align="center" class="paragrafo">Instituição Luisa Mell</p>
    </div>
  </div>
  <div class="div">
  <button type="submit" class="btn btn-dark">Doar</button>
  <a href="cadastro.php"><button class="btn btn-dark">Cadastrar</button></a>
  </div>
</body>

<h3>Instituições</h3>
<div class="container">
    <div class="wrapper">
        <div class="box a">
            <p>Projeto Guri</p>
            <a href="pages/projeto-guri.php">
                <img alt="projeto-guri" src="imagens/prjGuri.jpg" width="90%" height="90%">
            </a>
        </div>
        <div class="box b">
            <p>Instituto Luisa Mell</p>
            <a href="pages/instituto-luiza-mel.php">
                <img alt="instituto-luiza-mel" src="imagens/luisaMell.jpg" width="90%" height="90%">
            </a>
        </div>
        <div class="box c">
            <p>Lar Vicentino</p>
            <a href="pages/lar-vicentino.php">
                <img alt="lar-vicentino" src="imagens/larVicentino.jpg" width="90%" height="90%">
            </a>
        </div>
        <div class="box d">
            <p>AMPARA Animal</p>
            <a href="pages/ampara-animal.php">
                <img alt="ampara-animal" src="imagens/amparaAnimal.jpg" width="90%" height="90%">
            </a>
        </div>
        <div class="box e">
            <p>Doutores da Alegria</p>
            <a href="pages/doutores-da-alegria.php">
                <img alt="doutores-da-alegria" src="imagens/doutoresAlegria.jpg" width="90%" height="90%">
            </a>
        </div>
        <div class="box f">
            <p>Retiro dos artistas</p>
            <a href="pages/retiro-dos-artistas.php">
                <img alt="retiro-dos-artistas" src="imagens/Retiro-dos-Artistas.jpg" width="90%" height="90%">
            </a>
        </div>
        <div class="box g">
            <p>Lar do Amor</p>
            <a href="pages/lar-do-amor.php">
                <img alt="lar-do-amor" src="imagens/larDoAmor.jpg" width="90%" height="90%">
            </a>
        </div>
        <div class="box h">
            <p>ACDC</p>
            <a href="pages/acdc.php">
                <img alt="acdc" src="imagens/acdc.png" width="90%" height="90%">
            </a>
        </div>
    </div>
</div>

</html>