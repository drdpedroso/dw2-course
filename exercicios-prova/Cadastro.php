<?php
  $nome = $_POST['nome'];

  $conn = mysqli_connect("localhost", "root", "root", "revisao");

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  mysqli_query($conn, "INSERT INTO cliente (nome) VALUES ('$nome')");

  mysqli_close($conn);
?>
