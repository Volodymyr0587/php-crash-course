<?php

date_default_timezone_set("Europe/Kyiv");

$age = 17;

// if ($age >= 18) {
//     echo "You are old enough to vote";
// } else {
//     echo "Sorry, you are not old enough to vote";
// }

$t = date("H");

// if ($t < 12) {
//     echo "Goo Morning";
// } elseif ($t < 17) {
//     echo "Good Afternoon";
// } else {
//     echo "Goo Evening";
// }

$posts = ['First Post'];

// if (! empty($posts)) {
//     foreach ($posts as $post) {
//         echo $post;
//     }
// } else {
//     echo 'No Posts Yet';
// }

//? Ternary operator
// echo !empty($posts) ? $posts[0] : 'No Posts Yet';

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts Yet';

//? Null coalescing operator 
// $firstPost = $posts[0] ?? 'No Posts Yet';

// echo $firstPost;

//? Switch operator
$favcolor = 'yellow';

switch ($favcolor) {
    case 'red':
        echo 'You favorite color is red';
        break;
    case 'blue':
        echo 'You favorite color is blue';
        break;
    case 'green':
        echo 'You favorite color is green';
        break;
    default:
        echo 'You favorite color is not red, green or blue';
        break;
}
