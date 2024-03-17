<?php

//* ---------------- For Loop ---------------

/**
 * For Loop Syntax
 * for (initialize; condition; increment) {
 *     code to execute
 * }
 */

//  for ($i = 0; $i <= 10; $i++) {
//     echo 'Number ' . $i . '<br>';
//  }


//* ---------------- While Loop ---------------

/**
 * While Loop Syntax
 * while (condition) {
 *     code to execute     
 * } 
 */

// $x = 10;

// while ($x > 0) {
//     echo 'Number ' . $x . '<br>';
//     $x--;
// }


//* ---------------- Do While Loop ---------------

/** 
Do While Loop Syntax 
do {
    code to execute
} while (condition)

do...while loop will always execute the block of code once,
even if the condition is false
*/

// $x = 11;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x <= 10);


//* ---------------- Foreach Loop ---------------

// $posts = ['First Post', 'Second  Post', 'Third post'];

// foreach ($posts as $index => $post) {
//     echo "Post #$index: $post <br>";
// }

$person = [
    "first_name" => "Brad",
    "last_name" => "Smith",
    "email" => "brad@gmail.com",
];

foreach ($person as $key => $value) {
    echo "$key - $value<br>";
}