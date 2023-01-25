<?php 
try{
  $db = new PDO('mysql:host=localhost;dbname=groupomania2','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// DATABASE 
$db->query("CREATE DATABASE IF NOT EXISTS groupomania2");

// USERS TABLE
$db->query("CREATE TABLE IF NOT EXISTS users (
  id int PRIMARY KEY,
  user VARCHAR(255),
  quote VARCHAR(255),
  email VARCHAR(255),
  imageprofile VARCHAR(255),
  password VARCHAR(255)
)");


?>