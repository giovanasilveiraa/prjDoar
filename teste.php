<?php
include("bd/conexao.php");
try{
    if ($_POST) {

        $check_user="SELECT idinstituicao FROM instituicao WHERE idinstituicao = '$_POST[idinstituicao]'";
        $res = mysqli_query($con, $check_user);
        $retorno = array();
        
        $idinstituicao = mysqli_fetch_array($res);
        $retorno['resp'] = true;
        $retorno['idinstituicao'] = $idinstituicao['idinstituicao'];
        
        die(json_encode($retorno));
    }
} catch (Exception $e) {

    $retorno = array();
    $retorno['resp'] = false;
    $retorno['msg'] = $e->getMessage();
    die(json_encode($retorno));
}
?>