<?php
include("server.php");

$checkboxSzoba = implode(',', $_POST['szoba']);
//értékek átadása
$elsoNap=$_POST['elsoNap'];
$utolsoNap=$_POST['utolsoNap'];
$foglalasDatuma=date("Y/m/d");
//adatbázisba feltöltés
if(isset($_POST['submit'])){
    $logedinQuery="SELECT ID FROM vendeg WHERE logedin=1";
    $result=mysqli_query($db, $logedinQuery);
    $id=0;
    while($rows=mysqli_fetch_array($result)){
        $id=$rows['ID'];
    }
    
    $foglalasQuery="INSERT INTO foglalas (szobaID, vendegID, elsoNap, utolsoNap, foglalas_datum) VALUES ('".$checkboxSzoba."','".$id."','" . $elsoNap . "', '" . $utolsoNap . "','" . $foglalasDatuma . "'  )";
    mysqli_query($db, $foglalasQuery);

    
}
header('Location: uzleti.php');
