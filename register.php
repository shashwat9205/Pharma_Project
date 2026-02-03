<?php
include "config/db.php";

$message = "";

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $role = 'buyer'; 


    if (empty($name) || empty($email) || empty($password)) {
        $message = "All fields are required";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $checkEmail = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
        if (mysqli_num_rows($checkEmail) > 0) {
            $message = "Email already registered";
        } else {
            $insert = mysqli_query(
                $conn,
                "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$hashedPassword', '$role')"
            );

            if ($insert) {
                header("Location: login.php");
                exit;
            } else {
                $message = "Registration failed";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Register | Pharma Supply</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-5">
            <div class="card shadow p-4">
                <h3 class="text-center mb-3">Create Account</h3>

                <?php if ($message): ?>
                    <div class="alert alert-danger"><?php echo $message; ?></div>
                <?php endif; ?>

                <form method="POST">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button name="register" class="btn btn-success w-100">
                        Register
                    </button>

                    <p class="text-center mt-3">
                        Already have an account?
                        <a href="login.php">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
