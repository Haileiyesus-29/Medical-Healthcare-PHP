<?php
  include 'layout/html.php';
?>
    <!-- HEADER PAGE STARTS HERER -->
    <?php
      include('layout/header.php');
   ?>
    <!-- MAIN PAGE STARTS HERE -->
    <main>
      <!-- prettier-ignore -->
      <div class="chat-container">
        <a href="#" class="chat-header">
          <img src="../user.png" alt="pp" />
          <span class="chat-name">John Doe</span>
        </a>
        <div class="chat-message-container">
            <span class="chat-messages">Lorem, ipsum dolor.</span>
            <span class="chat-messages">Lorem, ipsum dolor.</span>
            <span class="chat-messages">Lorem, ipsum dolor.</span>
            <span class="chat-messages">Lorem, ipsum dolor.</span>
            <span class="chat-messages">Lorem, ipsum dolor.</span>
            <span class="chat-messages">Lorem, ipsum dolor.</span>
        </div>
        <form action="#">
          <input type="text" id="chat-send" placeholder="write message here" />
          <input type="submit" value="send &raquo;" />
        </form>
      </div>
    </main>
    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
