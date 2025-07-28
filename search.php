<?php
$db = new PDO('sqlite:db.sqlite3');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = $_POST['comment'];
    $stmt = $db->prepare("INSERT INTO comments (content) VALUES (:content)");
$stmt->bindParam(':content', $content);
$stmt->execute();

}
$comments = $db->query("SELECT * FROM comments");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amazin.com. Spend less. Smile more.</title>
    <link rel="icon" href="icon.ico" type="image/png">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }

        .container {
            position: absolute;
            top: 120px;
            padding: 200px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product {
            background-color: white;
            padding: 10px;

            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .product:hover {
            transform: scale(1.02);
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        header {
            background-color: #131921;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-flex {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .location {
            font-size: 14px;
            line-height: 1.2;
            color: white;
            text-align: center;
            border-radius: 8px;
            padding: 0 9px 0 9px;
            margin: 5px 2px 5px 0;
        }

        .location-icon {
            position: absolute;
            top: 22px;
            left: 178px;
            height: 21px;
        }

        .location-text span {
            font-size: 12px;
            position: absolute;
            top: 15px;
            left: 200px;
        }

        .location-text strong {
            font-size: 15px;
            position: absolute;
            top: 29px;
            left: 201px;
        }

        .main-search {
            padding-right: 100px;
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 1300px;
        }

        .main-search button[type="button"] {
            padding: 0;
            border: none;
            background: none;
            cursor: pointer;
        }

        .search-wrapper {
            position: relative;
            flex: 1;
            left: 60px;
        }

        .search-wrapper input[type="text"] {
            width: 100%;
            padding: 10px 45px 10px 12px;
            border-radius: 4px;
            border: none;
            font-size: 14px;
            outline: none;
            box-shadow: none;
        }

        .search-wrapper .search-btn {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 45px;
            background-color: #febd69;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;   
        }

        .search-wrapper .search-btn img {
            position: absolute;
            top: 5.5px;
            height: 30px;
        }

        .aicam {
            position: absolute;
            top: 14px;
            right: 19.4%;
            width: 36px;
            border-radius: 4px;
            border: none;
            outline: none;
            background: none;
        }

        .sign {
            color: white;
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: 13px;
            line-height: 14px;
            position: relative;
            right: 35px;
        }

        .sign:hover {
            transform: scale(1.05);
        }


        .orders {
            line-height: 1.2;
            color: white;
            text-align: center;
            border-radius: 8px;
            padding: 0 9px 0 9px;
            margin: 5px 2px 5px 0;
        }

        .orders span {
            font-size: 13px;
            position: absolute;
            top: 15px;
            right: 142px;
        }

        .orders strong {
            font-size: 15px;
            position: absolute;
            top: 30px;
            right: 123px;
        }


        /* Style for the cart icon */
        .cart {
            display: inline-block;
            width: 40px; /* Adjust the size as needed */
            height: 40px; /* Adjust the size as needed */
            margin-left: 20px; /* Space between the sign-in and cart */           
        }

        .cart-img {
            transition: transform 0.3s ease;
            position: absolute;
            right: 42px;
            height: 38px;
        }


        .cart strong {
            font-size: 15px;
            position: absolute;
            top: 30px;
            right: 25px;
        }


        .modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background-color: rgba(0,0,0,0.6);
}
.modal-content {
  background: white;
  margin: 10% auto;
  padding: 20px;
  width: 50%;
  border-radius: 8px;
  position: relative;
}
.close {
  position: absolute;
  top: 10px; right: 20px;
  font-size: 24px;
  cursor: pointer;
}


.bg {
    position: absolute; /* Position it relative to the viewport */
    margin-left: 10%;
    margin-right: 10%;
    width: 80%; /* Cover the full width */
    background-image: url('bg.jpg'); /* Your image */
    background-size: cover; /* Make sure the image covers the screen */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Don't repeat the image */
    position: absolute;
    z-index: -1; /* Keep it behind all other elements */
}

.loading-screen {
      margin-top: 100px;
      text-align: center;
    }

    .loader {
      border: 8px solid #f3f3f3;
      border-top: 8px solid #febd69;
      border-radius: 50%;
      width: 80px;
      height: 80px;
      animation: spin 1s linear infinite;
      margin: 30px auto;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .loading-text {
      font-size: 18px;
      color: #555;
    }

    .div {
        padding-top: 12200px;
        max-width: 5px;
    }


    </style>
</head>
<body>
<header>
    <a href="index.php"><img src="amazinlogo.svg" alt="Logo" style="height:40px;"></a>
    <div class="delivery-location">
        <img src="loc.svg" alt="Location Icon" class="location-icon">
        <div class="location-text">
            <span>Deliver to</span><br>
            <strong>India</strong>
        </div>
    </div>
    <form class="main-search" action="search.php" method="POST" enctype="multipart/form-data" id="uploadForm">
    <div class="search-wrapper">
        <input type="text" name="comment" placeholder="Search Amazin">
        <button type="submit" class="search-btn">
            <img src="search.svg" alt="Search">
        </button>
    </div>
    <input type="file" name="file" style="display:none;" id="fileUpload">
    <button type="button" onclick="document.getElementById('fileUpload').click()"> 
        <img src="aicam.svg" class="aicam"> 
    </button>
</form>

<a href="<?php echo isset($_SESSION['user_id']) ? 'profile.php?id=' . $_SESSION['user_id'] : 'login.php'; ?>" class="sign" style="color:white; text-decoration:none;">
    Hello, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'sign in'; ?><br>
    <strong>Accounts & Lists</strong>
</a>

<div class="orders">
            <span>Returns</span><br>
            <strong>& Orders</strong>
        </div>

    <!-- Cart Icon Added Here -->
    <div class="cart">
        <img src="cart.svg" alt="Cart" class="cart-img">
        <strong>Cart</strong>
    </div>
</header>

<!-- Loading screen -->
<div class="loading-screen">
  <div class="loader"></div>
  <div class="loading-text">Loading Products...</div>
</div>
<div class="div"><footer> <img src="amazinlogo.svg" alt=""></footer></div>
</body>
</html>



<?php foreach ($comments as $comment): ?>
    <p><?= $comment['content'] ?></p>
<?php endforeach; ?>