<?php
include("connection.php");

$title = $_POST['title'];
$rating = $_POST['rating'];
$awards = $_POST['awards'];
$release_date = $_POST['release_date'];
$length = $_POST['length'];
$genre_id = $_POST['genre_id'];

$statement = $conn->prepare('INSERT INTO movies(title,rating,awards,release_date,length,genre_id) VALUES(:title, :rating, :awards, :release_date, :length, :genre_id)');

$statement->execute([
  ':title'=>$title,
  ':rating'=>$rating,
  ':awards'=>$awards,
  ':release_date'=>$release_date,
  ':length'=>$length,
  ':genre_id'=>$genre_id
]);


echo "registro adicionado com sucesso";
?>
