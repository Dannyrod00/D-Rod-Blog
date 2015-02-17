<?php
require_once (__DIR__ . "/../model/Database.php");

$path = "/D-Rod-Blog/";

$host = "Localhost";
$username = "root";
$password = "root";
$database = "blog_db";

$connection = new Database($host, $username, $password, $database);


