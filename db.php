<?php

require_once('config.php');

function db_connect() {
  try {
    return new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
  }
}

?>