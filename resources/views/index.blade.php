<?php
require "function.php";

?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <?php include 'dashboard.php'; ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <section>
    <div class="container">
      <div class='item'>
        <img src="image/film6.jpg" alt="Film 1" class="img-fluid">
        <h3>film 1</h3>
      </div>
      <div class='item'>
        <img src="image/film5.jpg" alt="Film 2" class="img-fluid">
        <h3>film 2</h3>
      </div>
      <div class='item'>
        <img src="image/film3.jpg" alt="Film 3" class="img-fluid">
        <h3>film 3</h3>
      </div>
      <div class='item'>
        <img src="image/film4.jpg" alt="Film 4" class="img-fluid">
        <h3>film 4</h3>
      </div>
      <div class='item'>
        <img src="image/film2.jpg" alt="Film 5" class="img-fluid">
        <h3>film 5</h3>
      </div>
      <div class='item'>
        <img src="image/film1.jpg" alt="Film 6" class="img-fluid">
        <h3>film 6</h3>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    © KELOMPOK 2 JAYA JAYA
  </footer>

  <script src="slider.js"></script>

</body>
</html>
