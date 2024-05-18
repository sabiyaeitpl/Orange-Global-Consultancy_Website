<?php 
 include('layout/app2.php');
 $msg='';
 $id = isset($_GET['id']) ? base64_decode($_GET['id']) : null;
 $blog_query = mysqli_query($con,"SELECT blog_categories.name as category,blogs.* FROM `blogs`,blog_categories WHERE blogs.category_id=blog_categories.id and  blogs.`status`=1 and blogs.id='$id'");
 $row_blog = mysqli_fetch_assoc($blog_query);
?>

<!-- ======= Hero Section ======= -->
<section class="p-0">
    <div class="innaer_banner">
        <img class="img-responsive" src="assets/img/about_us.jpg" />
    </div>
</section><!-- End Hero -->

<div class="container mt-4 mb-4">
    <div id="container">
        <div class="box shadow p-3" data-aos="fade-right">
            <a href="#">
                <img class="img-responsive" src="<?php echo BLOG_IMAGE_SITE_PATH.$row_blog['image']; ?>" alt="">
                <br/>
                <h4 class="logo_color d-block mt-4"><b><?php echo $row_blog['title'] ?> </b></h4>
                 <br/>
                <small class="text-dark d-block"><?php echo $row_blog['category'] ?></small>
                <hr/>
                <p class="text-dark">
                  <?php
                   echo $row_blog['content'];
                  ?>
                </p>
                <hr>
                <h6 class="logo_color text-end">Post Date: <?php echo $row_blog['created_at'] ?></h6>
            </a>
        </div>
    </div>
</div>

<?php
    include('layout/footer.php');
?>