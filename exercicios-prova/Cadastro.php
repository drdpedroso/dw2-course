<?php

  include_once('Pessoa.php');
  
  $nome = $_POST['nome'];

  $conn = mysqli_connect("localhost", "root", "root", "revisao");

  $pessoa = new Pessoa($nome);

  $pessoa->savePerson($conn,$nome);

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  mysqli_query($conn, "INSERT INTO cliente (nome) VALUES ('$nome')");

  mysqli_close($conn);
?>
