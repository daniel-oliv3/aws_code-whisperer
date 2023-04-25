<?php 


// create a class for a client with portuguese properties
class Client {
    private $name;
    private $idade;
    private $endereco;
    private $telefone;
    private $email;
    private $localidade;
    private $estado;
    private $pais;
    private $cpf;
    private $rg;
    private $sexo;

    // create all getters and setters
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getEndereco($endereco) {
        return $this->endereco;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function getTelefone($telefone) {
        return $this->telefone;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getEmail($email) {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

} 

// get more properties from the client













?>

<!-- 
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    Data: 25/04/2023
 -->