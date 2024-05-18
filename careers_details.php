<?php
   include('layout/app2.php');
   $msg='';
   $id = isset($_GET['id']) ? $_GET['id'] : null;
   
   $job_query = mysqli_query($con,"SELECT * FROM `job` WHERE `job_status`=1 and id='$id'");
   $row_job = mysqli_fetch_assoc($job_query);
   $type =  $row_job['type'];
   
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $job_id = mysqli_real_escape_string($con, $_POST['job_id']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $location = mysqli_real_escape_string($con, $_POST['location']);
      $mobile = mysqli_real_escape_string($con, $_POST['career_mob']);
      $coverLetter = mysqli_real_escape_string($con, $_POST['cover_letter']);
      $type2 = "Jobs_available";
     
      if($_FILES['image']['name']!=''){
        $allowedTypes = ['application/pdf'];
        if (!in_array($_FILES["image"]["type"], $allowedTypes)) {
            $msg = "Please select only PDF format.";
        }
        else{
          $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
           if (!move_uploaded_file($_FILES['image']['tmp_name'], APPLICATION_IMAGE_SERVER_PATH . $image)) {
               throw new Exception("Failed to move the uploaded file.");
           }else{
              move_uploaded_file($_FILES['image']['tmp_name'],APPLICATION_IMAGE_SERVER_PATH.$image);
              mysqli_query($con,"INSERT INTO job_applications (job_id,name, email, mobile,`location`, cover_letter, image, type2) VALUES ('$job_id','$name', '$email', '$mobile','$location', '$coverLetter', '$image', '$type2')");
              echo '<script>';
              echo 'alert("Job Application successfully submitted");';
              echo 'window.location.href = "index.php";';
              echo '</script>';
          }
        } 
      }else{
            mysqli_query($con,"INSERT INTO job_applications (job_id,name, email, mobile,`location`, cover_letter, type2) VALUES ('$job_id','$name', '$email', '$mobile','$location', '$coverLetter', '$type2')");
            echo '<script>';
            echo 'alert("Job Application successfully submitted");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
   
      }
    
   }
   
   ?>
<!-- ======= Hero Section ======= -->
<section class="p-0">
   <!--<div class="innaer_banner">-->
   <!--   <img class="img-responsive" src="assets/img/inner_banner.jpg" />-->
   <!--</div>-->
</section>
<!-- End Hero -->
<section id="about" class="shadow-sm">
   <div class="container" data-aos="fade-up">
   <div class="row position-relative">
   <div class="col-lg-12">
   <div class="our-story">
      <h3 class="text-center"><?php echo $row_job['title']; ?></h3>
      <?php //echo $row_job['description'] ?>
      <div class="bg-light rounded-3 shadow p-3">
         <div id="Form-box">
            <div class="col-12">
                <form id="careerintrest" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <div class="row">
                        <input type="hidden" name="job_id" value="<?php echo $row_job['id'] ?>">
                        <div class="col-md-4 mb-3"><input type="text" class="form-control" id="career_name" name="name" placeholder="Full Name*"  required /></div>
                        <div class="col-md-4 mb-3"><input type="email" class="form-control" id="career_email" name="email" placeholder="Email"   /></div>
                        <div class="col-md-4 mb-3"><input type="text" class="form-control" id="career_email" name="location" placeholder="Location*" required/></div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-6 mb-3"><input type="number" minlength="11" maxlength="13" class="form-control" name="career_mob" id="career_mob" placeholder="Mobile No.*"/></div>
                        <div class="col-md-6 mb-3"><span class="control-fileupload"><label for="career-file">Upload Resume :</label> <input class="form-control_file" name="image" id="career-file" placeholder="Upload Resume*"  style="height:auto;" type="file" accept=".pdf" /> </span></div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12 mb-3"><textarea class="form-control" name="cover_letter" id="career-cover_letter" placeholder="Write a short cover letter" rows="5"></textarea></div>
                     </div>
                  </div>
                    <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12 mb-1">
                           <button class="button" name="submit" type="submit">Submit</button>
                        </div>
                     </div>
                    </div>
                </form>
            </div>
            <div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php 
   $job_type_query = mysqli_query($con,"SELECT * FROM `job` WHERE `id` NOT IN ($id) AND `job_status` = 1 and type='$type'");
   $count = mysqli_num_rows($job_type_query);
   if ($count > 0) {
    ?>
<section class="bg-light shadow-sm text-center">
   <div class="container">
      <div class="row mt-2">
         <div class="text-center">
            <h2>More Job Available</h2>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt
               ut labore et dolore magna aliqua.</p> -->
         </div>
         <?php 
            while ($row_job_type=mysqli_fetch_assoc($job_type_query)) { ?>
         <div class="col-lg-4 col-md-12 mt-2 text-center mt-3">
            <div class="bg-light shadow  p-3 rounded-3">
               <h5 class="logo_color"><?php echo $row_job_type['title']; ?></h5>
               <p> <?php echo substr($row_job['description'], 0, 150); ?>..</p>
               <a href="careers_details.php?id=<?php echo base64_encode($row_job_type['id']); ?>"><button class="button" type="submit">Apply Now</button></a>
            </div>
         </div>
         <?php
            }
            ?>
      </div>
   </div>
</section>
<?php
   }
   ?>
<?php
   include('layout/footer.php');
   
   ?>