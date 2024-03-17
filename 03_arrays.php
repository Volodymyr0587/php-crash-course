<?php

define("BR","<br>");

// Simple array
$numbers = [1, 2, 3];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[1];

// Associative array
$hex = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF'
];

echo $hex['red'] . BR;

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@doe.com',
];

echo $person['first_name'] .' '. $person['last_name'] .' '. $person['email'] . BR;


// Multidemential array 
$people = [
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@doe.com',
    ],
    [
        'first_name' => 'Mike',
        'last_name' => 'Luis',
        'email' => 'mike@luis.com',
    ],
    [
        'first_name' => 'Ann',
        'last_name' => 'Hordon',
        'email' => 'ann@hondor.com',
    ],
];

var_dump(json_encode($people));
?>


<h1 style="color: <?= $hex['red'] ?>">Red</h1>


<ul>
    <?php foreach ($people as $person): ?>
        <li>
            <?= $person['first_name'] . ' ' . $person['last_name'] . ' ' . $person['email'] ?>
        </li>
    <?php endforeach; ?>
</ul>