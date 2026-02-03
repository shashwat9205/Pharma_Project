<?php
include "config/db.php";
$message = "";

if (isset($_POST['send'])) {
    $email = trim($_POST['email']);

    // check user exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows === 1) {

        $token = bin2hex(random_bytes(32));
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        $update = $conn->prepare(
            "UPDATE users SET reset_token=?, reset_expires=? WHERE email=?"
        );
        $update->bind_param("sss", $token, $expires, $email);
        $update->execute();

        $message = "Reset link:<br>
        <a href='reset-password.php?token=$token'>Click here to reset password</a>";

    } else {
        $message = "If email exists, reset link will be sent.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h3>Forgot Password</h3>

<form method="POST">
    <input type="email" name="email" required>
    <button type="submit" name="send">Send Reset Link</button>
</form>

<p><?php echo $message; ?></p>

</body>
</html>
