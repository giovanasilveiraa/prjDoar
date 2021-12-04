<?php

include("conexao.php");

try {
    if ($_POST) {
        extract($_POST);

        $pos = strpos($email, '@');
        if ($pos == false) {
        throw new Exception("Email invalido");
        }

        $check_email="SELECT email FROM usuario WHERE email = '$_POST[email]'";
        $rs_email = mysqli_query($con, $check_email);
        if(mysqli_num_rows($rs_email) > 0) {
            throw new Exception("Esse email já está em uso");
        } 

        $check_cpf="SELECT cpf FROM usuario WHERE cpf = '$_POST[cpf]'";
        $rs_cpf = mysqli_query($con, $check_cpf);
        if(mysqli_num_rows($rs_cpf) > 0) {
            throw new Exception("Esse CPF já está em uso");
        }

        $check_rg="SELECT rg FROM usuario WHERE rg = '$_POST[rg]'";
        $rs_rg = mysqli_query($con, $check_rg);
        if(mysqli_num_rows($rs_rg) > 0) {
            throw new Exception("Esse RG já está em uso");
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
