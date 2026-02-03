<?php
session_start();
include "config/db.php";

$error = "";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "All fields are required";
    } else {

        $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {

                // ✅ START SESSION
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];

                header("Location: index.php");
                exit();

            } else {
                $error = "Invalid password";
            }
        } else {
            $error = "User not found";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Login | Pharma Supply</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<section class="pharma-login-section">
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-lg-4 col-md-6">
        <div class="pharma-login-box">

          <h3>User Login</h3>
          <p class="text-muted">Access your B2B pharma account</p>

         <form method="POST">
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  </div>

  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">
  </div>

  <button type="submit" name="login" class="btn btn-success w-100">
    Login
  </button>
</form>


          <?php if(isset($error)) { ?>
  <p style="color:red; text-align:center;"><?php echo $error; ?></p>
<?php } ?>

          <div class="login-links">
            <a href="forgot-password.php">Forgot Password?</a>
            <span>|</span>
            <a href="register.php">Register</a>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

</body>
</html>
