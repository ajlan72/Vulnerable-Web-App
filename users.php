<?php
$db = new PDO('sqlite:db.sqlite3');
$result = $db->query("SELECT username, password FROM users");
$users = $result->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <link rel="icon" href="icon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #e3e6e6;
        }
        header {
            background-color: #131921;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            color: white;
        }
        header img {
            height: 40px;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #131921;
        }
        .user-card {
            background: #f7f7f7;
            margin: 10px 0;
            padding: 12px 16px;
            border-left: 4px solid #febd69;
            border-radius: 6px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #febd69;
            padding: 10px 16px;
            border-radius: 4px;
            color: black;
            font-weight: bold;
        }
        a:hover {
            background-color: #f3a847;
        }
    </style>
</head>
<body>
    <header>
        <img src="amazinlogo.svg" alt="Amazin Logo">
        <h2 style="margin-left: 20px;">User Details</h2>
    </header>
    <div class="container">
        <h1>Registered Users</h1>
        <?php foreach ($users as $user): ?>
            <div class="user-card">
                Username: <?php echo htmlspecialchars($user['username']); ?><br>
                Password: <?php echo htmlspecialchars($user['password']); ?>
            </div>
        <?php endforeach; ?>
        <a href="index.php">← Back to Home</a>
    </div>
</body>
</html>
