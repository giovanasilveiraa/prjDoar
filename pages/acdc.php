<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilopaginas.css">

    <!-- JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
    </script>
    <title>Doar.com</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="#">Doar.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container-div">
        <form action="" method="POST" class="form-control">

            <p>Colabore com o ACDC</p>
            <p class="texto">
                <img class="rounded mx-auto d-block" src="../imagens/acdc.png" width="10%" height="10%">
            </p>

            <input type="hidden" name="idusuario" value="" id="idusuario">
            <input type="hidden" name="idinstituicao" value="1" id="idinstituicao">

            <?php
            include("../bd/conexao.php");
            $sql="SELECT nome, cnpj, cidade, estado, descricao FROM instituicao WHERE idinstituicao = 1";
            $res = mysqli_query($con, $sql);

            while($sql = mysqli_fetch_array($res))
            {
            ?>
            <ul class="list-inline">
                <p class="list-inline-item"><label for="nome"><?php echo $sql['nome'];?></label></p>
                <p class="list-inline-item"><label for="cnpj"><?php echo $sql['cnpj'];?></label></p>
                <p class="list-inline-item"><label for="cidade"><?php echo $sql['cidade'];?></label></p>
                <p class="list-inline-item"><label for="estado"><?php echo $sql['estado'];?></label></p>
                <p class=" lead"><label for="estado"><?php echo $sql['descricao'];?></label></p>
            </ul>
            <?php
            }
            ?>
            <?php mysqli_close($con);?>

            <p class="texto"><label for="valor">Valor da doação:</label></p>
            <input class="form-control" type="number" name="valor" id="valor" required=" " autofocus=" " />


            <p class="texto "><label for="email ">Email:</label></p>
            <input class="form-control " name="email " type="email " id="email" required=" " autofocus=" " />

            <p class="texto"><label for="senha">Senha:</label></p>
            <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" minlength="8"
                autocomplete="off" required="" autofocus="">
            <button type="button" id="btnCad" class="btn btn-outline-dark">Buscar cadastro</button><br />
            <button type="button" id="btnEnviar" class="btn btn-dark my-4">Doar</button><br />
        </form>
    </div>
    <script>
        $("#btnCad").click(function () {
            $.post(
                "../bd/buscarcad.php", {
                    email: $("#email").val(),
                    senha: $("#senha").val(),
                },
                function (data) {
                    if (data.resp == false) {
                        bootbox.alert("Cadastro não encontrado");
                    } else {
                        $("#idusuario").val(data.idusuario);
                        bootbox.alert("Cadastro encontrado");

                    }
                },
                "JSON")
        });
        $("#btnEnviar").click(function () {
            $.post(
                "../bd/doacao.php", {
                    valor: $("#valor").val(),
                    idusuario: $("#idusuario").val(),
                    idinstituicao: $("#idinstituicao").val(),
                },
                function (data) {
                    if (data.resp == false) {
                        console.log("Cadastro não encontrado");

                        bootbox.alert(`Ocorreu um erro:"${data.msg}"`);
                    } else {
                        bootbox.alert("Cadastro realizado");
                    }
                },

                "JSON")
        });
    </script>
</body>

</html>