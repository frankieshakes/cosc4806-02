<?php

  require_once('user.php');

  session_start();

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  // check if the username and password are valid
  if (User::verify_user($username, $password)) {
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;

    header('Location: /index.php');
  } else {
    // invalid login, let's add and/or increment the attempts counter
    $_SESSION['invalid_login'] = true;

    header('Location: /login.php');
  }
?>