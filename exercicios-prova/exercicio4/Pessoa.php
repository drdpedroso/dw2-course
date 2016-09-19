<?php

class Pessoa {

  private $nome;

  function __construct($nome) {
    $this->nome = $nome;
  }

  public function savePerson($conn, $nome){
    mysqli_query($conn, "INSERT INTO cliente (nome) VALUES ('$nome')");
  }
}

?>
