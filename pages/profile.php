    <?php
      include 'layout/html.php';
    ?>
    <?php
      include('layout/header.php');
      $user = $_SESSION['user_info'];

    if(isset($doctor_id)) {
      global $user;
      $path = dirname(__DIR__);
      include_once $path.'/config/database.php';
      $stmt = $connection->prepare("SELECT * FROM users WHERE id = ?");
      $stmt->bind_param("i", $doctor_id);
      $stmt->execute();
      
      $result = $stmt->get_result();
      $doctor = $result->fetch_assoc();
      
      $stmt->close();
    }
    if(isset($doctor)) $user = $doctor
    // print_r($doctor);

   ?>
    <main>
      <section class="profile">
        <div class="profile--container">
          <div class="profile__image"><img src="../public/images/user.png" alt="profile"></div>
          <div class="profile__item">
            <div class="profile__name"><?php echo $user['first_name']." ".$user['last_name']; ?></div>
            <div class="profile__item--container">
              <div class="profile__field">Email</div>
              <div class="profile__status"><?php echo $user['email']; ?></div>
            </div>
            <div class="profile__item--container">
              <div class="profile__field">Gender</div>
              <div class="profile__status"><?php echo $user['gender']; ?></div>
            </div>
            <div class="profile__item--container">
              <div class="profile__field">Account Type</div>
              <div class="profile__status"><?php echo $user['account']; ?></div>
            </div>
            <div class="profile__item--container">
              <div class="profile__field">Phone numbeer</div>
              <div class="profile__status"><?php echo $user['phone_number']; ?></div>
            </div>
            <div class="profile__item--container">
              <div class="profile__field">Address</div>
              <div class="profile__status"><?php echo $user['address']; ?></div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
