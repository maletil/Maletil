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

$sql = "SELECT MAX(id)FROM `webdb`.`titles`";
$result = $conn->query($sql);


if (!$result) {
    echo "Error en el resultado";
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $maxid = $row["MAX(id)"];
        $ouputnumber = mt_rand(1, $maxid);
    }
}
    $sql = "SELECT * FROM `webdb`.`titles` WHERE id= " . $ouputnumber. "";
    $result = $conn->query($sql);

    if (!$result) {
        echo "Error en el resultado";
    }
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["text"];
        }
    }

}