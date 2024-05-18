<?php
session_start();

//goddady server setup
// $con=mysqli_connect("localhost","creative_slumdog","Abbas@1995","creative_slumdog");
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
// define('SITE_PATH','https://creativeslumdog.com/');

//Hostinger server setup
// $con=mysqli_connect("localhost","Fintellect","Abbas@1995","wcoaching");
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/wc/');
// define('SITE_PATH','https://thefintellect.co.in/wc/');

//local setup
// $con=mysqli_connect("localhost","root","","orangeglobal");
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/orangeglobal/');
// define('SITE_PATH','http://localhost/orangeglobal/');
$con = mysqli_connect("localhost","orangeglobal_admin","#G+U1[E%b8!}","orangeglobal");
 if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
define('SITE_PATH','https://orangeglobalconsultancy.in/');

define('CMS_IMAGE_SERVER_PATH',SERVER_PATH.'media/cms/');
define('CMS_IMAGE_SITE_PATH',SITE_PATH.'media/cms/');

define('MANAGE_WHY_IMAGE_SERVER_PATH',SERVER_PATH.'media/allSearvices/');
define('MANAGE_WHY_IMAGE_SITE_PATH',SITE_PATH.'media/allSearvices/');

define('APPLICATION_IMAGE_SERVER_PATH',SERVER_PATH.'media/application/');
define('APPLICATION_IMAGE_SITE_PATH',SITE_PATH.'media/application/');

define('WEBINAR_IMAGE_SERVER_PATH',SERVER_PATH.'media/webinar/');
define('WEBINAR_IMAGE_SITE_PATH',SITE_PATH.'media/webinar/');

define('INNOVATION_IMAGE_SERVER_PATH',SERVER_PATH.'media/innovation/');
define('INNOVATION_IMAGE_SITE_PATH',SITE_PATH.'media/innovation/');

define('BANNER_IMAGE_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_IMAGE_SITE_PATH',SITE_PATH.'media/banner/');




define('CONTENT_IMAGE_SERVER_PATH',SERVER_PATH.'media/contents/');
define('CONTENT_IMAGE_SITE_PATH',SITE_PATH.'media/contents/');

//countries we offer hogaya abhi without name change
define('WHY_IMAGE_SERVER_PATH',SERVER_PATH.'media/whyChooseUs/');
define('WHY_IMAGE_SITE_PATH',SITE_PATH.'media/whyChooseUs/');

define('BLOG_CATEGORY_IMAGE_SERVER_PATH',SERVER_PATH.'media/blogCategory/');
define('BLOG_CATEGORY_IMAGE_SITE_PATH',SITE_PATH.'media/blogCategory/');

define('BLOG_IMAGE_SERVER_PATH',SERVER_PATH.'media/blog/');
define('BLOG_IMAGE_SITE_PATH',SITE_PATH.'media/blog/');

define('PROFILE_IMAGE_SERVER_PATH',SERVER_PATH.'media/profile/');
define('PROFILE_IMAGE_SITE_PATH',SITE_PATH.'media/profile/');

define('ARTICLE_CATEGORY_IMAGE_SERVER_PATH',SERVER_PATH.'media/articleCategory/');
define('ARTICLE_CATEGORY_IMAGE_SITE_PATH',SITE_PATH.'media/articleCategory/');

define('ARTICLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/article/');
define('ARTICLE_IMAGE_SITE_PATH',SITE_PATH.'media/article/');

define('BOOK_CATEGORY_IMAGE_SERVER_PATH',SERVER_PATH.'media/bookCategory/');
define('BOOK_CATEGORY_IMAGE_SITE_PATH',SITE_PATH.'media/bookCategory/');

define('BOOK_IMAGE_SERVER_PATH',SERVER_PATH.'media/book/');
define('BOOK_IMAGE_SITE_PATH',SITE_PATH.'media/book/');

define('MAGAZINE_IMAGE_SERVER_PATH',SERVER_PATH.'media/magazine/');
define('MAGAZINE_IMAGE_SITE_PATH',SITE_PATH.'media/magazine/');

define('CHILD_SERVICE_IMAGE_SERVER_PATH',SERVER_PATH.'media/child_service/');
define('CHILD_SERVICE_IMAGE_SITE_PATH',SITE_PATH.'media/child_service/');

define('TESTIMONIALS_IMAGE_SERVER_PATH',SERVER_PATH.'media/testimonials/');
define('TESTIMONIALS_IMAGE_SITE_PATH',SITE_PATH.'media/testimonials/');

define('EVENT_IMAGE_SERVER_PATH',SERVER_PATH.'media/event/');
define('EVENT_IMAGE_SITE_PATH',SITE_PATH.'media/event/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/products/');

?>