<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 02/01/2017
 * Time: 20:17
 */
function connect($key) {

    if ($key == "abesamelaja") {
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
     //   echo "MIERDA ESTO NO VA NI A TIROS" . "<br>";
    }
}