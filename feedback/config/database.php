<?php 

//*FOR MYSQL 
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'feedback');

// // CREATE CONNECTION MySQL
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// // CHECK CONNECTION
// if ($conn->connect_error) {
//     die('Connection Faild '. $conn->connect_error);
// }

// // echo 'CONNECTED!';


$conn = new PDO('sqlite:/home/volodymyr/Desktop/websites/php_tutorial/PHPForBeginners /feedback/database/database.sqlite');
