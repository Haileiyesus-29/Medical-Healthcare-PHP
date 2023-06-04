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
    
      <form action="../controllers/RegisterController.php" method="post" class="login-form signup-form">
          <div class="signup-firstname">
              <label for="firstname">First Name</label>
              <input type="text" id="firstname" name="first_name" class="firstname" placeholder="your first name" required />
          </div>
          <div class="signup-lastname">
              <label for="lastname">Last Name</label>
              <input type="text" id="lastname" name="last_name" class="lastname" placeholder="your last name" required />
          </div>
          <div class="signup-email">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="email" placeholder="your email" required />
          </div>
          <div class="signup-gender">
              <label for="gender">Gender</label>
              <input type="radio" id="male" name="gender" value="male" checked class="gender-inputs hidden" required />
              <label for="male" class="gender-labels-hidden radio-checked"></label>
              <label for="male" class="gender-labels">Male</label>

              <input type="radio" id="female" name="gender" value="female" class="gender-inputs hidden" required />
              <label for="female" class="gender-labels-hidden"></label>
              <label for="female" class="gender-labels">Female</label>
          </div>
          <!-- <div class="signup-employee">
              <label for="employee">Doctor?</label>
              <input type="checkbox" name="account" id="employee" class="employee-input hidden" value="doctor" />
              <label for="account" class="employee-label "><span class="checkbox-ball "></span></label>
          </div> -->
            <div class="signup-employee">
                <label for="account">Account</label>
                <select name="account" id="account" class="account">
                <option value="user">User</option>
                <option value="doctor">Doctor</option>
                </select>
            </div>
          <div class="signup-password">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="password" placeholder="**********" required />
          </div>
          <div class="signup-phone">
              <label for="phone">Phone #</label>
              <input type="text" id="phone" name="phone_number" class="phone" placeholder="e.g, +251-987-654-321" />
          </div>
          <div class="signup-address">
              <label for="address">Address</label>
              <input type="text" id="address" name="address" class="address" placeholder="your address" />
          </div>
          <div class="submit-container">
              <input type="submit" id="submit" class="submit-btn" value="Create &rarr;" />
              <div class="no-account">
                  already have an account? <a href="/login">login</a>
              </div>
          </div>
        </form>

    </main>

    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
       <script  src="../../public/js/formControl.js"></script>
    <script  src="../../public/js/script.js"></script>

    <!-- <script src="script.js"></script> -->
  </body>
</html>
