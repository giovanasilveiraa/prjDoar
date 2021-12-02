<?php
include("conexao.php");

    if ($_POST) {

        extract($_POST);

        $pos = strpos($email, '@');
        if ($pos == false) {
        throw new Exception("Email invalido");
        }

        $check_user="SELECT email, senha FROM usuario WHERE email = '$_POST[email]' AND senha = '$_POST[senha]'";
        $res = mysqli_query($con, $check_user);
        $retorno = array();
        if(mysqli_num_rows($res) > 0) {
            throw new Exception("Usuário não existe");
        }
        

        if ($res == false) {
            throw new Exception("Erro ao inserir cadastro");
        } else {
            $retorno['resp'] = true;
            $retorno['msg'] = "Cadastro realizado com sucesso";
            $retorno['idusuario'];
        }
        die(json_encode($retorno));
    
} catch (Exception $e) {

    $retorno = array();
    $retorno['resp'] = false;
    $retorno['msg'] = $e->getMessage();
    die(json_encode($retorno));
}
?>