<?php
require __DIR__ . '/dbh.inc.php'; // Include the database connection file

// Fetch all posts from the database
try {
  $sql = "SELECT title, image, username FROM posts";
  $stmt = $pdo->query($sql);
  $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Error fetching posts: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Blogs</title>
  <style>
    /* Inline CSS to control visibility based on logged_in status */
    .login-btn {
      display: <?php echo $logged_in ? 'none' : 'inline-block'; ?>;
    }

    /* Flexbox styles for wrapping cards */
    .blogs-section-cards {
      display: flex;
      flex-wrap: wrap;
      /* Allow items to wrap to the next line */
      gap: 16px;
      /* Space between cards */
    }

    .card.small-card {
      flex: 1 1 300px;
      /* Flex-grow, flex-shrink, and base size */
      box-sizing: border-box;
      /* Include padding and border in the element’s total width and height */
      min-width: 300px;
      /* Minimum width for each card */
      /* max-width: calc(33.333% - 16px); */
      /* Ensure cards do not exceed this width, adjusted for gap */
    }

    /* Optional: Adjust image and content styling */
    .card img {
      width: 100%;
      /* Ensure images scale to fit card width */
      height: auto;
      /* Maintain aspect ratio */
    }

    .card-content {
      padding: 16px;
      /* Adjust padding as needed */
    }
  </style>
</head>

<body>
  <nav>
    <div class="main-nav nav flex">
      <a href="index.php" class="logo"><img src="./assets/logo.png" alt="logo"></a>
      <div class="nav-links">
        <ul class="flex">
          <li><a class="hover-link" href="index.php">Home</a></li>
          <li><a class="hover-link" href="index.php#featured">Featured Post</a></li>
          <li><a class="hover-link" href="blogs.php">Blogs</a></li>
          <li><a class="hover-link" href="index.php#contactus">Contact us</a></li>
          <li><a class="hover-link" href="write.php">Write</a></li>
          <li>
            <a class="hover-link login login-btn" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="blogs-card">
    <h2 class="latest-blogs">Latest Blogs</h2>

    <div class="container flex blogs-section-cards">
      <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
          <div class="card small-card">
            <a href="read.php?title=<?php echo urlencode($post['title']); ?>">
              <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="Blog Image">
              <div class="card-content">
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><strong>Author:</strong> <?php echo htmlspecialchars($post['username']); ?></p>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>No blogs available at the moment.</p>
      <?php endif; ?>
    </div>
  </section>
</body>

</html>