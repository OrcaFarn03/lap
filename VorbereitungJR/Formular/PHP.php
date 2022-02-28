<?php

//if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['absenden'])){
//echo "Formular wurde abgesendet";
//    $filename = 'Formular.csv';
//    $file = fopen($filename, 'a');
//    fputs($file,$_POST['vorname'].";".$_POST['nachname']."\n");
//    fclose($file);
echo "Formular wurde abgesendet!";
$pwd = $_POST['password'];
$pwdag = $_POST['passwordagain'];
$hash = password_hash($pwd,PASSWORD_BCRYPT);
$hashag = password_hash($pwdag,PASSWORD_BCRYPT);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['absenden'])) {
    $filename = 'Formular.csv';
    $file = fopen($filename, 'a');
    if (!$file) {
        echo "Datei konnte nicht geöffnet werden.";
        exit;
    }
    fputs($file,$_POST['anrede'].";".$_POST['vorname'].";".$_POST['nachname'].";".$_POST['livingplace'].";".$_POST['birthdate'].";".$_POST['mail'].";".$hash.";".$hashag.";".$_POST['place'].";".$_POST['plz'].";".$_POST['street'].";".$_POST['fedstate']."\n");
    fclose($file);
}
?>