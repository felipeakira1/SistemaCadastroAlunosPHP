console.log('Script carregado!')
let xhttp;

// script.js
function cadastrar_aluno() {
    let nome = document.getElementById('nome').value;
    let ra = document.getElementById('ra').value;
    let telefone = document.getElementById('telefone').value;
    let sexo = document.getElementById('sexo').value;
    let idade = document.getElementById('idade').value;
    let endereco = document.getElementById('endereco').value;
    let email = document.getElementById('email').value;

    if (!nome || !ra || !telefone || !sexo || !idade || !endereco || !email) {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    let xhttp = new XMLHttpRequest();

    if (!xhttp) {
        alert("Não foi possível criar um objeto XMLHttpRequest.");
        return false;
    }
    
    xhttp.onerror = function () {
        alert("Erro!")
    }

    xhttp.open('POST', 'pages/cadastrar_aluno.php', true);

    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhttp.send(
        'nome=' + encodeURIComponent(nome) +
        '&ra=' + encodeURIComponent(ra) +
        '&telefone=' + encodeURIComponent(telefone) +
        '&sexo=' + encodeURIComponent(sexo) +
        '&idade=' + encodeURIComponent(idade) +
        '&endereco=' + encodeURIComponent(endereco) +
        '&email=' + encodeURIComponent(email)
    );
    alert("Aluno cadastrado com sucesso!");

}

const btn_limpar_dados = document.getElementById('btn-limpar-dados');
btn_limpar_dados.addEventListener('click', function() {
    console.log("botao clicado!")
    let xhttp = new XMLHttpRequest();
    if (!xhttp) {
        alert("Não foi possível criar um objeto XMLHttpRequest.");
        return false;
    }

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            // Manipular a resposta da requisição, se necessário
            alert("Dados excluidos com sucesso!");
        }
    };

    xhttp.open('POST', 'limpar_dados.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send();
});