<?php
  $conn = mysqli_connect("localhost", "root", "root", "revisao");
  $result = mysqli_query($conn, "SELECT * FROM PRODUTO");
   
?>
