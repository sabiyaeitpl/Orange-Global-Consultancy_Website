<?php 

  include('layout/app2.php');
$about_query =  mysqli_query($con,"SELECT * FROM `contents`");
  $about_res =  mysqli_fetch_assoc($about_query);
  $title =  $about_res['heading'];
  $url =  $about_res['sub_heading'];
  $content = $about_res['content'];
  $about_image = CONTENT_IMAGE_SITE_PATH . $about_res['image'];
?>

<!-- ======= Hero Section ======= -->
<section class="p-0">
  <!--<div class="innaer_banner">-->
  <!--  <img class="img-responsive" src="assets/img/about_us.jpg" />-->
  <!--</div>-->
</section><!-- End Hero -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="<?php echo $about_image; ?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content mt-5" data-aos="fade-left">
        <h5 class="abut_cmn_text"><span>ABOUT Orange Global</span></h5>
        <h2><?php echo $title; ?></h2>
        <?php echo $content; ?>

        <div><a href="index.php"><button class="button" type="submit">Make an Appointment</button></a></div>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->


<main id="main">

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
            <div class="bg-white rounded-3 shadow p-3 countries text-dark">
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
  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box rounded-3 ">
            <!-- <i class="fas fa-user-md"></i> -->
            <img class="float-start" src="assets/img/icon1.png" />
            <span data-purecounter-start="0" data-purecounter-end="700" data-purecounter-duration="1"
              class="purecounter"></span>

            <p>Years of combined industry experienced team.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box rounded-3 ">
            <!-- <i class="fas fa-user-md"></i> -->
            <img class="float-start" src="assets/img/icon2.png" />
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
              class="purecounter"></span>

            <p>Countries offered as immigration destinations.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box rounded-3 ">
            <!-- <i class="fas fa-user-md"></i> -->
            <img class="float-start" src="assets/img/icon3.png" />
            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
              class="purecounter"></span>

            <p>Visa options for skilled, Business and investor categories.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->








</main><!-- End #main -->

<?php 

    include('layout/footer.php');

?>