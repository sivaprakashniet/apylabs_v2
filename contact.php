<?php 
    $active_menu = 'contact';
    include_once('includes/header.php');
?>
    <div class="subpage-wrapper py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="contact-info">
                        <div class="footer-column mb-xl-30">
                            <h6>Address</h6>
                            <address>No 100, Sam Snoah Towers,<br> 2nd Avenue, B Block, Annanagar East,<br> Chennai, Tamil Nadu - 600030<br> +91 7305907844</address>
                        </div> 
                        <div class="footer-column">
                            <h6>Follow Us</h6>
                            <ul class="social-list">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <form action="">
                        <div class="contact-form-wrapper">
                            <div class="section-head text-left">
                                <h2 class="mb-10">Let's Us Know Your Need</h2>
                                <p class="mb-0">We are waiting to assist you...</p>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control form-control-lg" placeholder="Name *">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email Address *">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <select class="custom-select custom-select-lg">
                                        <option value="0">Country *</option>
                                        <option value="1">India</option>
                                        <option value="2">Australia</option>
                                        <option value="3">England</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="custom-select custom-select-lg">
                                        <option value="0">Select Service *</option>
                                        <option value="1">UI/UX Design</option>
                                        <option value="2">Mobile Application</option>
                                        <option value="3">Web Development</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <textarea class="form-control form-control-lg" rows="6" placeholder="Message"></textarea>
                             </div>
                             <div class="form-group">
                                <button class="btn btn-lg btn-primary">Send Enquiry</button>
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
    include_once('includes/footer.php');
?>