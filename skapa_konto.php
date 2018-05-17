<?php
/**
* Hemsidan
*
* PHP version 5
* @category   Webbtjänst
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    $_SESSION["loggedin"] = false;
}
include 'config_db_slutprojekt.php';
 /* Ta emot data och lagra i databasen */
 // Vi försöker öppna en anslutningen mot vår databas
 $conn = new mysqli($hostname, $user, $password, $database);
 // Gick det bra att ansluta eller blev det fel?
if ($conn->connect_error) {
    die("<p>Ett fel inträffade: " . $conn->connect_error . "</p>");
}
if (isset($_POST["registrera"])) {
     // Tar emot data från formulär och rensar bort oönskade taggar eller kod
     $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
     $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
     $adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
     $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);
     $mobil = filter_input(INPUT_POST, "mobil", FILTER_SANITIZE_STRING);
     $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
     $losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);
     // Översätt kryssrutans värde till true/false för att kunna lagras i tabellen
     // Om data finns skjut i databasen
     if ($fnamn && $enamn && $anamn && $losen) {
     $hash = password_hash($losen, PASSWORD_DEFAULT);
     // Registrera en ny resa
     $sql = "INSERT INTO anvandare
     (fnamn, enamn, adress, epost, mobil, anamn, losen) VALUES
     ('$fnamn', '$enamn', '$adress', '$epost', '$mobil', '$anamn', '$hash')";
         echo $sql;
     // Nu kör vi vår SQL
     $result = $conn->query($sql);
     // Gick det bra att köra SQL-kommandot?
     if (!$result) {
        die("<p>Det blev något fel i databasfrågan</p>");
     } else {
        echo "<p>Kontot registrerat!</p>";
        $_SESSION["anamn"] = $anamn;
    }
        // Stänger ned anslutningen
        $conn->close();
    }
}
?>
<!DOCTYPE html>
        <html lang="sv">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Rose Clothing</title>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="style.css">
        </head>
       <body>
            <div class="kontainer">
                <header>
                    <h1><a href="index.php">Roses Clothing</a></h1>
                    <nav>
                        <ul>
                            <li><a href="#myModal" class="trigger-btn" data-toggle="modal">Logga in</a></li>
                            <li><a class="aktuell" href="skapa_konto.php">Skapa konto</a></li>
                            <li><a href="min_sida.php">Min Sida</a></li>
                            <li><a href="kontakt.php">Kontakt</a></li>

                            <li>
                                <form>
                                    <input class="form-control" type="text" name="sok" placeholder="Sök">
                                </form>
                            </li>
                        </ul>
                    </nav>
                </header>
                <main>
                    <form action="#" class="kolumner" method="post">
                        <div>
                            <label>Förnamn</label>
                            <input class="form-control" type="text" name="fnamn" required>
                            <label>Efternamn</label>
                            <input class="form-control" type="text" name="enamn" required>
                            <label>Adress</label>
                            <input class="form-control" type="text" name="adress">
                            <label>Epost</label>
                            <input class="form-control" type="email" name="epost" required>
                            <label>Mobil</label>
                            <input class="form-control" type="text" name="mobil">
                        </div>
                        <div>
                            <label>Kön</label>
                            <select class="form-control" name="kon">
                            <option value="1">Man</option>
                            <option value="2">Kvinna</option>
                            <option value="3">Annat</option>
                        </select>
                            <label>Användarnamn</label>
                            <input class="form-control" type="text" name="anamn" required>
                            <label>Lösenord</label>
                            <input id="losen" class="form-control" type="password" name="losen" required>
                            <label>Upprepa lösenord</label>
                            <input id="ulosen" class="form-control" type="password" name="ulosen" required>
                            <label></label><button class="btn btn-primary login-btn" name="registrera">Registrera</button>
                       </div>
                    </form>
                </main>
                <footer class="kolumner">
                    <div>
                        <h4>Info</h4>
                        <p>...</p>
                    </div>
                    <div>
                        <h4>Kontakt</h4>
                        <p>...</p>
                    </div>
                </footer>
            </div>

        </body>
        </html>
