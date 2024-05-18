<?php
// Assume $arr is the associative array containing menu items fetched from the database
$res = mysqli_query($con, "SELECT * FROM `menu_items`");
$arr = [];

while ($row = mysqli_fetch_assoc($res)) {
    $arr[$row['id']] = [
        'name' => $row['name'],
        'parent_id' => $row['parent_id'],
        'url' => $row['url'],
    ];
}

function buildDropdown($arr, $parent = 0)
{
    $html = '';

    foreach ($arr as $id => $data) {
        if ($parent == $data['parent_id']) {
            $hasChildren = false;

            // Check if the current item has children
            foreach ($arr as $childData) {
                if ($childData['parent_id'] == $id) {
                    $hasChildren = true;
                    break;
                }
            }

            $html .= '<li class="nav-item dropdown">';

            if ($hasChildren) {
                $html .= '<a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8') . ' <i class="bi bi-chevron-down"></i></a>';
            } else {
                $html .= '<a class="nav-link scrollto" href="' . htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8') . '</a>';
            }

            if ($hasChildren) {
                $html .= '<ul class="dropdown-menu">';
                $html .= buildDropdown($arr, $id);
                $html .= '</ul>';
            }

            $html .= '</li>';
        }
    }

    return $html;
}

?>
<div class="img_float img_float_contact">
  <a href="https://www.orangeglobalconsultancy.in/contactus.php"><img src="assets/img/orange_contact.png"></a>
</div>
<div class="img_float">
  <a href="https://web.whatsapp.com/send?phone=919773855568" target="_blank"><img src="assets/img/whatsapp_icon.png"></a>
</div>
<!-- ======= Top Bar ======= -->
<div id="" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-center justify-content-md-between top_main_bar">
    <div class="align-items-center d-none d-md-flex top_note">
      <b class="note">Note - </b>
      <div id="news-ticker">
        <ul>
          <li>
            <a href="#">We are No-1 Immigration Consultant in Estern India Region </a>
          </li>
          <li>
            <a href="#">Poland has openned work permit scope again, apply now</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="d-flex align-items-center top_email">
      <span><i class="bx bx-envelope"></i> info@orangeglobalconsultancy.in</span> <span><i class="bi bi-phone"></i>
        +91
        9773855568</span>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="">
  <div class="container d-flex align-items-center">

    <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

    <nav class="navbar navbar-expand-lg top_nav">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
             <a class="nav-link" href="jobs.php">Jobs</a>
            <!--<a class="nav-link" href="affilate.php">Affiliate</a>-->
            <a class="nav-link" href="news.php">News</a>
            <a class="nav-link" href="blog.php">Blog</a>
           
            <a class="nav-link" href="testimonial.php">Testimonial</a>
            <!--<a class="nav-link" href="resource.php">Resources</a>-->
            <a class="nav-link" href="aboutus.php">About Us</a>
          </div>
        </div>
      </div>
    </nav>
    <a href="contactus.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Contact Us</a>

  </div>
  <div class="bg_bottom_bar">
    <div class="container d-flex align-items-center">
    <nav id="navbar" class="navbar order-last order-lg-0">
    <ul class="navbar-nav">
        <?php echo buildDropdown($arr, 0); ?>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>


    </div>
  </div>
</header><!-- End Header -->