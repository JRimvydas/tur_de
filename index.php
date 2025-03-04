<?php
require_once 'logic.php';
?>
<!doctype html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="https://st2.depositphotos.com/1413332/6081/v/950/depositphotos_60815475-stock-illustration-cycling.jpg" width="112" height="28">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
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
                    <a href="#" class="navbar-item">Home</a>
                </div>
            </div>
        </nav>
    </div>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Participants
                </h1>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="columns participants is-multiline">
            <?php foreach ($tour['participants'] as $participant) : ?>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="<?php print $participant['photo'] ?>" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4"><?php print "{$participant['first_name']} {$participant['last_name']}" ?></p>
                                    <hr>
                                    <p class="subtitle is-6"><?php print "Win: {$participant['win']} | Loose: {$participant['lose']}"; ?></p>
                                    <p class="title is-4"><?php print "{$participant['win_ratio']} &percnt;" ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>