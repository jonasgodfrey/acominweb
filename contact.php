<?php

include('inc/header.php')
?>
        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Contact Us</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- start contact-pg-contact-section -->
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s3 section-title-s5">
                            <h2>Our Contacts</h2>
                        </div>
                        <div class="contact-details">
                            <p>Get in Touch with Us. </p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <h5>Our Location</h5>
                                    <p>No. 6, Egbedi Close, Off Samuel Ladoke Akintola Boulevard, Garki 2, Abuja</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <h5>Phone</h5>
                                    <p>+234 816 244 5607</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p>info@acomin.org</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form-area">
                            <div class="section-title-s3 section-title-s5">
                                <h2>Quick Contact Form</h2>
                            </div>
                            <div class="contact-form">
                                <form method="post" class="contact-validation-active" id="contact-form">
                                    <div>
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control"  name="address" id="address" placeholder="Address*">
                                    </div>
                                    <div class="comment-area">
                                        <textarea  name="note"  id="note" placeholder="Concern"></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">Submit Now</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.4732358801007!2d7.492243514160569!3d9.020521391606907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0c77230ace77%3A0xd69458137cf1daee!2s6%20Egbedi%20Cl%2C%20Garki%2C%20Abuja%2C%20Nigeria!5e0!3m2!1sen!2sbd!4v1617113469640!5m2!1sen!2sbd" 
                            allowfullscreen></iframe>

                        </div>                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->
       
        <!-- start tp-site-footer -->
        <?php

        include('inc/footer.php')
        ?>