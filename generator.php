<?php

$names = array(
    'Alan',
    'Peter',
    'Master',
    'Agent',
    'John',
    'Zoey',
    'Sarah',
    'Marin',
    'Owen',
    'Adhir',
    'Ervin',
    'Michelle'
);

$surnames = array(
    'Grant',
    'Wick',
    'Porker',
    'Cake',
    'del Castillo',
    'K',
    'Anderson',
    'Johnson',
    'Chief',
    'Cena',
    'Cunningham',
    'Simpson',
    'Kitagawa',
    'Waifu'
);

//Generate a random forename.
$randomForename = $names[mt_rand(0, sizeof($names) - 1)];

//Generate a random surname.
$randomSurname = $surnames[mt_rand(0, sizeof($surnames) - 1)];

//Combine them together.
$newName = $randomForename . ' ' . $randomSurname;