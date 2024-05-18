
<div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="">
                        <a href="dashboard.php">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Pages
                        </a>
                    </li>
                    <li>
                        <a href="menus.php">
                            <i class="iconsminds-data-center"></i> Menus
                        </a>
                    </li>
                    <li>
                        <a href="cms.php">
                        <i class="simple-icon-grid"></i> CMS
                        </a>
                    </li>
                    <li>
                        <a href="#jobs">
                        <i class="simple-icon-grid"></i> Job
                        </a>
                    </li>
                    
                    
                    
                    <?php if ($role_id==1 || $role_id==3) { ?>
                    <li>
                        <a href="user_list.php">
                            <i class="iconsminds-user"></i> User
                        </a>
                    </li>
                    <?php } ?>
                    <?php if ($role_id==1 || $role_id==3) { ?>
                    <li>
                        <a href="service_list.php">
                            <i class="iconsminds-box"></i> Services
                        </a>
                    </li>
                    <?php } ?>
                    <?php if ($role_id==1 || $role_id==3) { ?>
                    <li>
                        <a href="#product">
                            <i class="iconsminds-jacket"></i> Products
                        </a>
                    </li>
                    <?php } ?>
                    <?php if ($role_id==1 || $role_id==3) { ?>
                    <li>
                        <a href="testimonials_list.php">
                            <i class="iconsminds-profile"></i> Testimonials
                        </a>
                    </li>
                    <?php } ?>
                    <?php if ($role_id==1) { ?>
                    <li>
                        <a href="general_setting.php?id=<?php echo $user_id; ?>">
                            <i class="iconsminds-gear"></i> General Settings
                        </a>
                    </li>
                    <?php
                    } 
                    ?>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <?php if ($role_id==1|| $role_id==3) { ?>
            
                 
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Home</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="banner.php">
                                        <i class="simple-icon-credit-card"></i> <span
                                            class="d-inline-block">Banner Section</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="home_about.php">
                                        <i class="simple-icon-list"></i>
                                         <span class="d-inline-block">About Section</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="services_countries.php">
                                    <i class="iconsminds-box"></i> Services Countries
                                    </a>
                                </li>
                                <li>
                                    <a href="all_services_countries.php">
                                    <i class="iconsminds-box"></i> All Services Countries
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.php">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Blog Section</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="free_trainning_list.php">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Free Trainning</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                            aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">About us</span>
                        </a>
                        <div id="collapseProduct" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="about_why_choose_us.php">
                                        <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Why Choose Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php  } ?>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
                            aria-controls="collapseBlog" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Blog</span>
                        </a>
                        <div id="collapseBlog" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                            <?php if ($role_id==1|| $role_id==3) { ?>
                                 <li>
                                    <a href="blog_category.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Blog Category</span>
                                    </a>
                                </li>
                            <?php } ?>
                                <li>
                                    <a href="blog_list.php">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Blog List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php if ($role_id==1|| $role_id==3) { ?>

                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true"
                            aria-controls="collapseArticle" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Article</span>
                        </a>
                        <div id="collapseArticle" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                 <li>
                                    <a href="article_category.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Article Category</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="articale_list.php">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Article List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseBook" aria-expanded="true"
                            aria-controls="collapseBook" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Book</span>
                        </a>
                        <div id="collapseBook" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                            <?php if ($role_id==1|| $role_id==3) { ?>
                                 <li>
                                    <a href="book_category.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Book Category</span>
                                    </a>
                                </li>
                            <?php } ?>
                                <li>
                                    <a href="book_list.php">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Book List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMagazine" aria-expanded="true"
                            aria-controls="collapseMagazine" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Magazine</span>
                        </a>
                        <div id="collapseMagazine" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                            <?php if ($role_id==1|| $role_id==3) { ?>
                                 <li>
                                    <a href="magazine_category.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Magazine Category</span>
                                    </a>
                                </li>
                            <?php } ?>
                                <li>
                                    <a href="magazine_list.php">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Magazine List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php if ($role_id==1|| $role_id==3) { ?>

                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true"
                            aria-controls="collapseArticle" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Events</span>
                        </a>
                        <div id="collapseArticle" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="event_list.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Events</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if ($role_id==1|| $role_id==3) { ?>

                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true"
                            aria-controls="collapseArticle" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Webinar</span>
                        </a>
                        <div id="collapseArticle" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="webinar_list.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Webinar</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="webinar_register.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Webinar Register</span>
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if ($role_id==1|| $role_id==3) { ?>

                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true"
                            aria-controls="collapseArticle" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Innovation</span>
                        </a>
                        <div id="collapseArticle" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="innovation_list.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Innovation List</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="innovation_register.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Innovation Register</span>
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                    </li>
                    <?php } ?>
                    
                  
                </ul>
                <ul class="list-unstyled" data-link="product">
                    <li>
                        <a href="productcategory.php">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="cupon.php">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Cupon</span>
                        </a>
                    </li>
                    <li>
                        <a href="products.php">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="order.php">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Orders</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="jobs">
                    <li>
                        <a href="job_type.php">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Job Types</span>
                        </a>
                    </li>
                    <li>
                        <a href="jobs.php">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Jobs</span>
                        </a>
                    </li>
                    <li>
                        <a href="job_application.php">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Application</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>