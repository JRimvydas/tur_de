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
    <title>History</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main class="history_bg">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-4 is-offset-one-quarter">
                <ul class="list">
                    <li class="list-item">Kitas čempionas gali būti tu ! ! !</li>
                    <?php foreach ($tour['history'] as $year): ?>
                        <li class="list-item"><?php print "{$year['years']}: {$year['winner']}" ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</main>

</body>
</html>