<?php

$fruits = ['apple', 'orange', 'pear'];

//? Get lenght
// echo count($fruits);

//? Search in array
// var_dump(in_array('apple', $fruits)); // true

//? Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawbarry');
array_unshift($fruits, 'mango');

//? Remove from array
array_pop($fruits); // from end
array_shift($fruits); // from beginning 
// unset($fruits[2]); // remove specific 

// Split into 2 chunks
$chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);
// print_r($fruits);

//? Concat arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
// print_r($arr3);
// print_r($arr4);

//? Combine arrays
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
// print_r($c);

//? Get keys
$keys = array_keys($c);
// print_r($keys);

//? Flip array (keys to values, values to keys)
$flipped = array_flip($c);
// print_r($flipped);


//? array_map
$numbers = range(1, 20);
// print_r($numbers);

$newNumbers = array_map(fn($x) => $x * 2, $numbers);
// print_r($newNumbers);

//? array_filter
$lessThan10 = array_filter($numbers, fn($x) => $x <= 10);
// print_r($lessThan10);

//? array_reduce
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);



