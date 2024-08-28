<?php
// Debugging file path
$file_path = __DIR__ . '/dbh.inc.php';
if (file_exists($file_path)) {
  require $file_path;
} else {
  die("The file dhb.inc.php does not exist.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Hash the password for security
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  try {
    // Prepare the SQL statement
    $sql = "INSERT INTO users (name, username, password) VALUES (:name, :username, :password)";
    $stmt = $pdo->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
      $message = "Signup successful!";
    } else {
      $message = "There was an error during signup.";
    }
  } catch (PDOException $e) {
    $message = "Error: " . $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup Form</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="media-queries.css">

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
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
        </ul>
      </div>
    </div>
  </nav>

  <div class="login-body">
    <div class="wrapper">
      <form action="signup.php" method="POST">
        <h1>Signup</h1>

        <!-- Display a success or error message -->
        <?php if (isset($message)): ?>
          <p><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <div class="input-box">
          <input type="text" name="name" placeholder="Your Name" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="text" name="username" placeholder="Set Username" required />
          <i class="bx bxs-user"></i>
        </div>

        <div class="input-box">
          <input type="password" name="password" placeholder="Set Password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>

        <button type="submit" class="btn">Signup</button>
      </form>
    </div>
  </div>
  <script src="script.js"></script>

</body>

</html>