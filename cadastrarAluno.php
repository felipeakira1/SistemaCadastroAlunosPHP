<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];

    $aluno = array(
        'nome' => $nome,
        'ra' => $ra,
        'telefone' => $telefone,
        'sexo' => $sexo,
        'idade' => $idade,
        'endereco' => $endereco,
        'email' => $email
    );

    $_SESSION['alunos'][] = $aluno;
}
?>
