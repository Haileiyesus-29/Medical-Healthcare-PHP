<?php
  include 'layout/html.php';
?>
    <!-- HEADER PAGE STARTS HERER -->
    <?php
      include('layout/header.php');
      $path = dirname(__DIR__);
      include $path.'/helpers/fetchUserData.php';
      $user = fetchUserDataById($contact_id);
   ?>
    <!-- MAIN PAGE STARTS HERE -->
    <main>
      <!-- prettier-ignore -->
      <div class="chat-container">
        <a href="/profile/<?php  echo $contact_id; ?>" class="chat-header">
          <img src="../user.png" alt="pp" />
          <span class="chat-name"><?php echo $user['first_name'].' '.$user['last_name']; ?></span>
        </a>
        <div class="chat-message-container">
            <?php
                // Assuming you have retrieved the chat history using the loadChatHistory function
                $path = dirname(__DIR__);
                include $path.'/helpers/loadChatHistory.php';
                $chatHistory = loadChatHistory($contact_id);

                foreach ($chatHistory as $message) {
                    $messageContent = $message['content'];
                    $isSentMessage = $message['sender'] !== $contact_id;
                    $messageClass = $isSentMessage ? 'sent' : '';

                    echo '<span class="chat-messages ' . $messageClass . '">' . $messageContent . '</span>';
                }

            ?>
            <!-- <span class="chat-messages sent">Lorem, ipsum dolor.</span> -->
        </div>
        <form action="../controllers/MessageController.php" method="POST">
          <input type="text" id="chat-send" name="content" placeholder="write message here" />
          <input type="hidden" name="receiver" value="<?php echo $contact_id; ?>">
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
