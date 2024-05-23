<?php
  session_start();

  // redirect to index page if authenticated
  if (isset($_SESSION['authenticated'])) {
    header('Location: /index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>  
  <form action="/validate.php" method="POST">
    <div>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    <div>
    <button type="submit">Login</button>

    <?php if(isset($_SESSION['invalid_login'])): ?>
    <p>Invalid login. Try again.</p>
    <?php endif; ?>
    
      <p><a href="signup.php">Sign-up for an account</a></p>
  </form>
</body>
</html>