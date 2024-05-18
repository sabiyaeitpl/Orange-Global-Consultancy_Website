<?php

 include('layout/app.php');

?>

<!-- ======= Hero Section ======= -->
<section class="p-0">
  <div class="innaer_banner">
    <img class="img-responsive" src="assets/img/inner_banner.jpg" />
  </div>
</section><!-- End Hero -->

<section class="p-0" >
  <div class="contact">
    <div class="container">

      <div class="row mt-5" data-aos="fade-right">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Orange global Consultancy.
                <br/>
Ananda Apartment, 1st Floor,
<br/>
Module No. - 2, V.I.P. Road, Teghoria,
<br/>
Kolkata - 700059</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p><a href="mailto:info@orangeglobalconsultancy.in">info@orangeglobalconsultancy.in</a></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p><a href="tel:9773855568">+91 9773855568</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </div>
  <div style="margin-bottom: -10px;" data-aos="fade-up">
    <!--<iframe-->
    <!--  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14733.791708962022!2d88.37249195000001!3d22.59974255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1693994202383!5m2!1sen!2sin"-->
    <!--  width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"-->
    <!--  referrerpolicy="no-referrer-when-downgrade"></iframe>-->
      
      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25822.53398667453!2d88.39328520114998!3d22.620761420835308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89f5ef7b71e8b%3A0xb46c2c87e1d02aa5!2sAnanda%20Apartment!5e0!3m2!1sen!2sin!4v1712489638805!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.858511887114!2d88.43173327435476!3d22.621758131168615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89fdbe2ccce41%3A0x3fbc2f655dea0fd2!2sOrange%20Global%20Consultancy!5e0!3m2!1sen!2sin!4v1712899980033!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
  </div>
</section>

<?php 

 include('layout/footer.php');

?>