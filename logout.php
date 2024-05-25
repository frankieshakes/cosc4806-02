<?php
  // destroy the session and its variables
  session_start();
  session_destroy();
  header('Location: /login.php');
?>