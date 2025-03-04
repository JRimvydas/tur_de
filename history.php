<?php
require_once 'logic.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
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
                    <a href="index.php" class="navbar-item">Home</a>
                </div>
            </div>
        </nav>
    </div>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    History
                </h1>
            </div>
        </div>
    </section>
    <main class="history_bg">
        <div class="container">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Name</th>
                            <th>Surname</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2020</td>
                            <td><?php print $winner['first_name']; ?></td>
                            <td><?php print $winner['last_name']; ?></td>
                        </tr>
                        <?php foreach($tour['history'] as $key => $year) : ?>                          

                        <tr>
                            <td><?php print $year['years'] ?></td>
                            <td><?php print $year['winner_name'] ?></td>
                            <td><?php print $year['winner_surname'] ?></td>
                        </tr>

                        <?php endforeach;  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>