<?php
session_start();
    if ($_POST['benutzername'] == "Joshua" AND $_POST['password'] == "Test1234*")
    {
    //$_SESSION['benutzername'] = $_POST['benutzername'];
    $_SESSION['eingeloggt'] = true;
    echo "<b>Einloggen erfolgreich</b>";
    }
?>
