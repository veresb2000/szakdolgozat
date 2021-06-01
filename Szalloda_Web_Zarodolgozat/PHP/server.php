<?php 
session_start();

$username = "";
$email = "";
$surname = "";
$firstName = "";
$contact = "";
$errors = array();
//adatbázishoz csatlakozás
$db = new mysqli('127.0.0.1', 'root', '', 'zarodolgozat');
if($db->connect_errno){
    echo "Hiba az adatbázis betöltése közben";
    echo $db->connect_error;
    die();
}
//regisztráció form értékei
if(isset($_POST['register'])){
    $surname = $_POST['surname'];
    $firstName = $_POST['firstName'];
    $contact = $_POST['contact'];
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 =  $_POST['password_2'];

    if(empty($surname)){
        array_push($errors, "Vezetéknév hiányzik");
    }
    if(empty($firstName)){
        array_push($errors, "Keresztnév hiányzik");
    }
    if(empty($contact)){
        array_push($errors, "Elérhetőség hiányzik");
    }
    if(empty($username)){
        array_push($errors, "Felhasználónév hiányzik");
    }
    if(empty($email)){
        array_push($errors, "Email hiányzik");
    }
    if(empty($password_1)){
        array_push($errors, "Jelszó hiányzik");
    }

    if($password_1 != $password_2){
        array_push($errors, "A két jelszó nem egyezik");
    }
    //adatbázisba feltöltés
    if(count($errors)==0){
        $password = md5($password_1);

        $query = "INSERT INTO vendeg (vezetekNev, keresztNev, elerhetoseg, felhasznaloNev, email, jelszo) VALUES ('" . $surname . "','" . $firstName . "','" . $contact . "','" . $username . "','" . $email . "','" . $password . "')";
        $logedinQuery = "UPDATE vendeg SET logedin=1 WHERE felhasznaloNev='$username'";
        mysqli_query($db, $query);
        mysqli_query($db, $logedinQuery);
        $_SESSION['username'] = $username;
        $_SESSION['succes'] = "Üdvözlöm" . " " . $username;
        
        header('location: ../index.php');

        
    }
}
//bejelentkezés
if (isset($_POST['login'])) {
    $username =  $_POST['username'];
    
    $password =  $_POST['password'];

    if(empty($username)){
        array_push($errors, "Felhasználónév hiányzik");
    }
    if(empty($password)){
        array_push($errors, "Jelszó hiányzik");
    }
    if (count($errors)==0) {
        $password = md5($password);
        $query = "SELECT * FROM vendeg WHERE felhasznaloNev='$username' AND jelszo = '$password'";
        $logedinQuery = "UPDATE vendeg SET logedin=1 WHERE felhasznaloNev='$username'";
        $result = mysqli_query($db, $query);
        mysqli_query($db, $logedinQuery);
       
        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;
            $_SESSION['succes'];
            header('location: ../index.php');
        }else{
            array_push($errors, "A felhasználónév/jelszó párosítás nem megfelelő");
            
        }
    }
}

//kijelentkezés
if(isset($_GET['logout'])){
    $username=$_SESSION['username'];
    $query = "UPDATE vendeg SET logedin=0 WHERE felhasznaloNev = '$username'";

    mysqli_query($db, $query);
    session_destroy();
    unset($_SESSION['username']);
    header('location: ../bejelentkezes.php');
}


?>