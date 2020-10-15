		    
			<footer class="footer">
                <div class="container">
                    <div class="footer__top">
                        <div class="row">
                            <div class="col-md-5 col-lg-6">
                                <div class="footer-column pr-xl-30 mr-xl-30">
                                    <h6>About Us</h6>
                                    <p class="mb-20">Calibraint a next-generation technology service company that delivers knee-jerk solutions and services with a customer-centric approach. We offer AI & Cognitive Computing solutions, Machine Learning, UI UX design, Web Development, Mobile Application Development, Blockchain, and Big Data services.</p>
                                    <a class="speak-link" href="#">Speak to us <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3">
                                <div class="footer-column">
                                    <h6>Services</h6>
                                    <ul class="footer-list">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Ecommerce Web Design</a></li>
                                        <li><a href="#">Internet Marketing</a></li>
                                        <li><a href="#">Branding</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="footer-column">
                                    <h6>Office</h6>
                                    <address>No 100, Sam Snoah Towers,<br> 2nd Avenue, B Block,<br> Annanagar East,<br> Chennai, Tamil Nadu - 600030<br> +91 7305907844</address>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                        <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/row -->
                    </div>
                    <div class="footer__bottom">
                        <p class="mb-0">&copy; 2020 APYLABS. All Rights reserved.</p>
                    </div>
                </div>
			</footer> 
 

		</div><!--/Wrapper -->
        
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-bundle.min.js"></script>
    <?php if(isset($wow) && $wow=='yes') { ?>
        <script src="js/wow.min.js"></script> 
        <script>new WOW().init();</script>
    <?php } ?>
  
    <?php if(isset($slick) && $slick=='yes') { ?>
        <script src="js/slick.min.js"></script> 
        <script>
			$('.slick-testimonial').slick({
                autoplay: true,
                dots: false,
                speed: 1500,
                slidesToShow: 1,
                infinite: true,
                prevArrow: '<button type="button" class="slick-prev"><i class="icofont-simple-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="icofont-simple-right"></i></button>'
			});
            $('.about-slick-carousel').slick({
                autoplay: true,
                dots: false,
                speed: 1500,
                slidesToShow: 1,
                infinite: true,
                prevArrow: '<button type="button" class="slick-prev slick-center"><i class="icofont-simple-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next slick-center"><i class="icofont-simple-right"></i></button>'
			});
        </script>
    <?php } ?> 
        <script src="js/main.js"></script>
    </body>
</html>