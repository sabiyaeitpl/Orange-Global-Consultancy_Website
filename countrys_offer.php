<?php
// include('layout/config.php');
 include('layout/app2.php');
 $id =$_GET['id'];
//  $result = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `cms` where id=$id and status=1"));
//  $image = CMS_IMAGE_SITE_PATH . $result['image'];
 
//  $tilte = $result['title'];
//  $videolink = $result['video'];
//  $description= $result['description'];
$image_query = mysqli_query($con,"SELECT * FROM `services_countries` WHERE `id` = '$id'");
$image_data = mysqli_fetch_assoc($image_query);
$job_type_query = mysqli_query($con,"SELECT * FROM `all_services_countries` WHERE `service_country_id` = '$id'");
$count = mysqli_num_rows($job_type_query);
//echo $count;
 ?>
<section class="bg-light shadow-sm text-center mt-0">
  <div class="container">
    <div class="row mt-2">
      <div class="text-center">
        <h2><img  style="height: 150px; weidth: 300px;" src="media/whyChooseUs/<?php echo $image_data['image']?>" alt="Image none"></h2>
      </div>
      <?php 
          if ($count > 0) { 
            while ($row_job_type=mysqli_fetch_assoc($job_type_query)) { 
      ?>
       
        
       <div class="col-lg-4 col-md-12 mt-2 text-center mt-3">
        <div class="bg-light shadow  p-3 rounded-3 jobs_main"> 
          <!--<a class="btn btn-warning" href="procedure_pdf.php?file=<?php echo $row_job_type['procedure_pdf']; ?>">Procedure</a>-->
          <!--<a class="btn btn-warning" href="agreement_pdf.php?file=<?php echo $row_job_type['agreement_pdf']; ?>">Agreement</a>-->
          <!--<a  class="btn btn-warning" href="">Payment</a>-->
          <h5 class="logo_color"><?php echo $row_job_type['heading']; ?></h5>
          <p class="logo_color"> <?php echo $row_job_type['visa_type']; ?></p>
          <img class="img-fluid" src="media/allSearvices/<?php echo $row_job_type['image']?>" alt="">
          <!-- <h5 class="logo_color">Job Type - <?php echo $row_job_type['type'] ?></h5> -->
          <a href="country_apply.php?id=<?php echo $row_job_type['id']; ?>"><button class="button" type="submit">Apply Now</button></a>
          <hr>
          <a class="btn btn-warning" href="procedure_pdf.php?file=<?php echo $row_job_type['procedure_pdf']; ?>">Procedure</a>
          <a class="btn btn-warning" href="agreement_pdf.php?file=<?php echo $row_job_type['agreement_pdf']; ?>">Agreement</a>
          <a  class="btn btn-warning" href="payment.php?id=<?php echo $image_data['id']; ?>">Payment</a>
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

