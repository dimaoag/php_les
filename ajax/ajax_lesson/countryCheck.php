<?php

$countries = [
    '1' => 'America',
    '2' => 'France',
    '3' => 'Germany',
    '4' => 'England',
    '5' => 'Portugal',
];

$one = [
    '1' => 'Los Angeles',
    '2' => 'Washington'
];

$two = [
    '1' => 'Paris',
    '2' => 'Lion'
];

$three = [
    '1' => 'Berlin',
    '2' => 'Bavaria'
];

$four = [
    '1' => 'London',
    '2' => 'Manchester'
];


if (isset($_POST['country'])){
    $country = $_POST['country'];
    switch ($country){
        case 1: echo json_encode($one); break;
        case 2: echo json_encode($two); break;
        case 3: echo json_encode($three); break;
        case 4: echo json_encode($four); break;
    }
}