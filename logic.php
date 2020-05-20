<?php

$tour = [
    'available_first_name' => ['John', 'Jack', 'Danny', 'Tom', 'Kevin', 'Emil', 'Bill'],
    'available_last_name' => ['Rambo', 'Daniels', 'Potter', 'Kruz', 'Dick', 'Pussy', 'Ass'],
    'history' => [
        [
            'years' => '2019',
            'winner' => '',
        ],
        [
            'years' => '2018',
            'winner' => '',
        ],
        [
            'years' => '2017',
            'winner' => '',
        ],
        [
            'years' => '2016',
            'winner' => '',
        ],
        [
            'years' => '2015',
            'winner' => '',
        ],
        [
            'years' => '2014',
            'winner' => '',
        ],
    ],
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

foreach ($tour['history'] as $key => $value) {
    $value['winner'] = $tour['available_first_name'][array_rand($tour['available_first_name'])] . ' ' . $tour['available_last_name'][array_rand($tour['available_last_name'])];
    $tour['history'][$key] = $value;
}
//var_dump($tour['history']);
?>
