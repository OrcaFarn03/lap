<html lang="en"> 
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "movierental";
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    ?>
<head>
    <meta charset="UTF-8"> 
    <title>Movierental</title> 
    <link rel="stylesheet" href="Styles.css">
</head>

<body>
    <div id="header">
        <form>

        </form>
    </div>

    <nav class="headmenue">
        <ul class="headmenue">
            <a href="Movierental.php" style="text-decoration: none; color:black"><li class="menue">Movies</li></a>
            <a href="Search.php" style="text-decoration: none; color:black"><li class="menue">Search</li></a>
            <a href="#" style="text-decoration: none; color:black"><li class="menue">Impressum</li></a>
            <a href="#" style="text-decoration: none; color:black"><li class="menue">Kontakt</li></a>
        </ul>
    </nav>

    <div id="form-container">
        <h2>Movies:</h2>
    </div>

    <form id="searchbar" action="Search.php" methode="get">
        <input name="searchValue" type="text">
        <input type="submit">
    </form>

<?php
    if (!isset($_GET["searchValue"])) {
        $searchValue = "";
        $sql = "call getSearchValue('".$searchValue."');";
        $result = mysqli_query($conn, $sql);

        echo "<table><tr><th>Movie Title</th><th>Release Date</th><th>Production Studio</th></tr>";
        while ($data = mysqli_fetch_array($result)) {
            echo "<tr><td>".$data['movieTitle']."</td><td>".$data['releaseDate']."</td><td>".$data['studioName']."</td></tr>";
        }
        echo "</table>";
    }

    else {
        $searchValue = $_GET["searchValue"];
        $sql = "call getSearchValue('".$searchValue."');";
        $result = mysqli_query($conn, $sql);

        echo "<table><tr><th>Movie Title</th><th>Release Date</th><th>Production Studio</th></tr>";
        while ($data = mysqli_fetch_array($result)) {
            echo "<tr><td>".$data['movieTitle']."</td><td>".$data['releaseDate']."</td><td>".$data['studioName']."</td></tr>";
        }
        echo "</table>";
        
    }

    $conn -> close();
?>
</body>