<?php
    require_once '../includes/Aluno.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
    
        $aluno = new Aluno($nome, $ra, $telefone, $sexo, $idade, $endereco, $email);
        
        $file_handle = fopen("../alunos.bin", "ab");

        if($file_handle) {
            $aluno_serialized = serialize($aluno) . "\n";
            
            $bytes_escritos = fwrite($file_handle, $aluno_serialized);

            if($bytes_escritos !== false) {
                echo "Escrita bem sucedidae. " . $bytes_escritos . "bytes foram escritos no arquivo";
            } else {
                echo "Falha na escrita no arquivo.";
            }

            fclose($file_handle);
        } else {
            echo "Erro ao abrir o arquivo para escrita";
        }
    } else {
        echo "NAO";
    }
?>
