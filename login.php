<?php
// Include the database connection file
require __DIR__ . '/dbh.inc.php';

session_start(); // Start a session to manage user login state

// Initialize variables for error messages
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  try {
    // Prepare the SQL statement
    $sql = "SELECT password FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
      // Password is correct, set session variables
      $_SESSION['username'] = $username;
      header("Location: write.php");
      exit();
    } else {
      // Password is incorrect
      $error_message = "Invalid username or password.";
    }
  } catch (PDOException $e) {
    $error_message = "Error: " . $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="media-queries.css">

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <style>
    .error-message {
      color: red;
      margin-top: 10px;
      font-size: 0.875em;
    }
  </style>
</head>

<body>
  <nav>
    <div class="main-nav nav flex">
      <a href="index.php" class="logo">
        <img src="./assets/logo.png" alt="logo" />
      </a>

      <!-- Hamburger Menu Button -->
      <div class="hamburger-menu" id="hamburger-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="nav-links" id="nav-links">
        <ul class="flex">
          <li><a class="hover-link" href="#home">Home</a></li>
          <li><a class="hover-link" href="index.php#featured">Featured Post</a></li>
          <li><a class="hover-link" href="blogs.php">Blogs</a></li>
          <li><a class="hover-link" href="index.php#contactus">Contact us</a></li>
          <li><a class="hover-link" href="write.php">Write</a></li>
          <a class="hover-link login login-btn" href="login.php">Login</a>
          ]
        </ul>
      </div>
    </div>
  </nav>
  <div class="login-body">
    <div class="wrapper">
      <form action="login.php" method="POST">
        <h1>Login</h1>

        <div class="input-box">
          <input type="text" name="username" placeholder="Username" required />
          <i class="bx bxs-user"></i>
        </div>

        <div class="input-box">
          <input type="password" name="password" placeholder="Password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>

        <?php if ($error_message): ?>
          <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
          <p>
            Don't have an account?
            <a href="signup.php">Register</a>
          </p>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>

</body>

</html>