<?php
/**
 * Created with PhpStorm.
 * User: USUARIO
 * Date: 02/01/2017
 * Time: 20:50
 */
function getSqlTitle () {

global $conn;
global $servername;
global $username;
global $password;
global $dbname;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}// else { echo "BIEN CONECTADO JODER" . "<br>";}

$sql = "SELECT * FROM `webdb`.`titles` WHERE id= 2";
$result = $conn->query($sql);


if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["text"];
    }
} else {
    echo "0 results";
}
// ORDER BY `id` DESC
//  TODO: Aleatorizar esto de una vez
}