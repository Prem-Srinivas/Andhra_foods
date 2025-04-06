<?php
session_start();
$conn = new mysqli("localhost", "root", "", "andhra_foods");

$email = $_POST['email'];
$password = $_POST['password'];

$res = $conn->query("SELECT * FROM users WHERE email = '$email'");
if ($res->num_rows > 0) {
  $row = $res->fetch_assoc();
  if (password_verify($password, $row['password'])) {
    $_SESSION['user'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    header("Location: customer-profile.php");
  } else {
    echo "Incorrect password!";
  }
} else {
  echo "User not found!";
}
?>

