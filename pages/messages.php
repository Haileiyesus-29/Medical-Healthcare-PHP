  <?php
    include 'layout/html.php';
  ?>
    <!-- HEADER PAGE STARTS HERER -->
    <?php
      include('layout/header.php');
   ?>
    <!-- MAIN PAGE STARTS HERE -->
    <main>
      <div class="message-container">
        <div class="message-title">Messages</div>

        <?php
             $path = dirname(__DIR__);
             include $path.'/helpers/getChatContacts.php';
             include $path.'/helpers/fetchUserData.php';
             $personId = $_SESSION['user_info']['id'];
             $chatContacts = getChatContacts($personId);

             foreach ($chatContacts as $contactId) {
                 $contactData = fetchUserDataById($contactId);
                 
                 // Check if contact data is available
                 if ($contactData) {
                     $contactName = $contactData['first_name'] . ' ' . $contactData['last_name'];
                     $contactImage = $contactData['image'];
                     
                     // Render the HTML for the chat link
                     echo '<a href="/messages/'.$contactId.'" class="message-link">' .
                         '<div class="center-inside message-link-pp">' .
                         '<img src="../' . $contactImage . '" alt="pp" />' .
                         '</div>' .
                         '<div>' .
                         '<div class="message-link-name">' . $contactName . '</div>' .
                         '</div>' .
                         '</a>';
                 }
             }
         ?>

        <!-- <a href="/messages" class="message-link"
          ><div class="center-inside message-link-pp">
            <img src="../user.png" alt="pp" />
          </div>
          <div>
            <div class="message-link-name">John Doe</div>
            <div class="message-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat,
              tempore?
            </div>
          </div></a
        > -->
        <!-- <div class="prev-next-container">
          <div class="btn btn-prev center-inside">Prev</div>
          <div class="btn btn-next center-inside">Next</div>
        </div> -->
      </div>
    </main>

    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
