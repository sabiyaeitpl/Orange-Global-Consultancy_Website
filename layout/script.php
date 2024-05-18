<!-- Modal -->

<!--<div id="preloader"></div>-->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"
  integrity="sha512-J9QfbPuFlqGD2CYVCa6zn8/7PEgZnGpM5qtFOBZgwujjDnG5w5Fjx46YzqvIh/ORstcj7luStvvIHkisQi5SKw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="assets/js/owl.carousel.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script>
  $(function () {
    var $ticker = $('#news-ticker'),
      $first = $('li:first-child', $ticker);

    // put an empty space between each letter so we can 
    // use break word
    $('a', $ticker).each(function () {
      var $this = $(this),
        text = $this.text();
      $this.html(text.split('').join('&#8203;'));
    });

    // begin the animation
    function tick($el) {
      $el.addClass('tick')
        .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {

          $el.removeClass('tick');
          var $next = $el.next('li');
          $next = $next.length > 0 ? $next : $first;
          tick($next);
        });
    }

    tick($first);

  });
</script>
<script type="text/javascript">
  $(window).load(function () {
    $('#myModal').modal('show');
  }); 
  
  
  $(document).ready(function () {
      var owl = $("#owl-demo");
      owl.owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1000, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option

      });

      // Custom Navigation Events
      $(".next").click(function () {
        owl.trigger('owl.next');
      })
      $(".prev").click(function () {
        owl.trigger('owl.prev');
      })
      $(".play").click(function () {
        owl.trigger('owl.play', 1000);
      })
      $(".stop").click(function () {
        owl.trigger('owl.stop');
      })


    });
</script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>