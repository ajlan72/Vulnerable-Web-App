<?php
$db = new PDO('sqlite:db.sqlite3');
$schema = file_get_contents('db.sql');
$db->exec($schema);
$db->exec("INSERT INTO users (username, password) VALUES ('admin', 'adminpass');");
echo "DB initialized.";
?>