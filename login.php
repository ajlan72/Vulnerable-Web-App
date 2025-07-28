<?php
session_start();
$db = new PDO('sqlite:db.sqlite3');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($query);
    if ($result && $row = $result->fetch()) {
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row['id'];
        header("Location: profile.php?id=" . $row['id']);
        exit;
    } else {
      echo "<script>alert('Login failed');</script>";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
}
.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}
@media (min-width: 600px) {
  .container {
    max-width: 500px;
  }
}
.logo {
  text-align: center;
  margin-bottom: 30px;
}
.form-container {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 20px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
}
h1 {
  text-align: center;
  font-size: 28px;
  font-weight: 500;
  margin-bottom: 20px;
}
.input-field {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 20px;
  font-size: 14px;
}
.submit-btn {
  background: #f0c14b;
  border: none;
  color: #333;
  padding: 12px 20px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}
.submit-btn:hover {
  background: #d8ad40;
}
</style>
</head>
<body>
<div class="container">
  <div class="form-container">
      <center><h1>Sign in</h1>
                    <h2>Use your Amazin Account</h2></center>
      <form action="login.php" method="POST" id="login-form">
          <input name="username" class="input-field" type="text" placeholder="Username" required>
          <input name="password" class="input-field" type="password" placeholder="Password" required>
          <button class="submit-btn" type="submit">Continue</button>
      </form>
  </div>
</div>
</body>
</html>