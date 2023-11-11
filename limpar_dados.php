<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_SESSION['alunos'] = array();
        echo 'Dados excluidos com sucesso!';
    } else {
        header('HTTP/1.1 400 Bad Request');
        echo 'Solicitação inválida!';
    }
?>