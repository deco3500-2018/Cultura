<?php

$link = mysqli_connect("localhost", "glitch", "root", "glitch_final");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

//mysqli_close($link);

// define('db_user', 'root');
// define('db_password', '');
// define('db_host', 'localhost');
// define('db_name', 'glitch');

// $dbc = @mysql_connect(db_host, db_user, db_password) OR die('Could not connect to MySQL: '. mysql_error());

// @mysql_select_db(db_name) OR die('Could not select the database: '. mysql_error());

// function escape_data($data) {
// 	global $dbc;
// 	if(ini_get('magic_quotes_gpc')){
// 		$data = stripslashes($data);
// 	}

// 	return mysql_real_escape_string(trim($data), $dbc);
// }

?>