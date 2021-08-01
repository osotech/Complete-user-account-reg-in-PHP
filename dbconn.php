<?php

//connection params

const DB_HOST ="localhost";
const DB_USER ="root";
const DB_PASS ="";
const DB_NAME = "testing_account_youtube";
const CHARSET_NAME ="utf8mb4";

//DSN Data Source Name

function dbConnect(){
try {
  $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".CHARSET_NAME;
  $dbh = new PDO ($dsn,DB_USER,DB_PASS);
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
  return $dbh;
} catch (PDOException $e) {
  die("Connection Failed :". $e->getMessage());
}

}



 ?>
