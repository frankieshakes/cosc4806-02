<?php

require_once('db.php');

class User {
  static function get_all_users() {
    $db = db_connect();
    $stmt = $db->prepare('SELECT * FROM users');
    $stmt->execute();
    $users = $stmt->fetch(PDO::FETCH_ASSOC);
    return $users;
  }
}