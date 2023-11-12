<?php
class Aluno {
    private $nome;
    private $ra;
    private $telefone;
    private $sexo;
    private $idade;
    private $endereco;
    private $email;

    public function __construct($nome, $ra, $telefone, $sexo, $idade, $endereco, $email) {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->telefone = $telefone;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->email = $email;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getRa() {
        return $this->ra;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getEmail() {
        return $this->email;
    }
}
?>
