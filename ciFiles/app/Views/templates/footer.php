<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>

<script src="<?php echo site_url("assets/js/bootstrap.min.js"); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
<script src="<?php echo site_url("assets/js/app.min.js"); ?>"></script>



<a class="d-none d-lg-block whatsappLink " target="_blank" href="https://api.whatsapp.com/send?phone=919967491105 6&text=Tell me more about your trips" id="wa-desktop" class="whatsappLink">
    <img src="<?php echo site_url("assets/images/wa.png"); ?> " style="width: 60px;
height: 60px;
z-index: 900;
position: fixed;
right: 1em;
bottom: 8em;">
</a>
<a target="_blank" href="https://api.whatsapp.com/send?phone=919967491105 6&text=Tell me more about your trips" id="wa-touch" class="whatsappLink d-block d-lg-none">
    <img src="<?php echo site_url('assets/images/wa.png'); ?> " style="width: 60px;
height: 60px;
position: fixed;
right: 1.5em;
z-index: 900;
bottom: 8em;">
</a>


<footer id="desktop" class="d-none d-lg-block">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="footer-link-title">Quick Links</h3>
                <ul class="footer-link-list">
                    <li>
                        <a href="<?php echo site_url('') ?> ">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('all-trips') ?> ">All Trips</a>
                    </li>
                    <li>
                        <a href="{{url('about')?> ">About</a>
                    </li>
                    <li>
                        <a href="{{url('contact')?> ">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="footer-link-title">Footer Links</h3>
                <ul class="footer-link-list">
                    <li>
                        <a href="https://instagram.com/travelbuddystoursandevents">Instagram</a>
                    </li>
                    <li>
                        <a href="mailto:hello@travelbuddys.in">Email</a>
                    </li>
                    <!-- <li>
                        <a href="#">YouTube</a>
                    </li>
                    <li>
                        <a href="#">LinkedIn</a>
                    </li> -->
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="footer-link-title">Footer Links</h3>
                <ul class="footer-link-list">
                    <li>
                        <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <!-- <li>
                        <a href="#">Footer Link</a>
                    </li>
                    <li>
                        <a href="#">Footer Link</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <p class="text-center text-light" style="margin-top: 1em;">&copy; TravelBuddy 2023 | All Rights Reserved</p>
    </div>
</footer>

<footer id="desktop" class="d-sm-block d-md-block d-lg-none">
    <div class="container left">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="footer-link-title">QUICK MENU</h3>
                <ul class="footer-link-list">
                    <li>
                        <a href="<?php echo site_url('') ?> ">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('all-trips') ?> ">All Trips</a>
                    </li>
                    <li>
                        <a href="{{url('about')?> ">About</a>
                    </li>
                    <li>
                        <a href="{{url('contact')?> ">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="footer-link-title">Footer Links</h3>
                <ul class="footer-link-list">
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <a href="#">Twitter</a>
                    </li>
                    <li>
                        <a href="#">YouTube</a>
                    </li>
                    <li>
                        <a href="#">LinkedIn</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="footer-link-title">Footer Links</h3>
                <ul class="footer-link-list">
                    <li>
                        <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="text-left text-light" style="margin-top: 1em;">&copy; TravelBuddy 2023 | All Rights Reserved</p>
    </div>
</footer>



    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-S6FD7GSZZM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-S6FD7GSZZM');
    </script> -->

</body>

</html>