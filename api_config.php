<?php
header('Content-Type: application/json');

$data = [
    "images" => [
        [
            "title" => "Location A",
            "imageUrl" => "https://raw.githubusercontent.com/raihanfiqi/list_agenda/main/Universitas-Negeri-Malangea7aa13eb936e571.jpg",
            "kegiatan" => "Activity A",
            "lokasi" => "Place A"
        ],
        [
            "title" => "Location B",
            "imageUrl" => "https://raw.githubusercontent.com/raihanfiqi/list_agenda/main/lafayette-coffee-and-eatery_169.png",
            "kegiatan" => "Activity B",
            "lokasi" => "Place B"
        ],
        [
            "title" => "Location C",
            "imageUrl" => "https://raw.githubusercontent.com/raihanfiqi/list_agenda/main/samantha_krida.jpg",
            "kegiatan" => "Activity C",
            "lokasi" => "Place C"
        ],
        [
            "title" => "Location D",
            "imageUrl" => "https://raw.githubusercontent.com/raihanfiqi/list_agenda/main/taman-singha-merjosari-profile1653766575.jpeg",
            "kegiatan" => "Activity D",
            "lokasi" => "Place D"
        ],
        [
            "title" => "Location E",
            "imageUrl" => "https://raw.githubusercontent.com/raihanfiqi/list_agenda/main/universitas-brawijaya-ub-malang_169.jpeg",
            "kegiatan" => "Activity E",
            "lokasi" => "Place E"
        ]
    ]
];

echo json_encode($data);
?>
