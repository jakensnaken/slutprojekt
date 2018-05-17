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
?>
    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Rose Clothing</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="modal.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="kontainer">
            <header>
                <h1><a href="index.php">Roses Clothing</a></h1>
                <nav>
                    <ul>
                        <li><a href="#myModal" class="trigger-btn" data-toggle="modal">Logga in</a></li>
                        <li><a href="skapa_konto.php">Skapa konto</a></li>
                        <li><a href="min_sida.php">Min sida</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
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
                    <img src="img/grey%20hoodie.png">
                    <img src="img/t-shirt.png">
                    <img src="img/jeans.png">
                </div>
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
        <?php
        include "inloggningsruta.php";
    ?>
            <script src="js/login.js"></script>
    </body>

    </html>
