<?php
$password = "123456";   // your test password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo $hashedPassword;
?>
