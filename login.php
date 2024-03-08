<?php
    session_start();
    $erro="";
    if (!isset($_POST["login"]) or ($_POST["login"]==""))
            $erro = "Preencha o login";
    
    elseif (!isset($_POST["senha"]) or ($_POST["senha"]==""))
        $erro = "preencha a senha";

    else 
        $erro=$_POST["login"];
        $erro=$_POST["senha"];
    if  ($login !="admin" or senha!="1234"){
        $erro="login ou senha invalido(s)";
    }

    else {
        $_SESSION["usuario"] = "administrador";
        }
    if ($!erro="")
        header ("Location: login.php?erro=$erro", true , 301);
    else
        header ("Location: porteger.php", true, 301);
?>