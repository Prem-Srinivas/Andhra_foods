<?php
$conn = new mysqli("localhost", "root", "", "andhra_foods");

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$check = $conn->query("SELECT * FROM users WHERE email = '$email'");
if ($check->num_rows > 0) {
  echo "Email already exists!";
} else {
  $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
  echo "Signup successful! <a href='login.html'>Login now</a>";
}
?>
