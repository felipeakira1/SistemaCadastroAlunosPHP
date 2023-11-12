<?php
    require_once '../includes/Aluno.php';
    $alunos = [];
    $file_handle = fopen("../alunos.bin", "rb");
    
    if($file_handle) {
        while (($aluno_serialized = fgets($file_handle)) !== false) {
            $aluno = unserialize($aluno_serialized);
    
            // Check if the unserialization was successful
            if ($aluno !== false) {
                $alunos[] = $aluno;
            } else {
                // Handle errors in deserialization
                echo "Erro na deserialização do aluno.";
            }
        }
        fclose($file_handle);
    } else {
        echo "Erro ao abrir o arquivo para leitura";
    }
    function compararPorRA($aluno1, $aluno2) {
        return $aluno1->getRa() - $aluno2->getRa();
    }

    usort($alunos, 'compararPorRA');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sistema de Cadastro de Alunos</title>
</head>
<body>
    <div class="menu-lateral">
        <h2>Sistema de cadastro de alunos</h2>
        <a href="../index.php">
            <div class="opcao-menu">
                <img src="../images/cadastro_icon.png" alt="Icone de cadastro">
                Cadastrar alunos
            </div>
        </a>
        <a href="pesquisar_alunos.php">
            <div class="opcao-menu">
                <img src="../images/search_icon.png" alt="Icone de pesquisa">
                Pesquisar alunos
            </div>
        </a>
    </div>
    <div class="conteudo">
        <main class="pesquisar-container">
            <h1>Pesquisar alunos</h1>
            <table class="tabela-alunos">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>RA</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($alunos)) {
                            foreach ($alunos as $aluno) {
                                ?>
                                <tr>
                                    <td><?php echo $aluno->getNome(); ?></td>
                                    <td><?php echo $aluno->getRa(); ?></td>
                                    <td><?php echo $aluno->getTelefone(); ?></td>
                                    <td><?php echo $aluno->getSexo(); ?></td>
                                    <td><?php echo $aluno->getIdade(); ?></td>
                                    <td><?php echo $aluno->getEndereco(); ?></td>
                                    <td><?php echo $aluno->getEmail(); ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>