<?php
    //quatro parâmetros para conectar um bd
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'etecmcm';

   //instânciando 
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if($conexao->connect_error){
        die('Falha de conexão: ' . $conexao->connect_error);
    }
    // else{
    //     echo 'CONECTADO';
    // }
?>