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
  <?php  while($row = $q->fetch(PDO::FETCH_OBJ))?>
  <li><?php echo $row->name ?></li>
</ul>
