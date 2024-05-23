<?php

  session_start();

  // redirect to login page if not authenticated
  if (!isset($_SESSION['authenticated'])) {
    header('Location: /login.php');
  }

  echo "Welcome back, " . $_SESSION['username'] . '!';
?>