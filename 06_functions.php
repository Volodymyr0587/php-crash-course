<?php 

function registerUser($email) {
    echo "$email User registered";
}

// registerUser('user@gmail.com');

function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
}

// echo sum(12, 24);
// echo sum();

// Anonimus functions 
$substuct = function ($x, $y) {
    return $x - $y;
};

// echo $substuct(142, 5);

$multiply = fn ($x, $y) => $x * $y;

echo $multiply(10, 5);