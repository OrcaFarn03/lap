<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notebooksbillig.at</title>
    <link rel="stylesheet" href="Styles.css">

    <script>
        function absenden(){
            alert("Formular wurde abgesendet!");
        }

    </script>

</head>

<body>

<div id="überschrift">
    <form>
        <h1>Notebooksbillig.at</h1>
        <em><h2>Preisgünstige Technik für jeden</h2></em>
    </form>
</div>

<nav class="menue" style="color: black">
    <ul class="menue">
        <a href="#" style="text-decoration: none; color:black"><li class="menue">Produkte</li></a>
        <a href="#" style="text-decoration: none; color:black"><li class="menue">Downloads</li></a>
        <a href="#" style="text-decoration: none; color:black"><li class="menue">AGB</li></a>
        <a href="#" style="text-decoration: none; color:black"><li class="menue">Impressum</li></a>
        <a href="#" style="text-decoration: none; color:black"><li class="menue">Kontakt</li></a>
    </ul>
</nav>
<div>
    <img alt="Laptop.jpg" src="Laptop.jpg"><br>
    <form>
        <h2>899,-</h2><br>
       <h1>Bei Interesse bitte das Formular ausfüllen:</h1>
    </form>

</div action="PHP.php">
<form id="form-container" data-ajax="false" action="PHP.php" method="post">
    <div>
        <h2>Konto:</h2>
        <div id="form1">
            Anrede:<br>
            <input type="radio" id="anrede" name="anrede" value="Herr" autofocus>
            <label for="salutation1">Herr</label><br>
            <input type="radio" id="anrede" name="anrede">
            <label for="salutation2">Frau</label><br><br>
        </div>
        <div id="account">
            <label for="vorname">Vorname: *</label><br>
            <input type="text" name="vorname" id="vorname" required placeholder="Max"><br>
            <label for="nachname">Nachname: *</label><br>
            <input type="text" name="nachname" id="nachname" required placeholder="Mustermann"><br>
            <label for="livingplace">Wohnort: *</label><br>
            <input type="text" name="livingplace" id="livingplace" required placeholder="Musterort"><br>
            <label for="birthdate">Geburtsdatum:</label><br>
            <input type="date" name="birthdate" id="birthdate"><br>
            <label for="mail">E-Mail:</label><br>
            <input type="email" name="mail" id="mail" placeholder="max.mustermann@muster.at"><br>
            <label for="password">Passwort: *</label><br>
            <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required placeholder="******"><br>
            <label for="passwordagain">Passwort erneut eingeben: *</label><br>
            <input type="password" name="passwordagain" id="passwordagain" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required placeholder="******"><br>
        </div>
    </div>

    <div>
        <div id="address">
            <h2>Adresse:</h2>
            <label for="place">Wohnort:</label><br>
            <input type="text" name="place" id="place" placeholder="Musterort"><br>
            <label for="plz">Postleitzahl:</label><br>
            <input type="text" id="plz" name="plz" placeholder="1234" pattern="[0-9]{4}"><br>
            <label for="street">Straße:</label><br>
            <input type="text" name="street" id="street" placeholder="Mustergasse"><br>
            <label for="fedstate">Bundesland: *</label><br>
            <select name="fedstate" id="fedstate" required>
                <option value="" disabled selected>Bitte auswählen</option>
                <option>Salzburg</option>
                <option>Niederösterreich</option>
                <option>Oberösterreich</option>
                <option>Wien</option>
                <option>Steiermark</option>
                <option>Burgenland</option>
                <option>Vorarlberg</option>
                <option>Tirol</option>
                <option>Kärnten</option>
            </select><br><br>
        </div>
    </div>
    <div>
        <div method="post" enctype="multipart/form-data">
            <label>Datei hochladen:<br>
                <input name="datei" type="file" size="50" accept="text/*">
            </label><br><br>
            <button type="submit" id="absenden" name="absenden">Absenden</button><br><br>
            <button type="reset">Zurücksetzen</button>
        </div>
    </div>
</form>
<footer id="footer">
    <b>Notebooksbillig.at GmbH<br></b>
    <a href="Impressum.html" style="text-decoration: none; color:black">Impressum<br></a>
    <a href="#" style="text-decoration: none; color:black">Kontakt<br></a>
</footer>
</body>
</html>