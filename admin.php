<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="icon" href="icon.ico" type="image/png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
    }

    /* Sidebar */
    .sidebar {
      height: 100%;
      width: 250px;
      background-color: #232f3e; /
      color: white;
      padding-top: 20px;
      position: fixed;
      top: 0;
      left: 0;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 15px;
      text-decoration: none;
      font-size: 18px;
    }

    .sidebar a:hover {
      background-color: #37475a; /* Darker blue for hover effect */
    }

    /* Main content */
    .content {
      margin-left: 260px;
      padding: 20px;
    }

    /* Navbar */
    .navbar {
      background-color: #131921; 
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar h1 {
      margin: 0;
    }

    .navbar img {
      width: 100px;
      height: auto;
    }

    /* Admin Info Section */
    .admin-info {
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .admin-info h2 {
      margin-top: 0;
    }

    .admin-info .welcome-text {
      font-size: 28px;
      font-weight: bold;
      color: #232f3e; 
      text-align: center;
      margin-bottom: 20px;
    }

    .button {
      background-color: #f0c14b; 
      border: none;
      color: #333;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
    }

    .button:hover {
      background-color: #d8ad40; /* Darker yellow on hover */
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2 style="text-align:center; color:white;">Admin Panel</h2>
    <a href="#">Dashboard</a>
    <a href="users.php">User Management</a>
    <a href="#">Orders</a>
    <a href="#">Reports</a>
    <a href="#">Settings</a>
    <a href="logout.php">Logout</a>
  </div>

  <!-- Main Content Area -->
  <div class="content">

    <!-- Navigation Bar -->
    <div class="navbar">
      <img src="amazinlogo.svg" alt="Amazin Logo">
      <h1>Amazin Admin Dashboard</h1>
      <a href="index.php" class="p">Home</a>
    </div>

    <!-- Admin Info Section -->
    <div class="admin-info">
      <div class="welcome-text">Welcome to the Admin Panel</div>
      <p style="text-align:center;">Here you can manage users, view reports, and configure the system settings.</p>
      <div style="text-align:center;">
        <a href="users.php"><button class="button">Manage Users</button></a>
        <button class="button">View Reports</button>
      </div>
    </div>

  </div>

<style>
    .p {
        color: white;
    }
</style>

</body>
</html>
