<?php
include "config/db.php";
$message = "";

if (!isset($_GET['token'])) {
    die("Invalid request");
}

$token = $_GET['token'];



$currentTime = date("Y-m-d H:i:s");

$stmt = $conn->prepare(
    "SELECT id FROM users 
     WHERE reset_token=? 
     AND reset_expires > ?"
);
$stmt->bind_param("ss", $token, $currentTime);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows !== 1) {
    die("<span style='color:red'>Invalid or expired reset link</span>");
}

$user = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $newPass = $_POST['password'];
    $hashed = password_hash($newPass, PASSWORD_DEFAULT);

    $update = $conn->prepare(
        "UPDATE users 
         SET password=?, reset_token=NULL, reset_expires=NULL 
         WHERE id=?"
    );
    $update->bind_param("si", $hashed, $user['id']);
    $update->execute();

    echo "Password updated successfully. <a href='login.php'>Login</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<h3>Reset Password</h3>

<form method="POST">
    <input type="password" name="password" required>
    <button type="submit" name="update">Update Password</button>
</form>

</body>
</html>
