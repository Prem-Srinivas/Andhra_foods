<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.html");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Profile</title></head>
<body>
  <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
  <p>Email: <?php echo $_SESSION['email']; ?></p>
  <a href="logout.php">Logout</a>
</body>
</html>
