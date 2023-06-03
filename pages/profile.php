<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/style.css"  />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <title>Profile | Medical Healthcare</title>
    <script defer src="../Scripts/inPageScript.js"></script>
  </head>
  <body>
    <!-- HEADER PAGE STARTS HERER -->
    <?php
      include('layout/header.php');
   ?>
    <!-- MAIN BODY STARTS HERE -->
    <main>
      <div class="profile-container">
        <div class="home-feed-container profile-feed-container">
          <div class="home-feed-profile-link">
            <img src="../user.png" alt="img" width="40" class="feed-post-img" />
            <a href="#" class="feed-post-profile">John Doe</a>
          </div>
          <div class="home-feed-post-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi
            animi sunt deleniti enim provident maxime sapiente, non eius odio
            sequi!
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
        <div class="home-feed-container profile-feed-container">
          <div class="home-feed-profile-link">
            <img src="../user.png" alt="img" width="40" class="feed-post-img" />
            <a href="#" class="feed-post-profile">John Doe</a>
          </div>
          <div class="home-feed-post-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi
            animi sunt deleniti enim provident maxime sapiente, non eius odio
            sequi!
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
        <div class="home-feed-container profile-feed-container">
          <div class="home-feed-profile-link">
            <img src="../user.png" alt="img" width="40" class="feed-post-img" />
            <a href="#" class="feed-post-profile">John Doe</a>
          </div>
          <div class="home-feed-post-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi
            animi sunt deleniti enim provident maxime sapiente, non eius odio
            sequi!
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
    </main>

    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
