
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">FilmFlix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="upcoming.php">Up Coming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nowplaying.php">Now Playing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bioskop.php">Bioskop</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bars"></i> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <i class="fa fa-user" aria-hidden="true"></i> Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <section>
    <div class="container">
      <div class='item'>
        <img src="images/film1.jpg" alt="Film 1" class="img-fluid">
        <h3>film 1</h3>
      </div>
      <div class='item'>
        <img src="images/film2.jpg" alt="Film 2" class="img-fluid">
        <h3>film 2</h3>
      </div>
      <div class='item'>
        <img src="images/film3.jpg" alt="Film 3" class="img-fluid">
        <h3>film 3</h3>
      </div>
      <div class='item'>
        <img src="images/film4.jpg" alt="Film 4" class="img-fluid">
        <h3>film 4</h3>
      </div>
      <div class='item'>
        <img src="images/film5.jpg" alt="Film 5" class="img-fluid">
        <h3>film 5</h3>
      </div>
      <div class='item'>
        <img src="images/film6.jpg" alt="Film 6" class="img-fluid">
        <h3>film 6</h3>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    © KELOMPOK 2 JAYA JAYA
  </footer>
</body>

</html>