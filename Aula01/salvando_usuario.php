<?php

  include("connection.php");

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirma_senha = $_POST['confirmar_senha'];

  $statement = $conn->prepare('INSERT INTO usuarios(nome,email,senha,confirmar_senha) VALUES(:nome, :email, :senha, :confirmar_senha)');

  $statement->bindParam(':nome', $nome, PDO::PARAM_STR);
  $statement->bindParam(':email', $email, PDO::PARAM_STR);
  $statement->bindParam(':senha', $senha, PDO::PARAM_STR);
  $statement->bindParam(':confirmar_senha', $confirma_senha, PDO::PARAM_STR);

  echo $statement->execute();


  //tabela criada
//   create table usuarios(
// 	id int(11) not null primary key auto_increment,
//     nome varchar(30),
//     email varchar(30),
//     senha varchar(30),
//     confirmar_senha varchar(30)
// ) DEFAULT CHARSET=UTF8;
//
// select * from usuarios

?>
