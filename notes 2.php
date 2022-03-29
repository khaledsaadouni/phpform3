<?php

session_start();
$_SESSION['user'] = 'b';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
  <div style="font-size: x-large;text-align: center;color: #1a84b0"> Notes</div>
  <?php
  if ($_SESSION["user"] == "b" && isset($_SESSION["notes"])) {
    foreach ($_SESSION['notes'] as $s) {
      ?>
      <table class="table table-sm">
        <tr>
          <td> <?= $s ?>
      </table>
    <?php }
  } else {
    header('location:index.php');
  } ?>
</div>
</body>
</html>
