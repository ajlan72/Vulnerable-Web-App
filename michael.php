<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard - Amazin Style</title>
  <link rel="icon" href="icon.ico" type="image/png" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #eaeaea;
      display: flex;
    }

    header {
      background-color: #131921;
      color: white;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      position: fixed;
      top: 0;
      width: 100%;
      height: 60px;
      z-index: 1000;
    }

    .nav-links {
      margin-left: auto;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      margin: 0 50px;
      font-weight: bold;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    .sidebar {
      width: 200px;
      background-color: #232f3e;
      color: white;
      padding-top: 70px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 15px 20px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #37475a;
    }

    .main-content {
      margin-left: 200px;
      padding: 100px 20px 20px 20px;
      width: 100%;
    }

    .card {
      background-color: white;
      border-radius: 8px;
      padding: 20px;
      margin: auto;
      width: 600px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
      text-align: center;
    }

    .card a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #007185;
      font-weight: bold;
    }

    .card a:hover {
      text-decoration: underline;
    }


    h2 {
 font-size: 50px;
}


  </style>
</head>
<body>

  <header>
    <a href="index.php"><img src="amazinlogo.svg" alt="Amazin" style="height:40px;" /></a>
    <nav class="nav-links">
      <a href="index.php">Home</a>
    </nav>
  </header>

  <div class="sidebar">
    <a href=""></a>
    <a href="#">Manage Orders</a>
    <a href="#">Past Orders</a>
    <a href="#">Your Settings</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="main-content">
    <div class="card">
      <h1>Welcome to Your Dashboard</h1>
      <h2>Michael</h2>
      <p>Manage your account settings and preferences here.</p>
      <a href="login.php">Change Password</a>
    </div>
  </div>

</body>
</html>
