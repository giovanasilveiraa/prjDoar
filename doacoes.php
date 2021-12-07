<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/estilotabela.css">

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <title>Doar.com</title>
</head>

<body>
    <input type="hidden" name="idins" value="2" id="idinstituicao">
    <table id="acdc" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <td>Doador</td>
        <td>Instituição</td>
        <td>Valor da doação</td>
    </tr>
    </thead>
    <?php
        include("conexao.php");
        $idinstituicao = 1;
        $sql="SELECT u.nome AS nome_usuario, i.nome AS nome_instituicao, d.valor  FROM instituicao AS i INNER JOIN doacao AS d ON i.idinstituicao = d.idinstituicao INNER JOIN usuario AS u ON u.idusuario = d.idusuario WHERE d.idinstituicao = {$idinstituicao}";
        $res = mysqli_query($con, $sql);
        while ($row = $res ->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['nome_usuario']."</td>";
            echo "<td>".$row['nome_instituicao']."</td>";
            echo "<td>".$row['valor']."</td>";
            echo "</tr>";
        }
    ?>
    </table>


        <script>
            $(document).ready(function() {
                $('#acdc').DataTable();
            } );
        </script>

</body>

</html>