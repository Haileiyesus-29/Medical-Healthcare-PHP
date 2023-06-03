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
    <title>Chat | Medical Healthcare</title>
    <script defer src="../Scripts/inPageScript.js"></script>
  </head>
  <body>
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
