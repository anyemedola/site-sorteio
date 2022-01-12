<?php
require "../config.php";
header('Content-type: text/html; charset=ISO-8859-1');

$verifica_cpf = validaCPF($cpf);

$cpf = str_replace('.','',$cpf);
$cpf = str_replace('-','',$cpf);

$verifica_cpf_existente = $pesquisas->verificarExistencia($cpf);

if($verifica_cpf == true){

    if($verifica_cpf_existente == true){
        $_SESSION['aviso'] = 1;
        $_SESSION['aviso-title'] = 'Erro';
        $_SESSION['aviso-type'] = 'error';
        $_SESSION['aviso-text'] = 'CPF ja foi cadastrado.';
        header("Location: ../home");
    }else{

    
        $pesquisa = $db->select("INSERT INTO cadastro (nome, telefone, email, end, cpf, bairro, uf, cidade, cep, senha) 
                                VALUES ('$name', '$telefone', '$email', '$end', '$cpf', '$bairro', '$uf', '$cid', '$cep', '$password')");
    
        $_SESSION['aviso'] = 1;
        $_SESSION['aviso-title'] = 'Pronto!';
        $_SESSION['aviso-type'] = 'success';
        $_SESSION['aviso-text'] = 'Cadastro efetuado com sucesso.';
        header("Location: ../home");
    }

}else {
    $_SESSION['aviso'] = 1;
    $_SESSION['aviso-title'] = 'Erro';
    $_SESSION['aviso-type'] = 'error';
    $_SESSION['aviso-text'] = 'CPF é invalido.';
    header("Location: ../home");
}

    
    
?>