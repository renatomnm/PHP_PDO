<?php
  include("connection.php");

  $query = $conn->query("SELECT * FROM movies LIMIT 10");

  $resulta = $query->fetchAll();
  echo "<pre>";
  print_r($resulta);
  echo "</pre>";
?>
