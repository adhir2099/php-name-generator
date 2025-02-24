<?php

class NameGenerator
{
    private $firstNames = [
        'Alice', 'Bob', 'Charlie', 'David', 'Eva', 'Frank', 'Grace', 'Hank', 'Ivy', 'Jack',
        'Karen', 'Leo', 'Mona', 'Nina', 'Oscar', 'Paul', 'Quincy', 'Rachel', 'Steve', 'Tina'
    ];

    private $lastNames = [
        'Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Garcia', 'Miller', 'Davis', 'Rodriguez', 'Martinez',
        'Hernandez', 'Lopez', 'Gonzalez', 'Wilson', 'Anderson', 'Thomas', 'Taylor', 'Moore', 'Jackson', 'Martin'
    ];

    public function generateRandomName(): string
    {
        $randomFirstName = $this->firstNames[array_rand($this->firstNames)];
        $randomLastName = $this->lastNames[array_rand($this->lastNames)];

        return $randomFirstName . ' ' . $randomLastName;
    }
}

$nameGenerator = new NameGenerator();
// echo $nameGenerator->generateRandomName();