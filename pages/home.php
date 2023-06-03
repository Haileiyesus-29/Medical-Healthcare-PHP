<?php
  include 'layout/html.php';
?>
    <?php
      include('layout/header.php')
    ?>

    <!-- MAIN PAGE STARTS HERE -->
    <main>
      <section id="about-us" class="about-us">
        <div class="about-us-title">Medical Healthcare programs</div>
        <div class="about-us-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos magni,
          dolore explicabo voluptatum pariatur placeat velit repellendus illum
          cumque voluptas iste corporis soluta ullam hic minima reiciendis
          impedit ratione corrupti vitae veritatis excepturi modi eum possimus
          at. Nam aspernatur eaque earum quibusdam ipsum aliquam sapiente illo
          molestiae impedit atque? Labore cupiditate, alias quia quaerat odit
          magni obcaecati perferendis dolore ex sed accusantium possimus.
          Delectus accusantium labore consequatur! Optio eligendi soluta iste
          laudantium voluptatibus doloribus reiciendis quo ullam deleniti
          repudiandae nostrum at quod recusandae voluptatum totam eos architecto
          laborum quas voluptates numquam, dignissimos, officiis autem. Culpa
          tenetur incidunt asperiores dolorem cum?
        </div>
      </section>
      <div class="video-container">
        <video
          src="../public/HealthCare.mp4"
          class="video-element"
          controls
          muted
          width="400"
        ></video>
      </div>
      <div id="testimonials" class="testimonials">
        <div class="scroller center-inside scroller-left">&langle;</div>
        <div class="scroller center-inside scroller-right">&rangle;</div>
        <div class="testimonials-parent">
          <div class="testimonial-container">
            <div class="testimonial-body">
              <span class="testimonial-title">The best health service!</span>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
              non a doloremque dicta, inventore quisquam fugit mollitia
              recusandae hic delectus?
            </div>
            <div class="testimonial-header">
              <img
                src="user.png"
                width="40"
                height="40"
                alt="img"
                class="testimonial-img"
              />
              <a href="#">
                <span class="testimonial-name">John Doe</span>
                <address>Newyork Us</address>
              </a>
            </div>
          </div>
          <div class="testimonial-container activeEl">
            <div class="testimonial-body">
              <span class="testimonial-title">The best health service!</span>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
              non a doloremque dicta, inventore quisquam fugit mollitia
              recusandae hic delectus?
            </div>
            <div class="testimonial-header">
              <img
                src="user.png"
                width="40"
                height="40"
                alt="img"
                class="testimonial-img"
              />
              <a href="#">
                <span class="testimonial-name">Another John Doe</span>
                <address>Newyork Us</address>
              </a>
            </div>
          </div>
          <div class="testimonial-container">
            <div class="testimonial-body">
              <span class="testimonial-title">The best health service!</span>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
              non a doloremque dicta, inventore quisquam fugit mollitia
              recusandae hic delectus?
            </div>
            <div class="testimonial-header">
              <img
                src="user.png"
                width="40"
                height="40"
                alt="img"
                class="testimonial-img"
              />
              <a href="#">
                <span class="testimonial-name">Even another John Doe</span>
                <address>Newyork Us</address>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
    <script defer src="../public/js/testimonials.js"></script>

  </body>
</html>