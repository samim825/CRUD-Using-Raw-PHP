<?php
define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME', 'phpcrud');

$con=  mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
 
if(mysqli_connect_errno()){//mysqli_connect_errno() method define database no connect
    echo 'Failed to connect database' .  mysqli_connect_error();//return database connect error
}

?>

