<?php
/**
* BESKRIVNING AV PROGRAMMET
*
* PHP version 5
* @category   Kategori
* @author     Jacob Skogman <jacobskogman27@gmail.com>
* @license    PHP CC
* @link
*/

session_start();
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
                        <?php
                        if ($_SESSION["loggedin"]) {
                            echo "<li><a href=\"logga_ut.php\">Logga Ut</a></li>";
                        } else {
                            echo "<li><a href=\"#myModal\" class=\"trigger-btn\" data-toggle=\"modal\">Logga in</a></li>";
                        }
                        ?>
                        <li><a href="loggos.php">Logotyper</a></li>
                        <li><a href="skapa_konto.php">Skapa konto</a></li>
                        <li><a href="min_sida.php">Min sida</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                        <li><a href="cart.php">Kundvagn</a></li>
                        <li>
                            <form>
                                <input class="form-control" type="text" name="sok" placeholder="Sök">
                            </form>
                        </li>
                    </ul>
                </nav>
            </header>
            <main class="">
                <div class="bilder">
                    <img src="img/cart%20choice.png">
                    <img src="img/check%20out.png">
                </div>
            </main>
            <footer class="kolumner">
            </footer>
        </div>
    </body>
    </html>
