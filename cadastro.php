<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <!-- Bootbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <form action="" method="POST" class="form-control">

            <p class="texto mt-3"><label for="nome">Nome</label></p>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" class="form-control" required="" autofocus="">

            <p class="texto mt-3"><label for="email">Email:</label></p>
            <input class="form-control" name="email" type="email" id="email" required="" autofocus=""/>

            <p class="texto mt-3"><label for="rg">RG:</label></p>
            <input type="number" name="rg" id="rg" placeholder="RG" class="form-control" required="" autofocus="">

            <p class="texto mt-3"><label for="cpf">CPF:</label></p>
            <input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control" required="" autofocus="">

            <p class="texto mt-3"><label for="CEP">CEP</label></p>
            <input type="text" id="cep" class="form-control" placeholder="CEP" maxlength="8" required="" autofocus="">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-dark" onclick="buscarCep()">Buscar CEP</button>
            </div>
            

            <p class="texto mt-3"><label for="logradouro">Logradouro</label></p>
            <input type="text" id="logradouro" class="form-control" placeholder="Logradouro" required="" autofocus="">

            <p class="texto mt-3"><label for="numero">Numero</label></p>
            <input type="text" id="numero" class="form-control" placeholder="Numero" required="" autofocus="">
            
            <p class="texto mt-3"><label for="complemento">Complemento:</label></p>
            <input type="text" id="complemento" class="form-control" placeholder="complemento" required="" autofocus="">

            <p class="texto mt-3"><label for="bairro">Bairro</label></p>
            <input type="text" id="bairro" class="form-control" placeholder="Bairro" required="" autofocus="">

            <p class="texto mt-3"><label for="cidade">Cidade</label></p>
            <input type="text" id="cidade" class="form-control" placeholder="Cidade" required="" autofocus="">

            <p class="texto mt-3">UF</p>
            <select id="estado" class="form-control cep">
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
            </select>
            <p class="texto mt-3"><label for="senha">Senha:</label></p>
            <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" minlength="8" autocomplete="off" required="" autofocus="">

            <p class="texto mt-3"><label for="csenha">Confirmação de senha:</label></p>
            <input type="password" name="csenha" id="csenha" placeholder="Confirmação de senha" class="form-control" minlength="8" autocomplete="off" required="" autofocus="">
            <span id='message'></span>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" id="btnEnviar" class="btn btn-dark">Enviar cadastro</button><br />
            </div>
            
        </form>
    </div>

    <script>
        $("#btnEnviar").click(function() {
            $.post(
                "cadastrar.php", {
                    nome: $("#nome").val(),
                    email: $("#email").val(),
                    rg: $("#rg").val(),
                    cpf: $("#cpf").val(),
                    telefone: $("#telefone").val(),
                    cep: $("#cep").val(),
                    logradouro: $("#logradouro").val(),
                    numero: $("#numero").val(),
                    complemento: $("#complemento").val(),
                    bairro: $("#bairro").val(),
                    cidade: $("#cidade").val(),
                    estado: $("#estado").val(),
                    senha: $("#senha").val(),
                    csenha: $("#csenha").val(),

                },
                function(data) {
                    if (data.resp == false) {
                        bootbox.alert(`Ocorreu um erro:"${data.msg}"`);
                    } else {
                        bootbox.alert("Cadastro realizado");
                    }
                },

                "JSON")
        });

        function buscarCep() {
            let cep;
            cep = document.getElementById("cep").value;
            if (cep != "") {
                $.get("https://viacep.com.br/ws/" + cep + "/json",
                    function(data) {
                        if (data.erro) {
                            bootbox.alert("CEP inválido");
                        } else {
                            document.getElementById("logradouro").value = data.logradouro;
                            document.getElementById("bairro").value = data.bairro;
                            document.getElementById("cidade").value = data.localidade;
                            document.getElementById("estado").value = data.uf;
                            document.getElementById("complemento").value = data.complemento;
                            $("#numero").focus();
                        }
                    },
                    "json");
            } else {
                bootbox.alert("Preencha o CEP!");
            }
        }

        // $('#senha, #csenha').on('keyup', function() {
        //     if ($('#senha').val() == $('#csenha').val()) {
        //         $('#message').html('');
        //     } else
        //         $('#message').html('Not Matching').css('color', 'red');
        // });
    </script>
</body>

</html>