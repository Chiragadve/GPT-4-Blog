<?php
require __DIR__ . '/dbh.inc.php'; // Include the database connection file

$title = '';
$content = '';
$postTitle = isset($_GET['title']) ? $_GET['title'] : '';

if ($postTitle) {
  try {
    // Prepare the SQL statement to fetch the post by title
    $sql = "SELECT title, content FROM posts WHERE title = :title";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $postTitle, PDO::PARAM_STR);
    $stmt->execute();

    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($post) {
      $title = htmlspecialchars($post['title']);
      $content = htmlspecialchars($post['content']);

      // Split content into lines
      $lines = explode("\n", $content);
      $newContent = '';

      // Add a line break after every 10 lines
      for ($i = 0; $i < count($lines); $i++) {
        $newContent .= $lines[$i] . "\n";
        if (($i + 1) % 10 == 0) {
          $newContent .= "<br>";
        }
      }

      // Convert newlines to <br> for HTML display
      $content = nl2br($newContent);
    } else {
      $title = 'Post not found';
      $content = '';
    }
  } catch (PDOException $e) {
    $title = 'Database Error';
    $content = 'Could not retrieve post: ' . $e->getMessage();
  }
} else {
  $title = 'Invalid post title';
  $content = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($title); ?></title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <div class="main-nav nav flex">
      <a href="index.php" class="logo"><img src="./assets/logo.png" alt="logo"></a>
      <div class="nav-links">
        <ul class="flex">
          <li><a class="hover-link" href="index.php">Home</a></li>
          <li><a class="hover-link" href="index.php#featured">Featured Post</a></li>
          <li><a class="hover-link" href="#">Blogs</a></li>
          <li><a class="hover-link" href="index.php#contactus">Contact us</a></li>
          <li><a class="hover-link" href="write.php">Write</a></li>
          <li><a class="hover-link login login-btn" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="read-blog">
    <div class="container">
      <div class="read-blog-section flex">
        <h2 class="blog-title"><?php echo $title; ?></h2>
        <p><?php echo $content; ?></p>
      </div>
    </div>
  </section>
</body>

</html>