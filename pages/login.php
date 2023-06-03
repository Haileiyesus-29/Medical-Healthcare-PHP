<?php
  include 'layout/html.php';
?>
    <!-- HEADER PAGE STARTS HERER -->
    <?php
      include('layout/header.php');
   ?>

    <!-- MAIN PAGE STARTS HERE -->
    <main class="login-container">
      <div class="login-message">
        Let's connect &nbsp;
        <span class="highlight"> to your healthy </span><br />
        life at &nbsp; <span class="highlight"> the best</span> hospital
      </div>
      <form action="../controllers/LoginController.php" method="post" class="login-form">
        <div class="email-container">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            placeholder="your email"
            name="email"
            class="email"
          />
        </div>
        <div class="password-container">
          <label for="password">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="your password"
            class="password"
          />
        </div>
        <div class="submit-container">
          <input type="submit" value="LOGIN" id="submit" class="submit-btn" />
          <div class="no-account">
            didn't have an account? <a href="/signup">register</a>
          </div>
        </div>
      </form>
    </main>
    <?php
      include('layout/footer.php'); 
    ?>
        <script defer src="../public/js/loginControl.js"></script>
        <script defer src="../public/js/script.js"></script>

    <!-- <script src="script.js"></script> -->
  </body>
</html>
