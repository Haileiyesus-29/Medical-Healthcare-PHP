<?php
    include 'layout/html.php';
?>
<?php
    include('layout/header.php')
?>

   <main>
      <section class="doctor">
         <div class="doctor--container">
            <?php
               // Include the file containing the fetchDoctorUsers() function
                  $path = dirname(__DIR__);
                  include $path.'/helpers/fetchAllDoctors.php';

                  // Call the fetchDoctorUsers() function
                  $doctors = fetchAllDoctors();

                  // Check if the function successfully retrieved the doctor users
                  if ($doctors !== false) {
                     // Iterate over the doctor users and access their data
                     foreach ($doctors as $doctor) {
                        $doctorId = $doctor['id'];
                        $doctorFirstName = $doctor['first_name'];
                        $doctorLastName = $doctor['last_name'];
                        $doctorEmail = $doctor['email'];
                        echo '
                           <a href="/profile/'.$doctorId.'" class="doctor__item">
                              <div class="doctor__item--image">
                                 <img src="../public/images/user.png" alt="img">
                              </div>
                              <div class="doctor__item--name">Dr. '.$doctorFirstName.' '. $doctorFirstName.'</div>
                           </a>
                        ';
                     }
                  } else {
                     echo "Failed to fetch doctor users.";
                  }

            ?>

            <!-- <a href="#" class="doctor__item">
               <div class="doctor__item--image">
                  <img src="../public/images/user.png" alt="img">
               </div>
               <div class="doctor__item--name">Dr. Jane Doe</div>
            </a> -->
         </div>
      </section>
   </main>


    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
  </body>
</html>