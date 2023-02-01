<?php
    session_name('chulettaaa');
    if(!isset($_SESSION)){
        session_start();
    }
    // segurança digital


    // verificar se o usuario esta logado na sessão
    if(!isset($_SESSION['login_usuario'])){
        // se não existir, redirecionamos a sessão por segurança
        header('location: login.php');
        exit;
    }
    $nome_da_sessão = session_name();
    if(!isset($_SESSION['nome_da_sessao'])
        or ($_SESSION['nome_da_sessao'] != $nome_da_sessão)
    ){
        session_destroy();
        header('loacation: login.php');
        exit;
    }
?>