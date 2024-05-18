<?php
 include('layout/app2.php');

?>

<!-- ======= Hero Section ======= -->
<section class="p-0">
  <div class="innaer_banner">
    <!--<img class="img-responsive" src="<?php echo  $image ?>" />-->
    <img class="img-responsive rounded-3" src="assets/img/inner_banner.png">
  </div>
</section><!-- End Hero -->

<?php
$job_type_query = mysqli_query($con,"SELECT * FROM `job` WHERE `job_status` = 1");
$count = mysqli_num_rows($job_type_query);

 ?>
<section class="bg-light shadow-sm text-center">
  <div class="container">
    <div class="row mt-2">
      <div class="text-center">
        <h2>Job Available</h2>
      </div>
      
      <?php 
          if ($count > 0) {
            while ($row_job_type=mysqli_fetch_assoc($job_type_query)) { 
      ?>
       
        
      <div class="col-lg-4 col-md-12 mt-2 text-center mt-3">
        <div class="bg-light shadow  p-3 rounded-3 jobs_main">
          <!--<h5 class="logo_color"><?php echo $row_job_type['title']; ?></h5>-->
          <!--<p>-->
          <!--<p> <?php echo substr($row_job_type['description'], 0, 200); ?>..</p>-->
          <!--</p>-->
          <!--<h6 class="m-0">Full Time</h6>-->
          <!--<h5 class="logo_color">Job Type - <?php echo $row_job_type['type'] ?></h5>-->
          <div class="col-md-4">
              <img class="img-fluid" src="assets/img/<?php echo $row_job_type['job_image']; ?>" />
          </div>
          <a href="careers_details.php?id=<?php echo base64_encode($row_job_type['id']); ?>"><button class="button" type="submit">Apply Now</button></a>
        </div>
      </div>
     <?php 
            }
          }
     ?>

    </div>
  </div>
</section>


<?php
    include('layout/footer.php');

?>