<?php include('PHP/server.php') ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Szeged</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/kapcsolat.css">
    <link rel="stylesheet" href="CSS/login_register.css">
    <script>
      if (top.location != self.location) 
      top.location = self.location; 

      
    </script>
</head>
<body>
    <div class="header">
    <div class="jumbotron text-center">
        <h1>Hotel Szeged</h1>
        
      </div>
    </div>
    
      
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" ><span> Szolgáltatások</span> </a>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="index.php"><span> Kezdőlap</span></a></li>
            <li><a href="PHP/lakosztaly.php"><span> Szobák</span></a></li>
           
            <li><a href="HTML/kapcsolat.html"><span> Kapcsolat</span></a></li>
         
            <li><a href="HTML/rendezvenyek.html"><span> Rendezvények</span></a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="PHP/regisztracio.php"><span class="glyphicon glyphicon-user"></span> <span> Regisztráció</span></a></li>
            <li class="active"><a href="bejelentkezes.php"><span class="glyphicon glyphicon-log-in"></span> <span> Bejelentkezés</span></a></li>
          </ul>
        </div>
      </nav>

      <form method="post" action="PHP/regisztracio.php">
        <?php include('PHP/errors.php'); ?>
        <div class="input-group">
            <label>Felhasználónév</label>
            <input type="text" name="username">
        
        </div>
       
        <div class="input-group">
            <label>Jelszó</label>
            <input type="password" name="password">
        
        </div>
       
        <div class="input-group">
            <button  type="submit" name="login" class="btn">Bejelentkezés</button>
        
        </div>
        
        <p>
            Még nem regisztrált?  <a href="PHP/regisztracio.php">Regisztráció</a>
        </p>
    </form>
</body>
</html>