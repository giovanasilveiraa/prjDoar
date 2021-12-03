<?php

include("conexao.php");

try {
    if ($_POST) {
        extract($_POST);

        if($idusuario == null){
            throw new Exception("Usuário não cadastrado");
        }

        if($valor < 10){
            throw new Exception("Valor abaixo do mínimo");

        }

        if($valor > 1000){
            throw new Exception("Valor acima do mínimo");

        }

        $sql= "INSERT INTO usuario (nome, rg, cpf, email, senha, logradouro, numero, complemento, bairro, estado) VALUES ('$nome', '$rg', '$cpf', '$email', '$senha', '$logradouro', '$numero', '$complemento', '$bairro', '$estado')";

        $res = mysqli_query($con, $sql);
        $retorno = array();
        echo($sql);

        if ($res == false) {
            throw new Exception("Erro ao inserir cadastro");
        } else {
            $retorno['resp'] = true;
            $retorno['msg'] = "Cadastro realizado com sucesso";
        }
        die(json_encode($retorno));
    }
} catch (Exception $e) {

    $retorno = array();
    $retorno['resp'] = false;
    $retorno['msg'] = $e->getMessage();
    die(json_encode($retorno));
}
