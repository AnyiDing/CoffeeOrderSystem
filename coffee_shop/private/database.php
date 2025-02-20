
<!--this file is written by Luo Qinyu -->
<?php
require_once('db_credentials.php');
//conncet to the database
//then confirm the connection otherwise return error
function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno()){
        $msg = "Database connection failed: ";
        $msg .=mysqli_connect_error();
        $msg .="(".mysqli_connect_errno().")";
        exit($msg);
    }

    return $connection;
}

//define function disconnect
function db_disconnect($connection){
    if (isset($connection)){
        mysqli_close($connection);
    }
}

?>