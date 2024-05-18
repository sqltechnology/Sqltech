<?php
require "../../../db.php";
$name = $_POST['name'];
$pasw = $_POST['password'];
$mai = $_POST['email'];


$today = new DateTime("now", new DateTimeZone('Europe/Moscow') );
$newdate123 =  $today->format('Y-m-d');

$res = $conn->query(
    "INSERT INTO `Users`(`name`,`email`,`password`) VALUES('$name','$mai','$pasw');");

$nw = $conn->query("SELECT * FROM Users where email LIKE '$mai'");
foreach ($nw as $row) {
    $dd = $row['id'];
}

setcookie('sqpass',$dd,0,"/");
header("Location: https://sql-tec.ru/registration");


?>