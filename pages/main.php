<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/style.css" />
    <link 
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <title>Welcome | Medical Healthcare</title>
    <script defer src="./Scripts/testimonials.js"></script>
    <script defer src="./script.js"></script>
  </head>
  <body>
    <?php
      include('layout/header.php')
    ?>

    <!-- MAIN PAGE STARTS HERE -->
    <main>
      <div class="home-container">
        <div class="home-section home-section-left">
          <div class="home-profile-img">
            <img src="../user.png" width="50" alt="img" />
            <a href="#" class="home-profile-name">John Doe</a>
          </div>
          <a href="/messages" class="home-profile-messages"
            >Messages <span class="stats">12</span></a
          >
          <a href="#" class="home-profile-notifications"
            >Notifications <span class="stats">12</span></a
          > 
          <a href="#" class="home-profile-following"
            >Following <span class="stats">12</span></a
          >
          <a href="#" class="home-profile-follower"
            >Follower <span class="stats">12</span></a
          > 
        </div>
        <div class="home-section home-section-middle">
          <div class="home-feed-container">
            <div class="home-feed-profile-link">
              <img
                src="../user.png"
                alt="img"
                width="40"
                class="feed-post-img"
              />
              <a href="#" class="feed-post-profile">John Doe</a>
            </div>
            <div class="home-feed-post-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Excepturi animi sunt deleniti enim provident maxime sapiente, non
              eius odio sequi!
            </div>
            <div class="home-feed-post-picture">
              <img src="../stethoscope.jpg" alt="img" />
            </div>
            <div class="home-feed-post-status">
              <a href="#" class="like"
                ><span class="like-count">120</span> &uArr;
              </a>
              <a href="#" class="unlike"
                ><span class="unlike-count">22</span> &dArr;
              </a>
              <a href="#" class="comment"
                ><span class="comment-count">42</span> comments
              </a>
            </div>
          </div>
          <div class="home-feed-container">
            <div class="home-feed-profile-link">
              <img
                src="../user.png"
                alt="img"
                width="40"
                class="feed-post-img"
              />
              <a href="#" class="feed-post-profile">John Doe</a>
            </div>
            <div class="home-feed-post-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Excepturi animi sunt deleniti enim provident maxime sapiente, non
              eius odio sequi!
            </div>
            <div class="home-feed-post-picture">
              <img src="../stethoscope.jpg" alt="img" />
            </div>
            <div class="home-feed-post-status">
              <a href="#" class="like"
                ><span class="like-count">120</span> &uArr;
              </a>
              <a href="#" class="unlike"
                ><span class="unlike-count">22</span> &dArr;
              </a>
              <a href="#" class="comment"
                ><span class="comment-count">42</span> comments
              </a>
            </div>
          </div>
          <div class="home-feed-container">
            <div class="home-feed-profile-link">
              <img
                src="../user.png"
                alt="img"
                width="40"
                class="feed-post-img"
              />
              <a href="#" class="feed-post-profile">John Doe</a>
            </div>
            <div class="home-feed-post-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Excepturi animi sunt deleniti enim provident maxime sapiente, non
              eius odio sequi!
            </div>
            <div class="home-feed-post-picture">
              <img src="../stethoscope.jpg" alt="img" />
            </div>
            <div class="home-feed-post-status">
              <a href="#" class="like"
                ><span class="like-count">120</span> &uArr;
              </a>
              <a href="#" class="unlike"
                ><span class="unlike-count">22</span> &dArr;
              </a>
              <a href="#" class="comment"
                ><span class="comment-count">42</span> comments
              </a>
            </div>
          </div>
          <a href="#" class="next-feed-btn btn">See more &rarr;</a>
        </div>
        <div class="home-section home-section-right home-post-container">
          <p>Try post something now!</p>
          <form action="#">
            <textarea name="input-text" id="home-post-content"></textarea>
            <input type="file" name="post-picture" id="post-picture" />
            <input type="submit" value="POST" />
          </form>
        </div>
      </div>
    </main>
    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
  </body>
</html>