<?php

include("conexao.php");

try {
    if ($_POST) {
        extract($_POST);

        if($idusuario == null){
            throw new Exception("Usuário não cadastrado");          
        }

        if($valor < 10){
            throw new Exception(" "+"Valor abaixo do permitido");
        }

        if($valor > 1000){
            throw new Exception(" "+"Valor acima do permitido");
        }

        $sql= "INSERT INTO doacao (valor, idusuario, idinstituicao) VALUES ('$valor', '$idusuario', '$idinstituicao')";
        $res = mysqli_query($con, $sql);
        $retorno = array();
        echo($sql);

        if ($res == false) {
            throw new Exception("Erro ao cadastrar doação");
        } else {
            $retorno['resp'] = true;
            $retorno['msg'] = "Doação realizado com sucesso";
        }
        die(json_encode($retorno));
    }
} catch (Exception $e) {

    $retorno = array();
    $retorno['resp'] = false;
    $retorno['msg'] = $e->getMessage();
    die(json_encode($retorno));
} 
