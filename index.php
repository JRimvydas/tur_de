<?php
$percents = 0;
$loose = 0;

$tour = [
    'available_first_name' => ['John', 'Jack', 'Danny', 'Tom', 'Kevin', 'Emil', 'Bill'],
    'available_last_name' => ['Rambo', 'Daniels', 'Potter', 'Kruz', 'Dick', 'Pussy', 'Ass'],
    'photo' => [
        'https://chipblue.net/joomla/angles/media/k2/items/cache/867519228d1d5325856fc61d710ded0e_XL.jpg',
        ' https://yt3.ggpht.com/a/AATXAJzpzjt-pSXA6_Rs-OHfJeGgWcmYBL-Do0zOpg=s900-c-k-c0xffffffff-no-rj-mo',
        'https://glavcom.ua/img/gallery/4890/13/368509_big.jpg',
        'https://yt3.ggpht.com/a/AGF-l7-ISxYciov8vUrkjKutUYxeBEt6YJD3kRU0ZA=s900-c-k-c0xffffffff-no-rj-mo',
        'https://yt3.ggpht.com/a/AGF-l7_XfI4ZgT67b8u-VwaSfh1Qzw3YMmJy3YcSBw=s900-c-k-c0xffffffff-no-rj-mo',
        'https://yt3.ggpht.com/a/AATXAJxJjV1wiTMYp-oSMtGtX6FjL-W6DMyMPXXxCA=s900-c-k-c0xffffffff-no-rj-mo'
    ],
    'participants' => [
        [
            'first_name' => '',
            'last_name' => '',
            'attended' => 0,
            'win' => 0,
            'lose' => 0,
            'win_ratio' => 0,
            'x' => 0,
            'y' => 0,
            'bike' => 1,
            'photo' => '',
        ],
        [
            'first_name' => '',
            'last_name' => '',
            'attended' => 0,
            'win' => 0,
            'lose' => 0,
            'win_ratio' => 0,
            'x' => 0,
            'y' => 0,
            'bike' => 2,
            'photo' => '',
        ],
        [
            'first_name' => '',
            'last_name' => '',
            'attended' => 0,
            'win' => 0,
            'lose' => 0,
            'win_ratio' => 0,
            'x' => 0,
            'y' => 0,
            'bike' => 3,
            'photo' => '',
        ],
        [
            'first_name' => '',
            'last_name' => '',
            'attended' => 0,
            'win' => 0,
            'lose' => 0,
            'win_ratio' => 0,
            'x' => 0,
            'y' => 0,
            'bike' => 4,
            'photo' => '',
        ],
        [
            'first_name' => '',
            'last_name' => '',
            'attended' => 0,
            'win' => 0,
            'lose' => 0,
            'win_ratio' => 0,
            'x' => 0,
            'y' => 0,
            'bike' => 5,
            'photo' => '',
        ],
        [
            'first_name' => '',
            'last_name' => '',
            'attended' => 0,
            'win' => 0,
            'lose' => 0,
            'win_ratio' => 0,
            'x' => 0,
            'y' => 0,
            'bike' => 6,
            'photo' => '',
        ],
    ]
];

foreach ($tour['participants'] as $key => $participant) {
    $participant['first_name'] = $tour['available_first_name'][array_rand($tour['available_first_name'])];
    $participant['last_name'] = $tour['available_last_name'][array_rand($tour['available_last_name'])];
    $participant['attended'] = rand(1, 10);
    $participant['win'] = rand(0, $participant['attended']);
    $participant['photo'] = $tour['photo'][array_rand($tour['photo'])];
    $participant['lose'] = $participant['attended'] - $participant['win'];
    $participant['win_ratio'] = round((100 / $participant['attended']) * $participant['win'], 2);

    $tour['participants'][$key] = $participant;
}

/*var_dump($tour);*/
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="columns is-multiline">
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
                                        <p class="subtitle is-4"><?php print $participant['win_ratio']?>&percnt;</p>
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
