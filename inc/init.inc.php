<?php

$mysqli = new mysqli("localhost", "db_user", "12345", "monecommerce");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);

session_start();

define("RACINE_SITE", "http://" . $_SERVER['HTTP_HOST'] . "/");