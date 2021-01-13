<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mlbb";

try{
    $db = new PDO("mysql:host=$db_host;$db_name=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    die("Error : ".$e->getMessage());
}

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

?>  