<?php
    require_once 'generator.php';

    header('Content-Type: application/json');

    $generator = new NameGenerator();

    echo json_encode([
        'name' => $generator->generateRandomName()
    ]);
