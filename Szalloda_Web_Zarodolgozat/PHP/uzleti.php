<?php include('server.php');
if (empty($_SESSION['username'])) {
  header('location: ../bejelentkezes.php');
}

?>
<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Szeged</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../CSS/szobak.css">
  <script>
    if (top.location != self.location)
      top.location = self.location;

    function alertMessage() {
      alert("Sikeres foglalás");
    }
  </script>
</head>

<body>
  <div class="jumbotron text-center">
    <h1>Hotel Szeged</h1>

  </div>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><span> Szolgáltatások</span></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../index.php"><span> Kezdőlap</span></a></li>
        <li class="dropdown" class="active">
          <a class="dropdown-toggle" data-toggle="dropdown" href="lakosztaly.php"><span> Szobák</span>
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="lakosztaly.php"> Lakosztály</a></li>
            <li><a href="uzleti.php"> Üzleti</a></li>
            <li><a href="alap.php"> Alap</a></li>
          </ul>
        </li>

        <li><a href="../HTML/kapcsolat.html"><span> Kapcsolat</span></a></li>

        <li><a href="../HTML/rendezvenyek.html"><span> Rendezvények</span></a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="regisztracio.php"><span class="glyphicon glyphicon-user"></span> <span> Regisztráció</span></a></li>
        <li><a href="../bejelentkezes.php"><span class="glyphicon glyphicon-log-in"></span> <span> Bejelentkezés</span></a></li>
      </ul>
    </div>
  </nav>

  <div class="carousel">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="../IMG/uzletiSzoba1.jpg" alt="Los Angeles">
        </div>

        <div class="item">
          <img src="../IMG/uzletiSzoba2.jpg" alt="Chicago">
        </div>

        <div class="item">
          <img src="../IMG/uzletiSzoba3.jpg" alt="New York">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <form action="uzletiFoglalas.php" method="POST">
    <div class="form">
      <label for="elsoNap">Érkezés napja:</label>
      <input type="date" id="elsoNap" name="elsoNap">
      <br>
      <label for="utolsoNap">Távozás napja:</label>
      <input type="date" id="utolsoNap" name="utolsoNap">



      <h2>Választható szobák</h2>
      <div class="checkbox">
        <label><input type="checkbox" name="szoba[]" value="4">Csak reggeli, 2 férőhelyes, 12.000 Ft/éj</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="szoba[]" value="5">Fél panzió, 4 férőhelyes, 15.000 Ft/éj</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="szoba[]" value="6">Teljes ellátás, 6 férőhelyes, 17.500 Ft/éj</label>
      </div>




      <button onclick="alertMessage()" type="submit" name="submit" value="submit" class="btn">Foglalás</button>
    </div>
  </form>



</body>

</html>