<?php

// nejaka logika

$data = [
    [
        'prvni radek prvni sloupec',
        'prvni radek druhy sloupec',
        'prvni radek treti sloupec'
    ],
    [
        'druhy radek prvni sloupec',
        'druhy radek druhy sloupec',
        'druhy radek treti sloupec'
    ]
];


$file_handle = fopen('data.csv', 'w'); // w = zpusob otevreni souboru, w znamena pro psani


foreach ($data as $radek) {
    fputcsv($file_handle, $radek, '|');
}


fclose($file_handle); // konec prace se souborem



// prevedeme $data na JSON format
$data_jako_json = json_encode($data);

file_put_contents('data.json', $data_jako_json);