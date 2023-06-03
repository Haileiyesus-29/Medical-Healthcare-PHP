    <?php
      include 'layout/html.php';
    ?>
      <?php
        include('layout/header.php');

        $user = $_SESSION['user_info'];
      ?>


    <!-- MAIN PAGE STARTS HERE -->
    <main>
      <div class="home-container">
        <div class="home-section home-section-left">
          <div class="home-profile-img">
            <img src="../public/images/user.png" width="50" alt="img" />
            <a href="/profile" class="home-profile-name">
              <?php
                   echo $user['first_name']." ".$user['last_name'];
               ?>
            </a>
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
                src="../public/images/user.png"
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
              <img src="../public/images/stethoscope.jpg" alt="img" />
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
                src="../public/images/user.png"
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
              <img src="../public/images/stethoscope.jpg" alt="img" />
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
                src="../public/images/user.png"
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
              <img src="../public/images/stethoscope.jpg" alt="img" />
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
        <?php
          if($_SESSION['user_info'] == 'doctor') 
            echo '<div class="home-section home-section-right home-post-container">
            <p>Try post something now!</p>
            <form action="#">
              <textarea name="input-text" id="home-post-content"></textarea>
              <input type="file" name="post-picture" id="post-picture" />
              <input type="submit" value="POST" />
            </form>
          </div>';
        ?>
      </div>
    </main>
    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
  </body>
</html>