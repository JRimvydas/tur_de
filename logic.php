<?php
$tour = [
    'available_first_name' => ['John', 'Jack', 'Danny', 'Tom', 'Kevin', 'Emil', 'Bill'],
    'available_last_name' => ['Rambo', 'Daniels', 'Potter', 'Kruz', 'Dick', 'Pussy', 'Ass'],

    'history' => [
        [
            'years' => '2019',
            'winner_name' => '',
            'winner_surname' => '',
        ],
        [
            'years' => '2018',
            'winner_surname' => '',
            'winner_name' => '',
        ],
        [
            'years' => '2017',
            'winner_surname' => '',
            'winner_name' => '',
        ],
        [
            'years' => '2016',
            'winner_surname' => '',
            'winner_name' => '',
        ],
        [
            'years' => '2015',
            'winner_surname' => '',
            'winner_name' => '',
        ],
        [
            'years' => '2014',
            'winner_surname' => '',
            'winner_name' => '',
        ],
    ],

    'photo' => [
        'https://chipblue.net/joomla/angles/media/k2/items/cache/867519228d1d5325856fc61d710ded0e_XL.jpg',
        'https://yt3.ggpht.com/a/AATXAJzpzjt-pSXA6_Rs-OHfJeGgWcmYBL-Do0zOpg=s900-c-k-c0xffffffff-no-rj-mo',
        'https://glavcom.ua/img/gallery/4890/13/368509_big.jpg',
        'https://yt3.ggpht.com/a/AGF-l7-ISxYciov8vUrkjKutUYxeBEt6YJD3kRU0ZA=s900-c-k-c0xffffffff-no-rj-mo',
        'https://yt3.ggpht.com/a/AGF-l7_XfI4ZgT67b8u-VwaSfh1Qzw3YMmJy3YcSBw=s900-c-k-c0xffffffff-no-rj-mo',
        'https://yt3.ggpht.com/a/AATXAJxJjV1wiTMYp-oSMtGtX6FjL-W6DMyMPXXxCA=s900-c-k-c0xffffffff-no-rj-mo',
        'https://yt3.ggpht.com/a/AGF-l7_3O7HqA2OTIbhNsW1mZUiKnzwO_JHMQOsszw=s900-c-k-c0xffffffff-no-rj-mo',
        'https://yt3.ggpht.com/a/AGF-l7-DI2B2boKlMVkzZXsH0dmuuhIHwqO8u4PxSQ=s900-c-k-c0xffffffff-no-rj-mo',
        'https://avatars.mds.yandex.net/get-pdb/2041353/ad01c8e6-2092-41c5-9cf4-c6404fb92ae3/s1200?webp=false',
        'https://i.pinimg.com/originals/d5/c0/00/d5c0004d1115be0025c2eb5c743cd306.jpg'
    ],


    'bloopers' => [
        'https://media.giphy.com/media/RhSiIe2u05WOn0obtb/giphy.gif',
        'https://media.giphy.com/media/iqryv05RJMVlm/giphy.gif',
        'https://media.giphy.com/media/ffkBvDVST82UU/giphy.gif',
        'https://media.giphy.com/media/3o6Ztcsgaf9hPYRbCE/giphy.gif',
        'https://media.giphy.com/media/8m5d7288RnnUDpc83s/giphy.gif',
        'https://media.giphy.com/media/aYLk2UUhOrpuM/giphy.gif'
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


$range = range(0, 80, 15);
shuffle($range);

foreach ($tour['participants'] as $key => $participant) {
    $participant['first_name'] = $tour['available_first_name'][array_rand($tour['available_first_name'])];
    $participant['last_name'] = $tour['available_last_name'][array_rand($tour['available_last_name'])];
    $participant['attended'] = rand(1, 10);
    $participant['win'] = rand(0, $participant['attended']);
    $participant['photo'] = $tour['photo'][array_rand($tour['photo'])];
    $participant['lose'] = $participant['attended'] - $participant['win'];
    $participant['win_ratio'] = round((100 / $participant['attended']) * $participant['win'], 2);

    $participant['x'] = $range[$key];
    $participant['y'] = rand(27, 55);


    $tour['participants'][$key] = $participant;
}
usort($tour['participants'], function ($item1, $item2){
    return $item1['x'] <=> $item2['x'];
});
$winner =  end($tour['participants']);
// var_dump($tour['participants']);

foreach ($tour['history'] as $key => $value) {
    $value['winner_name'] = $tour['available_first_name'][array_rand($tour['available_first_name'])];
    $value['winner_surname'] = $tour['available_last_name'][array_rand($tour['available_last_name'])];
    $tour['history'][$key] = $value;
}
