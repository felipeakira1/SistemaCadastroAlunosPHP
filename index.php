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
        <main id="cadastro-container">
            <h1>Cadastro de alunos</h1>
            <form action="" method="POST" id="form-aluno">
                <label class="campo">
                    Nome
                    <input type="text" name="nome" id="nome" class="field" autocomplete="off" placeholder="Digite o nome do aluno" required>
                </label>
                <div class="campo-duplo">
                    <label class="metade-campo">
                        RA
                        <input type="number" name="ra" id="ra" placeholder="Digite o RA do aluno" required>
                    </label>
                    <label class="metade-campo">
                        Telefone
                        <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone do aluno" required>
                    </label>
                </div>
                <div class="campo-duplo">
                    <label class="metade-campo">
                        Sexo
                        <select id="sexo" name="sexo">
                            <option value="Homem">Homem</option>
                            <option value="Mulher">Mulher</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </label>
                    <label class="metade-campo">
                        Idade
                        <input type="number" name="idade" id="idade" placeholder="Digite a idade do aluno" required>
                    </label>
                </div>
                <label class="campo">
                    Endereco
                    <input type="text" name="endereco" id="endereco" placeholder="Digite o endereço do aluno" required>
                </label>
    
                <label class="campo">
                    E-mail
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Digite o e-mail do aluno" required>
                </label>
                <!-- <input type="submit" value="Cadastrar"> -->
                <button id="btn-cadastrar" onclick="cadastrarAluno()">Cadastrar</button>
            </form>
        </main>
    </div>
    
    <script src="script.js"></script>
</body>
</html>