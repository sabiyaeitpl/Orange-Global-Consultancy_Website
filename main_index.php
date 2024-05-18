<?php 
  include('layout/app.php');
  //hero section code 
  $hero_query =  mysqli_query($con,"SELECT * FROM `banner` WHERE `status`=1 order by order_by ASC");

  //about section code 
  $about_query =  mysqli_query($con,"SELECT * FROM `contents`");
  $about_res =  mysqli_fetch_assoc($about_query);
  $title =  $about_res['heading'];
  $url =  $about_res['sub_heading'];
  $content = $about_res['content'];
  $about_image = CONTENT_IMAGE_SITE_PATH . $about_res['image'];
?>
<style>
  p{
    color:black;
  }
</style>
  <style>
        .carousel-item img {
            width: 20%;
            height: 300px; /* Adjust this value as needed */
            object-fit: cover;
        }
    </style>

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

     <?php while ($row = mysqli_fetch_assoc($hero_query)) { ?>
      <div class="carousel-item active" style="background-image: url(<?php echo BANNER_IMAGE_SITE_PATH . $row['image']; ?>)">
        <div class="container rounded-3 ">
          <h2><?php echo $row['heading1'] ?></span></h2>
          <p><?php echo $row['heading2'] ?></p>
          <a href="<?php echo $row['btn_link'] ?>" class="btn-get-started scrollto" target="_blank"><?php echo $row['btn_name'] ?></a>
        </div>
      </div>

      <?php } ?>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="<?php echo $about_image; ?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h5 class="abut_cmn_text"><span>ABOUT Orange Global</span></h5>
        <h2><?php echo $title; ?></h2>
        <?php echo $content; ?>

        <div><a href="<?php echo $url; ?>" target="_blank"><button class="button" type="submit">Make an Appointment</button></a></div>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->


<main id="main">

   <!--======= Featured job Section ======= -->
  <section id="featured-services" class="featured-services testimonials testimonials_main pt-0">
    <div class="container" data-aos="fade-up">
      <div class="mb-4">
        <h5 class="abut_cmn_text text-center"><span>Jobs available</span></h5>
        <h2 class="text-center">Jobs available for you</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

        <?php 
        
         $job_query = mysqli_query($con,"SELECT * FROM `job` WHERE `job_status`=1 order by id DESC LIMIT 6");
         while ($row_job=mysqli_fetch_assoc($job_query)) {
        ?>

          <div class="swiper-slide">
            <!--<div class="testimonial-item jobs_available_box">-->
            <!--  <a href="careers_details.php?id=<?php echo base64_encode($row_job['id']); ?>">-->
            <!--    <p>-->
                  <b class="d-block fs-3"><?php //echo $row_job['title']  ?></b>
                  <?php //echo substr($row_job['description'], 0, 200); ?>
            <!--      <span class="d-block text-end mt-4 mb-2 text-decoration-underline">Apply Now</span>-->
            <!--    </p>-->
            <!--  </a>-->
            <!--</div>-->
            <!--<div>-->
                <!--<a class="jobs_available_img" href="javascript:void(0)"><img class="img-responsive" src="assets/img/canada_img.jpg" /></a>-->
                <!--<a class="" href="javascript:void(0)"><img class="img-responsive" src="assets/img/canada_img.jpg" /></a>-->
               
            </div>
          </div>
          <?php } ?>
          
          <div class="position-relative">
              <div id="owl-demo" class="owl-carousel">
                  <!--<div class="item">-->
                  <!-- <a href="javascript:void(0)">-->
                  <!--      <img class="img-fluid" src="https://www.orangeglobalconsultancy.in/assets/img/avliblejob/image1.jpeg" />-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<div class="item">-->
                  <!-- <a href="javascript:void(0)">-->
                  <!--      <img class="img-fluid" src="https://www.orangeglobalconsultancy.in/assets/img/avliblejob/image2.jpeg" />-->
                  <!--   </a>-->
                  <!--</div>-->
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_1.jpeg" />
                     </a>
                  </div>
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_2.jpeg" />
                     </a>
                  </div>
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_3.jpeg" />
                     </a>
                  </div>
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_4.jpeg" />
                     </a>
                  </div>
                  <!--<div class="item">-->
                  <!-- <a href="javascript:void(0)">-->
                  <!--      <img class="img-fluid" src="https://www.orangeglobalconsultancy.in/assets/img/avliblejob/image1.jpeg" />-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<div class="item">-->
                  <!-- <a href="javascript:void(0)">-->
                  <!--      <img class="img-fluid" src="https://www.orangeglobalconsultancy.in/assets/img/avliblejob/image2.jpeg" />-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<div class="item">-->
                  <!-- <a href="javascript:void(0)">-->
                  <!--      <img class="img-fluid" src="https://www.orangeglobalconsultancy.in/assets/img/avliblejob/image1.jpeg" />-->
                  <!--   </a>-->
                  <!--</div>-->
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_1.jpeg" />
                     </a>
                  </div>
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_2.jpeg" />
                     </a>
                  </div>
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_3.jpeg" />
                     </a>
                  </div>
                  <div class="item">
                   <a href="javascript:void(0)">
                        <img class="img-fluid" src="assets/img/jobimg_4.jpeg" />
                     </a>
                  </div>
                  <!--<div class="item">-->
                  <!-- <a href="javascript:void(0)">-->
                  <!--      <img class="img-fluid" src="https://www.orangeglobalconsultancy.in/assets/img/avliblejob/image2.jpeg" />-->
                  <!--   </a>-->
                  <!--</div>-->
                </div>
                <div class="customNavigation">
                  <a class="btn prev">
                    <span class="material-symbols-outlined">
                      arrow_back_ios
                    </span>
                  </a>
                  <a class="btn next">
                    <span class="material-symbols-outlined">
                      arrow_forward_ios
                    </span>
                  </a>
                  <!-- <a class="btn play">Autoplay</a>
              <a class="btn stop">Stop</a> -->
                </div>
          </div>
          
          
          

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  
  

  
  <!-- End blog Services Section -->




  <!-- ======= Cta Section ======= -->

  <?php
  
      $countries_query = mysqli_query($con,"SELECT * FROM `services_countries`");
  ?>
  <section id="cta" class="cta map_location" style="background-image: url(assets/img/map.png);">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h5 class="abut_cmn_text text-center"><span>COUNTRIES WE OFFER</span></h5>
        <h3 class="mb-4">Services for Following Countries</h3>
        <div class="row">
        <?php while ($row_countries = mysqli_fetch_assoc($countries_query)) { ?>
          <div class="col-sm-3 mb-3">
            <div class="bg-white rounded-3 shadow p-3 countries">
              <div class="d-block flag_img text-center mb-3"><img src="<?php echo WHY_IMAGE_SITE_PATH.$row_countries['image'] ?>"></div>
              <h3 class="text-dark"><?php echo $row_countries['heading'] ?></h3>
              <?php echo substr($row_countries['content'], 0, 100); ?>
            </div>
          </div>

          <?php } ?>

        </div>
      </div>

    </div>
  </section>
  
  <!-- End Cta Section -->

  <!-- ======= Counts Section ======= -->
  <!-- <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box rounded-3 ">
            <img class="float-start" src="assets/img/icon1.png" />
            <span data-purecounter-start="0" data-purecounter-end="700" data-purecounter-duration="1"
              class="purecounter"></span>

            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              as been the industry's standard dummy text ever ipsum has been the industry's standard dummy text ever
              since the.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box rounded-3 ">
            <img class="float-start" src="assets/img/icon2.png" />
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
              class="purecounter"></span>

            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              as been the industry's standard dummy text ever ipsum has been the industry's standard dummy text ever
              since the.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box rounded-3 ">
            <img class="float-start" src="assets/img/icon3.png" />
            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
              class="purecounter"></span>

            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              as been the industry's standard dummy text ever ipsum has been the industry's standard dummy text ever
              since the.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <!--<section id="features" class="features">-->
  <!--  <div class="container" data-aos="fade-up">-->
  <!--    <div class="row">-->

  <!--      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">-->
  <!--        <div class="icon-box mt-5 mt-lg-0">-->
  <!--          <i class="bx bx-receipt"></i>-->
  <!--          <h4>Est labore ad</h4>-->
  <!--          <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>-->
  <!--        </div>-->
  <!--        <div class="icon-box mt-5">-->
  <!--          <i class="bx bx-cube-alt"></i>-->
  <!--          <h4>Harum esse qui</h4>-->
  <!--          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>-->
  <!--        </div>-->
  <!--        <div class="icon-box mt-5">-->
  <!--          <i class="bx bx-images"></i>-->
  <!--          <h4>Aut occaecati</h4>-->
  <!--          <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>-->
  <!--        </div>-->
  <!--        <div class="icon-box mt-5">-->
  <!--          <i class="bx bx-shield"></i>-->
  <!--          <h4>Beatae veritatis</h4>-->
  <!--          <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");'-->
  <!--        data-aos="zoom-in"></div>-->
  <!--    </div>-->

  <!--  </div>-->
  <!--</section>-->
  <!-- End Features Section -->


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

        <?php 
          $testimonial_query = mysqli_query($con,"SELECT * FROM `testimonials`");
          while ($row_testimonials = mysqli_fetch_assoc( $testimonial_query )) {
        ?>

          <div class="swiper-slide">
            <div class="testimonial-item">
                 <div class="profile_img_of_client">
                <img src="<?php echo TESTIMONIALS_IMAGE_SITE_PATH.$row_testimonials['image']; ?>" class="testimonial-img" alt="">
              </div>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 <?php echo $row_testimonials['description'];?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
             
              <h3><?php echo $row_testimonials['name'] ?></h3>
              <!-- <h4>Ceo &amp; Founder</h4> -->
            </div>
          </div>

          <?php } ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
</main><!-- End #main -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
  include('layout/footer.php');
?>




