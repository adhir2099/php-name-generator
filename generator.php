<?php

    class NameGenerator
    {
        private array $firstNames = [
            'Alice', 'Bob', 'Charlie', 'David', 'Eva', 'Frank', 'Grace', 'Hank', 'Ivy', 'Jack',
            'Karen', 'Femto', 'Mona', 'Nina', 'Oscar', 'Paul', 'Quincy', 'Rachel', 'Steve', 'Tina',
            'Adhir', 'Uma', 'Vince', 'Wendy', 'Xander', 'Yara', 'Zack'
        ];

        private array $lastNames = [
            'Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Garcia', 'Miller', 'Davis', 'Rodriguez', 'Martinez',
            'Hernandez', 'Lopez', 'Gonzalez', 'Wilson', 'Anderson', 'Thomas', 'Taylor', 'Moore', 'Jackson', 'Martin',
            'Lee', 'Perez', 'Thompson', 'White', 'Harris', 'Sanchez'
        ];

        public function generateRandomName(): string
        {
            return $this->firstNames[array_rand($this->firstNames)]. ' ' . $this->lastNames[array_rand($this->lastNames)];
        }
    }