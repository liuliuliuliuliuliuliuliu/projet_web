<?php
// These variables define the connection information for your MySQL database
protected static $localhost="localhost";
  protected static $dbname = "oumaima_jeddi";
  protected static $user = "oumaima.jeddi";
  protected static $password = "sfLVNUro";

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try { 
    $db = new PDO("mysql:host={$localhost}; dbname={$dbname}; charset=utf8",
                   $username, $password, $options);
} catch (PDOException $ex){
    die("Failed to connect to the database: " . $ex->getMessage());
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
header('Content-Type: text/html; charset=utf-8');
session_start();
$_SESSION["username"] = "xxx";
?>