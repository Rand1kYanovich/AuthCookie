<?php
include "pdo.php";

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);
setcookie("login",$login,time()+60*60);
setcookie("password",$password,time()+60*60);
$secretkey = "hihji";

$request = "INSERT INTO Reg SET login = ?, password = ?,secretkey = ?";
$sql = $dbh->prepare($request);
$sql->bindParam(1,$login);
$sql->bindParam(2,$password);
$sql->bindParam(3,$secretkey);

$sql->execute();






header("Location: https://cookieandSess/home.php");