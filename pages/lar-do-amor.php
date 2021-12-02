<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilopaginas.css">

    <!-- JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <title>Doar.com</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand mx-5" href="#">Doar.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Instituições</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-div">
        <form action="" method="POST" class="form-control">            

            <p>Colabore com o Lar do Amor</p>
            <p class="texto">
                <img class="rounded mx-auto d-block" src="../imagens/larDoAmor.jpg" width="10%" height="10%">
            </p>

            <p class="texto"><label for="valor">Valor da doação:</label></p>
            <input class="form-control" type="number" name="valor" id="valor" change="setTwoNumberDecimal " min="???" max="???" required=" " autofocus=" " />

            <p class="texto "><label for="email ">Email:</label></p>
            <input class="form-control " name="email " type="email " id="email " required=" " autofocus=" " />

            <p class="texto"><label for="senha">Senha:</label></p>
            <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" minlength="8" autocomplete="off" required="" autofocus="">
        </form>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto ">
  <button type="submit" class="btn btn-dark my-4">Doar</button>
  </div>
<script>

// $("#btnCad").click(function() {
//             $.post(
//                 "doacao.php", {
//                     email: $("#email").val(),
//                     senha: $("#senha").val(),
//                 },
//                 function(data) {
//                     if (data.resp == false) {
//                         data.;
//                     } else {
//                         bootbox.alert("Cadastro realizado");
//                     }
//                 },

//                 "JSON")
//         });
</script>
</body>

</html>