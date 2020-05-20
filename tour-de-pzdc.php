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
        <main>
            <div class="road">
                <?php foreach ($tour['participants'] as $key => $participant) : ?>
                <div class="bicyclist has-text-centered has-text-white is-size-4"
                     style="top: <?php print $participant['y']; ?>%; left: <?php print $participant['x']; ?>%;
                           z-index: <?php print $participant['x']; ?>">
                    <?php print $participant['first_name']; ?>
                    <p class="title has-text-white is-5"><?php print $participant['bike']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
</html>
