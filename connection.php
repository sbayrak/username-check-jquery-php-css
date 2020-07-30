<?php


session_start();
try{
$db = new PDO("mysql:host=localhost;dbname=privatemessage","root","");
}
catch (PDOException $e) {
	print_r($e->getMessage());
}

?>