<?php
$heading = $_GET['heading'];
$imgSrc = $_GET['imgSrc'];
$imgAlt = $_GET['imgAlt'];
$articleText = $_GET['articleText'];
$time = $_GET['time'];

require_once "connect.php";
$statement = $dbh->prepare("INSERT INTO articles (imgSrc, imgAlt, heading, time, articleText) values(?, ?, ?, ?, ?)");
$statement->bindParam(1, $imgSrc);
$statement->bindParam(2, $imgAlt);
$statement->bindParam(3, $heading);
$statement->bindParam(4, $time);
$statement->bindParam(5, $articleText);
$statement->execute();

header("location: index.php");
?>