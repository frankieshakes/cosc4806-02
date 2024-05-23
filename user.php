<?php

require_once('db.php');

class User {
  static function get_all_users() {
    $db = db_connect();
    $stmt = $db->prepare('SELECT * FROM users');
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
  }

  static function create_user($username, $password) {
    
  }

  static function verify_user($username, $password) {
      $db = db_connect();
      $stmt = $db->prepare('SELECT * FROM users where username = :username LIMIT 1');
      $stmt->bindParam(':username', $username);
      $stmt->execute();
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      if (password_verify($password, $user['password'])) {
        return true;
      }
      return false;
  }
}