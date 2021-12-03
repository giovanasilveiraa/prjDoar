<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <title>Doar.com</title>
</head>

<body>
    <input type="hidden" name="idinstituicao" value="" id="idinstituicao">
    <table id="acdc" class="display" style="width:100%">
    <thead>
    <tr>
        <td>Doador</td>
        <td>Instituição</td>
        <td>Valor da doação</td>
    </tr>
    </thead>
    <tbody>
    <?php
        include("conexao.php");
        $sql="SELECT u.nome AS nomeu, i.nome AS nomei, d.valor, SUM(d.valor) AS total FROM usuario AS u INNER JOIN doacao AS d ON u.idusuario = d.idusuario INNER JOIN instituicao AS i ON i.idinstituicao = d.idinstituicao WHERE i.idinstituicao = 1";
        $res = mysqli_query($con, $sql);
        $retorno = array();

        while($row=mysql_fetch_array($res))
        {
        ?>
        <tr>
            <td><?php echo $row['nomeu']; ?></td>
            <td><?php echo $row['nomei']; ?></td>
            <td><?php echo $row['valor']; ?></td>
        </tr>
        
        </tbody>
        

        <tfoot>
            <tr>
            <td>Valor total</td>
            <td></td>
            <td><?php echo $row['total'];?></td>
            </tr>
        <?php
        }
        ?>
        </tfoot>

        <script>
            $(document).ready(function() {
                $('#acdc').DataTable();
            } );
        </script>
</body>

</html>