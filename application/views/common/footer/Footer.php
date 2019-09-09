<!--footer 4 start -->
<footer class="footer footer-four">
    <div class="primary-footer brand-bg text-center">
        <div class="container">

            <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light" data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>

            <ul class="social-link tt-animate ltr mt-20">
                <li><a href="https://www.facebook.com/jiauto.jp"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/jiauto"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/jiauto.jp"><i class="fa fa-instagram"></i></a></li>
            </ul>

            <hr class="mt-10">

            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logo">
                        <img class="ft_logo" src="<?php echo base_url();?>assets/img/logo-white.png" alt="">
                    </div>

                    <span class="copy-text">Copyright &copy; <script>document.write(new Date().getFullYear())</script><a href="#"> JI Auto Co. Ltd</a> &nbsp; | &nbsp;  All Rights Reserved
                    <div class="footer-intro">
                        <p>Used truck, nationwide network of heavy machinery sales / purchase.</p>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <div class="secondary-footer brand-bg darken-2 text-center">
        <div class="container">
            <ul>
                <li><a href="<?php echo base_url()?>">Home</a></li>
                <li><a href="<?php echo base_url()?>About">About us</a></li>
                <li><a href="<?php echo base_url()?>Sell">Sell</a></li>
                <li><a href="<?php echo base_url()?>Company">Company Profile</a></li>
                <li><a href="<?php echo base_url()?>Inquiry">Inquiry</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Site Map</a></li>
            </ul>
        </div><!-- /.container -->
    </div><!-- /.secondary-footer -->
</footer>
<!--footer 4 end-->


<!-- Preloader -->
<div id="preloader">
    <div class="preloader-position">
        <img src="<?php echo base_url();?>assets/img/logo.png" alt="logo" >
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->


<!-- jQuery -->
<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/materialize/js/materialize.min.js"></script>
<script src="<?php echo base_url();?>assets/js/menuzord.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-tabcollapse.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/js/smoothscroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/slick.js"></script>

<script src="<?php echo base_url();?>assets/js/scriptsae52.js?v=5"></script>
<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
</script>
</body>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es,ja,jv,ko,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
    }
</script>

</html>