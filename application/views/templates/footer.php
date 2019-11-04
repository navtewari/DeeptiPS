<div class="contact-w3ls ">
    <div class="contact-top-w3-agile">
    </div>
    <div class="container">
        <h2 class="heading-agileinfo white-w3ls">Contact Us<span class="black-w3ls">Welcome to our School. We are glad to have you around.</span></h2>
        <ul class="w3_address">
            <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>P.O.Kusumkhera, Kamaluaganja Road, Haldwani - 263139 Distt. Nainital, Uttarakhand, India </span></li>
            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span>05946-261105<br>+91 9917534401</span></li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><span><a href="#">deeptipublicschool<br>@gmail.com</a></span></li>
            <li><i class="fa fa-star-o" aria-hidden="true"></i><span><a href="#">Affiliation No: 3530443<br>School Code: 57346</a></span></li>
        </ul>
        <div class="clearfix"></div>
        <div class="copy">
            <ul class="banner-menu-w3layouts">
                <li><a href="<?php echo site_url('web')?>">Home</a></li>
                <li><a href="<?php echo site_url('web/about')?>">About</a></li>                       
                <li><a href="<?php echo site_url('web/gallery')?>">Gallery</a></li>
                <li><a href="<?php echo site_url('web/activities')?>">Facilities</a></li>
                <li><a href="<?php echo site_url('web/tc')?>">TCs&apos;</a></li>
                <li><a href="<?php echo site_url('web/contact')?>">Contact</a></li>
            </ul>
            <ul class="agileits_social_list">
                <li><a href="http://www.facebook.com/deeptipublicschool" class="w3_agile_facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                        
            </ul>
            <p>© 2018 Deepti Public School | Developed by <a href="https://teamfreelancers.com/" target="_blank">Teamfreelancers.com</a> </p>
        </div>
    </div>
</div>
<!--//footer -->
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>  
<?php if ($menu == 5) { ?>
    <!-- light-case -->
    <script src="<?php echo base_url('assets/js/lightcase.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.events.touch.js'); ?>"></script>
    <script>
        $('.showcase').lightcase();
    </script>
    <!-- //light-case -->
<?php } ?>

<!--//js -->
<script src="<?php echo base_url('assets/js/SmoothScroll.min.js'); ?>"></script>
<!-- responsiveslides -->
<script src="<?php echo base_url('assets/js/responsiveslides.min.js'); ?>"></script>
<script>
// You can also use "$(window).load(function() {"
    $(function () {
// Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
        $("#slider_bday").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- //responsiveslides -->
<!-- OnScroll-Number-Increase-JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/js/numscroller-1.0.js'); ?>"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--Scrolling-top -->
<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js'); ?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!--//Scrolling-top -->
<!--flexiselDemo1 -->
<script type="text/javascript">
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 2,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 991,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flexisel.js'); ?>"></script>
<!--//flexiselDemo1 -->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-3.1.1.min.js'); ?>"></script>    
</body>
</html>