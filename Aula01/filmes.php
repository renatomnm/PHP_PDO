<?php
  include("connection.php");
  $query = $conn->query("SELECT * FROM movies");
  $q = $conn->query("SELECT * FROM genres")
?>

<select name="nomes">
  <?php while($row = $query->fetch(PDO::FETCH_OBJ)) {?>
    <option value="<?php $row->id; ?>"/> <?php echo $row->title ?>
    <?php }?>
</select>

<ul>
  <?php  while($row = $q->fetch(PDO::FETCH_OBJ)) {?>
  <li><?php echo $row->id . " - " . $row->name;
    ?>
  </li>
<?php } ?>
</ul>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="adicionarfilmes" action="adicionarFilmes.php" method="post">
        <input type="text" name="title" value="title">
        <input type="text" name="rating" value="rating">
        <input type="text" name="awards" value="awards">
        <input type="text" name="release_date" value="release_date">
        <input type="text" name="length" value="length">
        <input type="text" name="genre_id" value="genre_id">
        <input type="submit" name="enviar" value="enviar">
    </form>
  </body>
</html>
