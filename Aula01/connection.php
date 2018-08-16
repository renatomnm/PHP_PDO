<?php

  $dsn = 'mysql:host=localhost;dbname=movies_db;charset=utf8mb4;port:3306';
  $db_user = 'root';
  $db_pass = '';

  try{
    $conn = new PDO($dsn,$db_user,$db_pass);
    echo "está conectado";
  }
  catch( PDOException $exception){
    echo $exception->getMessage();
  }

?>
