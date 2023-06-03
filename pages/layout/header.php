   <!-- HEADER PAGE STARTS HERER -->
   <?php
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'true') {
    echo '<header class="in-pages">
    <div class="nav-icon">
      <!-- <i class="fa-solid fa-xmark"></i> -->
      <i class="fa-solid fa-bars"></i>
    </div>
    <nav class="nav-links-container">
      <a href="/" class="main-title"
        ><i class="fa-solid fa-stethoscope"></i>&nbsp; Medical Healthcare</a
      >
      <a href="/" class="nav-links">HOME</a>
      <a href="/doctor" class="nav-links">DOCTORS</a>
      <a href="/pharmacy" class="nav-links">PHARMACY</a>
      <a href="/profile" class="nav-links">PROFILE</a>
      <a href="/about" class="nav-links active">ABOUT</a>
      <a href="/logout" class="nav-links btn login-link center-inside"
        >LOGOUT</a
      >
    </nav>
  </header>';
   } else {
    echo '<header class="landing-page">
    <div class="nav-icon">
      <!-- <i class="fa-solid fa-xmark"></i> -->
      <i class="fa-solid fa-bars"></i>
    </div>
    <nav class="nav-links-container">
      <a href="/" class="main-title"
        ><i class="fa-solid fa-stethoscope"></i>&nbsp; Medical Healthcare</a
      >
      <a
        href="/login"
        class="nav-links btn login-link center-inside"
        >LOGIN</a
      >
      <a
        href="signup"
        class="nav-links btn center-content signup-link center-inside"
        >SIGNUP</a
      >
    </nav>
  </header>';
   }
   