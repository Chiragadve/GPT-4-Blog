<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="media-queries.css" />
  <link rel="shortcut icon" href="https://cdn.iconscout.com/icon/free/png-256/free-robot-icon-download-in-svg-png-gif-file-formats--bot-customer-help-support-automatic-pack-people-icons-415007.png" type="image/x-icon">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>GPT-4 Blog Website</title>


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
          <li><a class="hover-link" href="#featured">Featured Post</a></li>
          <li><a class="hover-link" href="blogs.php">Blogs</a></li>
          <li><a class="hover-link" href="#contactus">Contact us</a></li>
          <li><a class="hover-link" href="write.php">Write</a></li>
          <a role="button" class="hover-link login login-btn" href="login.php">Login</a>
        </ul>
      </div>
    </div>
  </nav>


  <header id="home">
    <div class="container header-section flex">
      <div class="header-left">
        <h1>
          Explore Learn and Write with GPT-4
        </h1>
        <p>
          Welcome to the GPT-4 Blog Hub! Explore the latest developments in
          GPT technology with our in-depth articles and updates. Our platform
          not only provides comprehensive insights into the newest GPT
          versions but also allows you to share your own stories. Join our
          community of AI enthusiasts to read, write, and engage with content
          that shapes the future of artificial intelligence.
        </p>
        <a href="signup.php" class="getstarted-btn">Get Started &rArr;</a>
      </div>

      <div class="header-right animate__animated">
        <img src="assets/Hero.png" alt="hero image" />
      </div>
    </div>
  </header>

  <section class="container popular-tags-section">
    <h1>Popular GPT's</h1>
    <p>Most Searched GPT</p>
    <ul class="tags-container">
      <a href="https://chatgpt.com/g/g-HxPrv1p8v-code-tutor" target="_blank" role="button" class="tag-item">
        <img src="./assets/code tutor.png" alt="Code Tutor Logo" />
        Tutor GPT
      </a>
      <a href="https://chatgpt.com/g/g-9YeZz6m6k-math-solver" target="_blank" role="button" class="tag-item">
        <img src="./assets/math-solver-logo.png" alt="Math Solver Logo" />
        Math GPT
      </a>
      <a href="https://chatgpt.com/g/g-kZ0eYXlJe-scholar-gpt" target="_blank" role="button" class="tag-item">
        <img src="./assets/scholar-gpt-logo.webp" alt="Scholar GPT Logo" />
        Scholar
      </a>
      <a href="https://chatgpt.com/g/g-alKfVrz9K-canva" target="_blank" role="button" class="tag-item">
        <img src="./assets/canva.png" alt="Canva Logo" />
        Canva
      </a>
      <a href="https://chatgpt.com/g/g-bo0FiWLY7-consensus" target="_blank" role="button" class="tag-item">
        <img src="./assets/consensus.png" alt="Consensus Logo" />
        Consensus
      </a>
      <a href="https://chatgpt.com/g/g-2DQzU5UZl-code-copilot" target="_blank" role="button" class="tag-item">
        <img src="./assets/copilot.png" alt="Copilot Logo" />
        Copilot
      </a>
      <a href="https://chatgpt.com/g/g-5QhhdsfDj-diagrams-show-me-for-presentations-code-excel" target="_blank" role="button" class="tag-item">
        <img src="./assets/diagram.jpg" alt="Diagram Logo" />
        Diagram
      </a>
      <a href="https://chatgpt.com/g/g-cKXjWStaE-python" target="_blank" role="button" class="tag-item">
        <img src="./assets/python.png" alt="Python Logo" />
        Python
      </a>
      <a href="https://chatgpt.com/g/g-Hkqnd7mFT-video-gpt-by-veed" target="_blank" role="button" class="tag-item">
        <img src="./assets/veed.png" alt="Video GPT Logo" />
        Video
      </a>
      <a href="https://chatgpt.com/g/g-Ji2QOyMml-copywriter-gpt-marketing-branding-ads" target="_blank" role="button" class="tag-item">
        <img src="./assets/copyrighter.jpeg" alt="Copywriter GPT Logo" />
        Copyrighter
      </a>
      <a href="https://chatgpt.com/g/g-R6VqLNHFM-excel-ai" target="_blank" role="button" class="tag-item">
        <img src="./assets/excel.jpeg" alt="Excel AI Logo" />
        Excel
      </a>
      <a href="https://chatgpt.com/g/g-O5mNWQGMa-market-research-and-competitive-analysis-gpt" target="_blank" role="button" class="tag-item">
        <img src="./assets/marketing.jpeg" alt="Marketing GPT Logo" />
        Marketing
      </a>
    </ul>

  </section>

  <!-- Editor's Pick Section -->
  <section id="featured" class="container editors-picked">
    <h1>Editor's Picked</h1>
    <p>Featured and highly rated articles</p>
    <div class="editor-container flex">
      <div class="card big-card">
        <img src="./assets/image-generator.png" alt="Image Generator Tool" />
        <div class="card-content">
          <div class="card-title">
            <a href="read.php?title=Unleashing%20Creativity%20with%20the%20Image%20Generator%20Tool">
              Unleashing Creativity with the Image Generator Tool
            </a>
          </div>
          <div class="card-footer">
            <a href="read.php?title=Unleashing%20Creativity%20with%20the%20Image%20Generator%20Tool">Read more</a>
          </div>
          <div class="card-author">
            <img class="user-circle" src="./assets/login.png" alt="Author" />
            <span>Chirag</span>
            <span style="margin-left: auto">25 May 2024</span>
          </div>
        </div>
      </div>
      <div class="card big-card">
        <img src="./assets/plantly.png" alt="Self-observation" />
        <div class="card-content">
          <div class="card-title">
            <a href="read.php?title=Meet%20Planty:%20Your%20Friendly%20Plant%20Care%20Guide">
              Meet Planty: Your Friendly Plant Care Guide
            </a>
          </div>
          <div class="card-footer">
            <a href="read.php?title=Self-observation%20is%20the%20first%20step%20of%20inner%20unfolding">Read more</a>
          </div>
          <div class="card-author">
            <img class="user-circle" src="./assets/login.png" alt="Author" />
            <span>Chirag</span>
            <span style="margin-left: auto">03 Jan 2024</span>
          </div>
        </div>
      </div>
    </div>

    <div class="lower-card-section">
      <div class="editor-container flex">
        <div class="card small-card">
          <img src="./assets/copyrighter.jpeg" alt="Self-observation" />
          <div class="card-content">
            <div class="card-title">
              <a href="read.php?title=How%20Copywriter%20GPT%20is%20Changing%20Marketing">
                How Copywriter GPT is Changing Marketing
              </a>
            </div>
            <div class="card-footer">
              <a href="read.php?title=How%20Copywriter%20GPT%20is%20Changing%20Marketing">Read more
            </div>
            <div class="card-author">
              <img class="user-circle" src="./assets/login.png" alt="Author" />
              <span>chirag</span>
            </div>
          </div>
        </div>
      </div>

      <div class="editor-container flex">
        <div class="card small-card">
          <img src="./assets/seo-img.webp" alt="Self-observation" />
          <div class="card-content">
            <div class="card-title">
              <a href="read.php?title=Canva%20GPT:%20Your%20Ultimate%20Design%20Assistant">
                Unleash GPT: The Ultimate SEO Content Generator
              </a>
            </div>
            <div class="card-footer">
              <a href="read.php?title=Canva%20GPT:%20Your%20Ultimate%20Design%20Assistant">Read more</a>
            </div>
            <div class="card-author">
              <img class="user-circle" src="./assets/login.png" alt="Author" />
              <span>chirag</span>
            </div>
          </div>
        </div>
      </div>

      <div class="editor-container">
        <div class="card small-card">
          <img src="./assets/veed.png" alt="Self-observation" />
          <div class="card-content">
            <div class="card-title">
              <a href="read.php?title=Unleashing%20Creativity%20with%20VEED%20Video%20GPT">
                Unleashing Creativity with VEED Video GPT
              </a>
            </div>
            <div class="card-footer">
              <a href="read.php?title=Unleashing%20Creativity%20with%20VEED%20Video%20GPT">Read more</a>
            </div>
            <div class="card-author">
              <img class="user-circle" src="./assets/login.png" alt="Author" />
              <span>chirag</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Post Section  -->

  <section class="recent-post">
    <div class="container">
      <h1>Recent Post</h1>
      <p>Don't miss out on latest GPT</p>
      <div class="latest-post-container">
        <span class="latest-post-left">
          <img src="./assets/cana.jpeg" alt="">
        </span>
        <span class="latest-post-right">
          <a href="read.php?title=Canva%20GPT:%20Your%20Ultimate%20Design%20Assistant">
            <h3 class="card-title"> Canva GPT: Your Ultimate Design Assistant
            </h3>
          </a>
          <p>Canva GPT is an intelligent design assistant powered by advanced AI technology. It’s like having a personal design consultant available 24/7, ready to help you bring your creative ideas to life.</p>
          <div class="author-info">
            <img src="./assets/login.png" width="10px" alt="">
            <p>chirag</p>
          </div>
        </span>
      </div>
      <div class="latest-post-container">
        <span class="latest-post-left">
          <img src="./assets/math-solver-logo.png" alt="">
        </span>
        <span class="latest-post-right">
          <a href="read.php?title=+Unlocking+Mathematical+Potential+with+Math+Solver">
            <h3 class="card-title">Unlocking Mathematical Potential with Math Solver</h3>
          </a>

          <p>Math Solver is an advanced, AI-powered tool crafted to assist students across all levels—be it elementary school or graduate studies. But it’s not just another online calculator. It's a comprehensive learning companion </p>
          <div class="author-info">
            <img src="./assets/login.png" width="10px" alt="">
            <p>chirag</p>
          </div>
        </span>
      </div>
      <div class="latest-post-container">
        <span class="latest-post-left">
          <img src="./assets/cw-writer.jpeg" alt="">
        </span>
        <span class="latest-post-right">
          <a href="read.php?title=Your+%231+AI+for+Crafting+Personalized+Resumes">
            <h3 class="card-title">Unlocking Mathematical Potential with Math Solver</h3>
          </a>
          <p>This is where CV Writer - The CV Expert comes into play. Designed by industry professionals and powered by cutting-edge AI technology, this tool is your go-to resource for creating a personalized and impactful resume.</p>
          <div class="author-info">
            <img src="./assets/login.png" width="10px" alt="">
            <p>chirag</p>
          </div>
        </span>
      </div>

    </div>

  </section>

  <!-- Contact Us Section  -->

  <section id="contactus" class="contact-us">
    <div class="container contain-contact">
      <div class="contact-form">
        <h1>Contact us</h1>
        <form method="POST" action="https://formspree.io/f/xblrwokd">
          <div class="input-group">
            <input type="text" tabindex="1" name="firstName" placeholder="First Name" class="input-field" />
            <input type="text" tabindex="2" name="lastName" placeholder="Last Name" class="input-field" />
          </div>
          <div class="input-group">
            <input type="email" tabindex="3" name="email" placeholder="Email ID" class="input-field" />
            <input type="tel" tabindex="4" name="phone" placeholder="Phone no." class="input-field" />
          </div>
          <textarea placeholder="Message" tabindex="5" name="message" class="message-field"></textarea>
          <button type="submit" tabindex="6" class="submit-btn">Send</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer Of the Page -->
  <footer>
    <div class="container">
      <div class="footer-section">
        <img src="./assets/logo.png" alt="">

        <div class="footer-section-content flex">
          <p class="about-company">GPT-4 Blog is not only a blog website but a mission to educate people on making their life easier with chatgpt</p>

          <div class="footer-links">
            <p class="section-title">About us</p>
            <ul>
              <li><a href="#featured">Featured</a></li>
              <li><a href="blogs.php">Blogs</a></li>
              <li><a href="#contactus">Get In Touch</a></li>
            </ul>
          </div>

          <div class="footer-links">
            <p class="section-title">Services</p>
            <ul>
              <li><a href="write.php">Write Blog</a></li>
              <li><a href="#">Monitization</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div>

          <div class="footer-links">
            <p class="section-title">Social Media</p>
            <ul>
              <li><a href="https://twitter.com/">Twitter</a></li>
              <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
              <li><a href="https://www.instagram.com/">Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">Copyright &copy; GPT-4 Blog, All rights reserved</div>
  </footer>

</body>
<script src="script.js"></script>

</html>