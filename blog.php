<?php 
   include('layout/app2.php');
   
   $blog_query = mysqli_query($con,"SELECT * FROM `blogs` where status=1 order by id desc");
   
   ?>
<!-- ======= Hero Section ======= -->
<section class="p-0">
   <!--<div class="innaer_banner">-->
   <!--   <img class="img-responsive" src="assets/img/inner_banner.jpg" />-->
   <!--</div>-->
</section>
<!-- End Hero -->
<div class="container mt-4 mb-4">
   <div id="container">
     <div class="row">
         <?php 
     while ($row_blog = mysqli_fetch_assoc($blog_query)) { ?>
     
     <div class="col-sm-6">
          <a href="blog_details.php?id=<?php echo base64_encode($row_blog['id']); ?>">
         <div class="box_blog shadow p-3" data-aos="fade-right">
            <img class="img-responsive" src="assets/img/about_us.jpg" alt="">
            <small class="logo_color d-block"><?php echo $row_blog['title'] ?></small>
            <!--<p><?php echo $row_blog['content'] ?>-->
            <!--</p>-->
            <hr>
            <h6 class="logo_color"><?php echo $row_blog['created_at'] ?></h6>
         </div>
      </a>
     </div>
      <?php  }
     ?>
     
     </div>
   </div>
</div>
<?php
   include('layout/footer.php');
   
   ?>