<?php
session_start();
$_SESSION['user'] = 'b';

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="bootstrap.min.css">


  <meta name="theme-color" content="#fafafa">
</head>

<body>
<div class="container">
  <form action="notes.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nom" class="form-label">Note </label>
      <TEXTAREA class="form-control" NAME="note" ROWS=5 COLS=40></TEXTAREA>
    </div>

    <button type="submit" name="sub" class="btn btn-primary">Submit</button>
  </form>
  <br> <br> <br> <br>
  <a href="notes 2.php">vos notes</a>
</div>
</body>

</html>
