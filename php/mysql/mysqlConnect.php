<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 02/01/2017
 * Time: 20:17
 */
function connect($key) {

    if (md5($key) === '19f6106d958aa373e9d800b7a8ba7e50') {
    global $servername;
    global $username;
    global $password;
    global $dbname;

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "webdb";

 /*   global $conn;
    global $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } */
    }else {
     //   echo "An error occurred" . "<br>";
    }
}