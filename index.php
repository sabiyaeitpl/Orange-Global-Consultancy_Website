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
<!--<section id="hero">-->
<!--  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">-->

<!--    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>-->

<!--    <div class="carousel-inner" role="listbox">-->

<!--     <?php while ($row = mysqli_fetch_assoc($hero_query)) { ?>-->
<!--      <div class="carousel-item active" style="background-image: url(<?php echo BANNER_IMAGE_SITE_PATH . $row['image']; ?>)">-->
<!--        <div class="container rounded-3 ">-->
<!--          <h2><?php echo $row['heading1'] ?></span></h2>-->
<!--          <p><?php echo $row['heading2'] ?></p>-->
<!--          <a href="<?php echo $row['btn_link'] ?>" class="btn-get-started scrollto" target="_blank"><?php echo $row['btn_name'] ?></a>-->
<!--        </div>-->
<!--      </div>-->

<!--      <?php } ?>-->

<!--    </div>-->

<!--    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">-->
<!--      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>-->
<!--    </a>-->

<!--    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">-->
<!--      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>-->
<!--    </a>-->

<!--  </div>-->
<!--</section>-->
<section class="p-0">
  <div class="position-relative">
    <div class="banner_click position-absolute">
      <img class="img-fluid blink" src="assets/img/slide/banner_round.png" alt="" />
    </div>
    <img class="img-fluid" src="assets/img/slide/banner.jpg" alt="" />
  </div>
</section>
<!-- End Hero -->

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

</div>

   <!--======= Featured job Section ======= -->
  <section id="featured-services" class="featured-services testimonials testimonials_main pt-0">
    <div class="container" data-aos="fade-up">
      <div class="mb-4">
        <h5 class="abut_cmn_text text-center"><span>Jobs available</span></h5>
        <h2 class="text-center">Jobs available for you</h2>
      </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
            </div>
        </div>
            <div class="position-relative">
                <div id="owl-demo" class="owl-carousel">
                    <?php 
        
                     $job_query = mysqli_query($con,"SELECT * FROM `job` WHERE `job_status`=1 order by id DESC");
                     while ($row_job=mysqli_fetch_assoc($job_query)) {
                    ?>
                  <div class="item">
                    <a data-bs-toggle="modal" href="#exampleModalToggle">
                        <img class="img-fluid" src="assets/img/<?php echo $row_job['job_image']; ?>"  onclick="bl(<?php echo $row_job['id']; ?>)"/>
                    </a>
                  </div>
                 <?php } ?>
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
                </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
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
              <div class="d-block flag_img text-center mb-3"><a href="countrys_offer.php?id=<?php echo $row_countries['id']; ?>"><img src="<?php echo WHY_IMAGE_SITE_PATH.$row_countries['image'] ?>"></a></div>
              <h3 class="text-dark"><?php echo $row_countries['heading'] ?></h3>
              <?php echo substr($row_countries['content'], 0, 100); ?>
              <a href="countrys_offer.php?id=<?php echo $row_countries['id']; ?>">Apply</a>
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
  </section>
  
  
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h1 class="modal-title fs-5" id="exampleModalToggleLabel">-->
        <!--    <button type="button" class="btn btn-light">Apply</button>-->
        <!--    <button type="button" class="btn btn-light">Procedure</button>-->
        <!--    <button type="button" class="btn btn-light">Agreement</button>-->
        <!--    <button type="button" class="btn btn-light">Payment</button>-->
        <!--</h1>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id='imageshow'>
        <!--<img class="img-fluid" src="assets/img/6613e99d3971a.jpeg">-->
      </div>
      <div class="modal-footer">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">
            <button type="button" id="apply" class="btn btn-light">Apply</button>
            <button type="button" id="procedurePdfShow" class="btn btn-light">Procedure</button>
            <button type="button" id="agreementPdfShow" class="btn btn-light">Agreement</button>
            <button type="button" class="btn btn-light">Payment</button>
        </h1>
        <!--<button class="btn cmn_btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>-->
      </div>
    </div>
  </div>
</div>
<!--<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">-->
<!--  <div class="modal-dialog modal-dialog-centered">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--       <h1 class="modal-title fs-5" id="exampleModalToggleLabel">-->
<!--            <button type="button" class="btn btn-light">Apply</button>-->
<!--            <button type="button" class="btn btn-light">Procedure</button>-->
<!--            <button type="button" class="btn btn-light">Agreement</button>-->
<!--            <button type="button" class="btn btn-light">Payment</button>-->
<!--        </h1>-->
<!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--      </div>-->
<!--      <div class="modal-body" >-->
        <!--<img class="img-fluid"  src="assets/img/6613e97a6e372.jpeg">-->
<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--          <button class="btn cmn_btn" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Pre</button>-->
<!--        <button class="btn cmn_btn" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Next</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">-->
<!--  <div class="modal-dialog modal-dialog-centered">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">-->
<!--            <button type="button" class="btn btn-light">Apply</button>-->
<!--            <button type="button" class="btn btn-light">Procedure</button>-->
<!--            <button type="button" class="btn btn-light">Agreement</button>-->
<!--            <button type="button" class="btn btn-light">Payment</button>-->
<!--        </h1>-->
<!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        <img class="img-fluid" src="assets/img/6613e9518740c.jpeg">-->
<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--        <button class="btn cmn_btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Pre</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div><!-- End Testimonials Section -->-->
</main><!-- End #main -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/661515f61ec1082f04e06bb9/1hr15rj69';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   function bl(id){
       //console.log(id);
       let job_id = id;
       //console.log(job_id);
          $.ajax({
        url: 'model_image_ajax.php',
        type: 'get',
        data: {
            id: job_id
        },
        success: function(response) {
             console.log(response);
            var jsonString = JSON.parse(response);
            console.log(jsonString.job_image)
             $('#imageshow').html(`<img class="img-fluid" src="assets/img/${jsonString.job_image}">`);
             $('#apply').html(`<a href="https://orangeglobalconsultancy.in/careers_details.php?id=${jsonString.id}">Apply</a>`);
             $('#procedurePdfShow').html(`<a href="../assets/procedure/${jsonString.procedure_dtl}" target="_blank">Procedure</a>`);
             $('#agreementPdfShow').html(`<a href="https://orangeglobalconsultancy.in/assets/agreement/${jsonString.agreement}" target="_blank">Agreement</a>`);
              
             //<a href="../assets/procedure/${jsonString.procedure_dtl}" target="_blank">Show</a>
            // Handle response from the server
        }
        // error: function(xhr, status, error) {
        //     console.error(xhr.responseText);
        //     // Handle error
        // }
    });
} 
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
  include('layout/footer.php');
?>




