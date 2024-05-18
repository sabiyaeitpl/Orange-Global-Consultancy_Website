<?php
// include('layout/config.php');
 include('layout/app2.php');
 $id =base64_decode($_GET['type']);
 $result = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `cms` where id=$id and status=1"));
 $image = CMS_IMAGE_SITE_PATH . $result['image'];
 
 $tilte = $result['title'];
 $videolink = $result['video'];
 $description= $result['description'];

?>
<!-- ======= Hero Section ======= -->
<section class="p-0">
  <div class="innaer_banner">
    <!--<img class="img-responsive" src="<?php echo  $image ?>" />-->
    <img class="img-responsive rounded-3" src="assets/img/inner_banner.png">
  </div>
</section><!-- End Hero -->
<section id="about" class="bg-light shadow-sm">
  <div class="container">
    <div class="row position-relative">
      <div class="col-lg-12">
        <div class="our-story">
          <h3 class="logo_color"><?php echo $tilte ?></h3>
           <?php echo $description; ?>
          <div class="watch-video align-items-center position-relative mt-3">
            <i class="bi bi-play-circle me-1"></i>
            <a href="<?php echo $videolink; ?>" class="glightbox stretched-link" target="_blank">Watch Video</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--<section>-->
<!--  <div class="container"  data-aos="fade-up">-->
<!--    <div class="row">-->
<!--      <div class="text-center">-->
<!--        <h2>Latest News</h2>-->
<!--        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt-->
<!--          ut labore et dolore magna aliqua.</p>-->
<!--      </div>-->
<!--      <div class="col-sm-4">-->
<!--        <div class="news_img border rounded-3 p-3">-->
<!--          <img class="img-responsive rounded-3" src="assets/img/slide/slide-1.jpg">-->
<!--          <div class="text-center">-->
<!--            <p class="m-0 logo_color">07-12-2023</p>-->
<!--            <h6>Canada's Labor Force Survey: Employment Growth & High Job Vacancies</h6>-->
<!--            <small class="mb-2 d-block logo_color">Canada's Job Growth & High Vacancies: A Positive Trend</small>-->
<!--            <button class="button" type="submit">Apply Now</button>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-sm-4">-->
<!--        <div class="news_img border rounded-3 p-3">-->
<!--          <img class="img-responsive rounded-3" src="assets/img/slide/slide-2.jpg">-->
<!--          <div class="text-center">-->
<!--            <p class="m-0 logo_color">07-12-2023</p>-->
<!--            <h6>Canada's Labor Force Survey: Employment Growth & High Job Vacancies</h6>-->
<!--            <small class="mb-2 d-block logo_color">Canada's Job Growth & High Vacancies: A Positive Trend</small>-->
<!--            <button class="button" type="submit">Apply Now</button>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-sm-4">-->
<!--        <div class="news_img border rounded-3 p-3">-->
<!--          <img class="img-responsive rounded-3" src="assets/img/slide/slide-3.jpg">-->
<!--          <div class="text-center">-->
<!--            <p class="m-0 logo_color">07-12-2023</p>-->
<!--            <h6>Canada's Labor Force Survey: Employment Growth & High Job Vacancies</h6>-->
<!--            <small class="mb-2 d-block logo_color">Canada's Job Growth & High Vacancies: A Positive Trend</small>-->
<!--            <button class="button" type="submit">Apply Now</button>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<?php
/*$job_type_query = mysqli_query($con,"SELECT * FROM `job` WHERE `job_status` = 1");
$count = mysqli_num_rows($job_type_query);*/

 ?>
<!--<section class="bg-light shadow-sm text-center mt-0">-->
<!--  <div class="container">-->
<!--    <div class="row mt-2">-->
<!--      <div class="text-center">-->
<!--        <h2>Job Available</h2>-->
<!--      </div>-->
      <?php 
        //   if ($count > 0) {
        //     while ($row_job_type=mysqli_fetch_assoc($job_type_query)) { 
      ?>
       
        
      <!--<div class="col-lg-4 col-md-12 mt-2 text-center mt-3">-->
      <!--  <div class="bg-light shadow  p-3 rounded-3 jobs_main">-->
      <!--    <h5 class="logo_color"><?php echo $row_job_type['title']; ?></h5>-->
      <!--    <p>-->
      <!--    <p> <?php echo substr($row_job_type['description'], 0, 200); ?>..</p>-->
      <!--    </p>-->
      <!--    <h6 class="m-0">Full Time</h6>-->
      <!--    <h5 class="logo_color">Job Type - <?php echo $row_job_type['type'] ?></h5>-->
      <!--    <a href="careers_details.php?id=<?php echo base64_encode($row_job_type['id']); ?>"><button class="button" type="submit">Apply Now</button></a>-->
      <!--  </div>-->
      <!--</div>-->
     <?php 
          //  }
         // }
     ?>

<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<?php 

 include('layout/footer.php');

?>

