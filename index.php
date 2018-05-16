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
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    </body>

    </html>
