<?php include('PHP/server.php');
    if(empty($_SESSION['username'])){
      header('location: bejelentkezes.php');
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
    <link rel="stylesheet" href="CSS/index.css">
    <script>
      if (top.location != self.location) 
      top.location = self.location; 
    </script>
</head>
<body>
  <div class="header">
    <div class="jumbotron text-center" >
          
          
          <h1>Hotel Szeged</h1>
        
    </div>
  </div>
    
  <div class="content">
        <?php if (isset($_SESSION['succes'])): ?>
            <div class="error succes">
                <h3>
                    <?php
                        echo $_SESSION['succes'];
                        unset($_SESSION['succes']);
                        
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION["username"])): ?>
           <p>Üdvözlöm <strong><?php echo $_SESSION['username']; ?></strong></p>
           <p> <a href="index.php?logout='1'" style="color : red;">Kijelentkezés</a> </p> 
        <?php endif ?>
    </div>

    
  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" ><span> Szolgáltatások</span> </a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span> Kezdőlap</span></a></li>
            <li><a href="PHP/lakosztaly.php"><span> Szobák</span></a></li>
           
            <li><a href="HTML/kapcsolat.html"><span> Kapcsolat</span></a></li>
         
            <li><a href="HTML/rendezvenyek.html"><span> Rendezvények</span></a></li>
            
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
              
            <li><a href="PHP/regisztracio.php"><span class="glyphicon glyphicon-user"></span> <span> Regisztráció</span></a></li>
            <li><a href="bejelentkezes.php"><span class="glyphicon glyphicon-log-in"></span> <span> Bejelentkezés</span></a></li>
          </ul>
        </div>
      </nav>

     
      
        <div class="row">
            <div class="col-md-4">
              <div class="thumbnail">

                  <img src="IMG/hotel.PNG" alt="hotel" style="width:100%">
                  <div class="caption">
                    <p>A hotelunk udvara</p>
                  </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
              
                  <img src="IMG/szoba.PNG" alt="szoba" style="width:100%">
                  <div class="caption">
                    <p>Egy a szobáink közül</p>
                  </div>
           
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                
                  <img src="IMG/medence.jpg" alt="medence" style="width:100%" height="100px">
                  <div class="caption">
                    <p>Kikapcsolódni vágyóknak</p>
                  </div>
                
              </div>
            </div>
          </div>

    <p class="kezdolapBemutatkozas">
      A Hotel Szeged folyamatosan bővülő kínálattal várja az ide látogatókat. Kedvező árak és rengeteg érdekes program mellett széles szoba választékkal várjuk kedves vendégeinket.
      Munka miatti utazás, romantikus kikapcsolodás vagy családi utazásra induló vendégeink is megtalálják itt a számukra legkedvezőbb szobákat és árakat. Nézzen körbe oldalunkon
      és ha kérdése akad, akkor nyugodtan keressen minket a kapcsolat fül alatt.
    </p> 


  </div>    
      

 
      
      
</body>
</html>