 <?php 
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
