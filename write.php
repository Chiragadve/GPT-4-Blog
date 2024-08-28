<?php
session_start();
require __DIR__ . '/dbh.inc.php'; // Include the database connection file

$logged_in = isset($_SESSION['username']);
$username = $logged_in ? $_SESSION['username'] : ''; // Get the username if logged in

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($logged_in) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imagePath = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
      $imageTmpName = $_FILES['image']['tmp_name'];
      $imageName = basename($_FILES['image']['name']);
      $uploadDir = 'blogassets/';
      $uploadFile = $uploadDir . $imageName;

      if (move_uploaded_file($imageTmpName, $uploadFile)) {
        $imagePath = $uploadFile;
      }
    }

    try {
      $sql = "INSERT INTO posts (title, content, image, username) VALUES (:title, :content, :image, :username)";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':content', $content);
      $stmt->bindParam(':image', $imagePath);
      $stmt->bindParam(':username', $username);
      $stmt->execute();
      $message = "Post successfully created!";
    } catch (PDOException $e) {
      $message = "Error: " . $e->getMessage();
    }
  } else {
    $message = "You must be logged in to create a post.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write Post</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media-queries.css">

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
  <section>
    <div class="container write-section">
      <div>
        <h2>Draft</h2>
        <?php if ($logged_in): ?>
          <p style="margin: 10px">Welcome, <?php echo htmlspecialchars($username); ?>!</p>
        <?php endif; ?>
      </div>
      <div>
        <?php if (isset($message)): ?>
          <p><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <form action="write.php" method="POST" enctype="multipart/form-data">
          <input type="text" name="title" placeholder="Title" class="write-title" required>
          <textarea name="content" placeholder="Write Your Article" class="write-blog" required></textarea>
          <p style="margin-top: 30px">Please provide an image as a banner for your post</p>
          <input type="file" name="image" style="display: block" required>
          <input type="submit" class="primary-button write-submit" value="POST">
        </form>
      </div>
    </div>
  </section>
  <script src="script.js"></script>

</body>

</html>