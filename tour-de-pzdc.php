<?php
require_once 'logic.php';
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tour-de-pzdc</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="container">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="index.php">
                        <img src="https://st2.depositphotos.com/1413332/6081/v/950/depositphotos_60815475-stock-illustration-cycling.jpg"
                             width="112" height="28">
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                       data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="history.php" class="navbar-item">History</a>
                        <a href="tour-de-pzdc.php" class="navbar-item">Tour-De-Pizdec</a>
                        <a href="bloopers.php" class="navbar-item">Bloopers</a>
                        <a href="index.php" class="navbar-item">Home</a>
                    </div>
                </div>
            </nav>
        </div>
        <section class="hero is-info">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Tour-de-pzdc
                    </h1>
                </div>
            </div>
        </section>
        <div class="road">
            <div class="live">
                <img src="https://pbs.twimg.com/media/ECl69pnXUAIAiDs.png:large" alt="live">
                <h1 class="title  has-text-centered is-2">Current
                    leader: <?php print "{$winner['first_name']} {$winner['last_name']}" ?></h1>
            </div>
            <?php foreach ($tour['participants'] as $key => $participant) : ?>
                <div class="bicyclist has-text-centered
                 has-text-white is-size-4 bike-<?php print $participant['bike']; ?>"
                     style="top: <?php print $participant['y']; ?>%; left: <?php print $participant['x']; ?>%;
                             z-index: <?php print $participant['y']; ?>">
                    <p><?php print $participant['first_name']; ?></p>
                    <p class="title is-5"><?php print $participant['bike']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </body>

</html>