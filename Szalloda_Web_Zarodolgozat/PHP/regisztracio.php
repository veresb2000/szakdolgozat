<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Szeged</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/kapcsolat.css">
    <link rel="stylesheet" href="../CSS/login_register.css">
    <script>
      if (top.location != self.location) 
      top.location = self.location; 
    </script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Hotel Szeged</h1>
        
      </div>
      
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" ><span> Szolgáltatások</span> </a>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="../index.php"><span> Kezdőlap</span></a></li>
            <li><a href="lakosztaly.php"><span> Szobák</span></a></li>
           
            <li><a href="../HTML/kapcsolat.html"><span> Kapcsolat</span></a></li>
         
            <li><a href="../HTML/rendezvenyek.html"><span> Rendezvények</span></a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="regisztracio.php"><span class="glyphicon glyphicon-user"></span> <span> Regisztráció</span></a></li>
            <li><a href="../bejelentkezes.php"><span class="glyphicon glyphicon-log-in"></span> <span> Bejelentkezés</span></a></li>
          </ul>
        </div>
      </nav>

      <form method="post" action="regisztracio.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Vezetéknév</label>
            <input type="text" name="surname" value="<?php echo $surname; ?>">
        
        </div>
        <div class="input-group">
            <label>Keresztnév</label>
            <input type="text" name="firstName" value="<?php echo $firstName; ?>">
        
        </div>
        <div class="input-group">
            <label>Elérhetőség</label>
            <input type="text" name="contact" placeholder="telefonszám" value="<?php echo $contact; ?>">
        
        </div>
        <div class="input-group">
            <label>Felhasználónév</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
        
        </div>
        <div class="input-group">
            <label>Jelszó</label>
            <input type="password" name="password_1">
        
        </div>
        <div class="input-group">
            <label>Jelszó megerősítése</label>
            <input type="password" name="password_2">
        
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Regisztráció</button>
        
        </div>
        <p>
            Regisztrált már? <a href="bejelentkezes.php">Bejelentkezés</a>
        </p>
    </form>

      
</body>
</html>