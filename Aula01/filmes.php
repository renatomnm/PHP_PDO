<?php
  include("connection.php");
  $queryMovies = $conn->query("SELECT * FROM movies");
  $queryGenres = $conn->query("SELECT * FROM genres")
?>

<select name="genre_id" form="moviesForm">
  <?php while($row = $queryGenres->fetch(PDO::FETCH_OBJ)) {?>
    <option value="<?php $row->id; ?>"/> <?php echo $row->name ?></option>
    <?php }?>
</select>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="adicionarfilmes" action="adicionarFilmes.php" method="post" id="moviesForm">
        <input type="text" name="title" value="title">
        <input type="text" name="rating" value="rating">
        <input type="text" name="awards" value="awards">
        <input type="text" name="release_date" value="release_date">
        <input type="text" name="length" value="length">
        <select name="genre_id" id="genre_id">
          <?php while($row = $queryGenres->fetch(PDO::FETCH_OBJ)) {?>
            <option value="<?php $row->id; ?>"/> <?php echo $row->name ?></option>
            <?php }?>
        </select>
        <input type="submit" name="enviar" value="enviar">
    </form>
  </body>
</html>
