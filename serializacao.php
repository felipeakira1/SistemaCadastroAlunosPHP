<?php
    class Pessoa {
        public $nome;
        public $idade;

    }

    $pessoa = new Pessoa();
    $pessoa->nome = "João";
    $pessoa->idade = 25;

    $dados_serializados = serialize($pessoa);
    echo $dados_serializados;
    $pessoa_desserializada = unserialize($dados_serializados);

    echo $pessoa_desserializada->nome; // Saída: João
    echo $pessoa_desserializada->idade; // Saída: 25
?>