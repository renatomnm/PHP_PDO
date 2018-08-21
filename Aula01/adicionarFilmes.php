<?php
include("connection.php");

$title = $_POST['title'];
$rating = $_POST['rating'];
$awards = $_POST['awards'];
$release_date = $_POST['release_date'];
$length = $_POST['length'];
$genre_id = $_POST['genre_id'];

$verify = $conn->prepare('SELECT * FROM movies WHERE title = :title');
$verify->execute([':title'=>$title]);
$result = [];
  while($row = $verify->fetch(PDO::FETCH_OBJ)){
    $result[] = $row->title;
  }
if(!empty($result)){
  $setRating = $conn->prepare('UPDATE movies SET rating = :rating WHERE title = :title');
  $setAwards = $conn->prepare('UPDATE movies SET awards = :awards WHERE title = :title ');
  $setRelease = $conn->prepare('UPDATE movies SET release_date = :release_date WHERE title = :title');
  $setLength = $conn->prepare('UPDATE movies SET length = :length WHERE title = :title');
  $setGenreId = $conn->prepare('UPDATE movies SET genre_id = :genre_id WHERE title = :title');
  $setRating->execute([':rating'=>$rating,':title'=>$title]);
  $setAwards->execute([':awards'=>$awards,':title'=>$title]);
  $setRelease->execute([':release_date'=>$release_date,':title'=>$title]);
  $setLength->execute([':length'=>$release_date,':title'=>$title]);
  $setGenreId->execute([':genre_id'=>$genre_id,':title'=>$title]);
  echo "registro atualizado com sucesso";
}
else{
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
}

?>
