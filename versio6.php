<?php

$person1 = [
    'name'  => 'Eric Garcia',
    'city'  => 'Tortosa',
    'gender'=> 'Home'
];

$person2 = [
    'name'  => 'Claudia Garcia',
    'city'  => 'Barcelona',
    'gender'=> 'Home'
];

$person3 = [
    'name'  => 'Hector Garcia',
    'city'  => 'Alcanar',
    'gender'=> 'Home'
];

$persons = [
    $person1,
    $person2,
    $person3
];

$persons = [
    [
        'name'  => 'Eric Garcia',
        'city'  => 'Tortosa',
        'gender'=> 'Home'
    ],
    [
        'name'  => 'Claudia Garcia',
        'city'  => 'Barcelona',
        'gender'=> 'Home'
    ],
    [
        'name'  => 'Hector Garcia',
        'city'  => 'Alcanar',
        'gender'=> 'Home'
    ]
];

require 'versio5.view.php';