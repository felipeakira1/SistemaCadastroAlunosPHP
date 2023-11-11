<?php
    session_start();

    if(isset($_SESSION['alunos'])) {
        function compararPorRA($aluno1, $aluno2) {
            return $aluno1['ra'] - $aluno2['ra'];
        }

        usort($_SESSION['alunos'], 'compararPorRA');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Cadastro de Alunos</title>
</head>
<body>
    <div class="menu-lateral">
        <h2>Sistema de cadastro de alunos</h2>
        <a href="index.php">
            <div class="opcao-menu">
                <img src="imagens/cadastro_icon.png" alt="Icone de cadastro">
                Cadastrar alunos
            </div>
        </a>
        <a href="pesquisar_alunos.php">
            <div class="opcao-menu">
                <img src="imagens/search_icon.png" alt="Icone de pesquisa">
                Pesquisar alunos
            </div>
        </a>
        <div id="btn-limpar-dados" class="opcao-menu">
            <img src="imagens/trash_icon.png" alt="Icone de lixo">
            Limpar dados
        </div>
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
                        if(isset($_SESSION['alunos'])) {
                            for($i = 0; $i < count($_SESSION['alunos']); $i++) {
                                ?>
                                <tr>
                                    <td><?php echo $_SESSION['alunos'][$i]['nome'] ?></td>
                                    <td><?php echo $_SESSION['alunos'][$i]['ra'] ?></td>
                                    <td><?php echo $_SESSION['alunos'][$i]['telefone'] ?></td>
                                    <td><?php echo $_SESSION['alunos'][$i]['sexo'] ?></td>
                                    <td><?php echo $_SESSION['alunos'][$i]['idade'] ?></td>
                                    <td><?php echo $_SESSION['alunos'][$i]['endereco'] ?></td>
                                    <td><?php echo $_SESSION['alunos'][$i]['email'] ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        
                </tbody>
            </table>
        </main>
    </div>
    
    <script src="script.js"></script>
</body>
</html>