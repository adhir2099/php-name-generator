<?php
    // Set the appropriate headers to indicate JSON content
    header('Content-Type: application/json');

    $names = array(
        'Alan', 'Peter', 'Master', 'Agent', 'John', 'Zoey', 'Sarah', 'Marin',
        'Owen', 'Adhir', 'Ervin', 'Michelle'
    );

    $surnames = array(
        'Grant', 'Wick', 'Porker', 'Cake', 'del Castillo', 'K', 'Anderson',
        'Johnson', 'Chief', 'Cena', 'Cunningham', 'Simpson', 'Kitagawa', 'Waifu'
    );

    //Generate a random forename.
    $randomForename = $names[mt_rand(0, sizeof($names) - 1)];

    //Generate a random surname.
    $randomSurname = $surnames[mt_rand(0, sizeof($surnames) - 1)];

    //Combine them together.
    $newName = $randomForename . ' ' . $randomSurname;

    // Create an associative array to hold the generated name
    $response = array('newValue' => $newName);

    // Output the JSON data
    echo json_encode($response);
?>