<?php
$id = $_GET['id'];
if ($id == 1) {
    header("Location: admin.php");
    exit;
} elseif ($id == 2) {
    header("Location: john.php");
    exit;
} elseif ($id == 3) {
    header("Location: michael.php");
    exit;
} else {
    echo "User not found";
}
?>