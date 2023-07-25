<!-- header setion -->
<!-- <div id="header"></div> -->
<?php 
include 'header.php';
?>
<!-- header setion End -->

<!-- subpageHeader -->
<Section>
    <div class="container-fluid " style="background-color: #dfdddd;">
        <div class="row py-4">
            <div class="col-md-5 col-12 rightColspan">
                <div class="wrap-left-contain ps-6">Home | contact</div>
            </div>
            <div class="col-md-7 col-12">
                <div class="wrap-right-contain">CONTACT</div>
            </div>
        </div>
    </div>
</Section>
<!-- subpageHeader End -->


   <!-- CONTACT -->
   <section class="mt-5">
    <div class="container">
        <div class="titel">
            <h2>CONTACT US </h2>
            <span class="clearfix titel-icon"><i class='bx bxs-hard-hat'></i></span>
            <P class="sub-heading">Building the Future Together: Get in Touch with Our Expert Team Today</P>
        </div>
        <div class="row ">
            <div class="col-lg-4 text-center">
                <div class="wrap-box box1 bg-light py-5 px-2">
                    <div id="icon" class="mb-2"><i class='bx bx-phone'></i></div>
                    <div id="tel" class="mb-2">
                        <a href="tel:+9412245420" class="text-dark">9412245420</a> <br>
                        <a href="tel:+9927703242" class="text-dark">9927703242</a>
                    </div>
                    <div class="tel-text">
                        Support 24/7 - Online 24 hours
                    </div>

                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="wrap-box box2 bg-light py-5 px-4">
                    <div id="icon" class="mb-2"><i class='bx bx-map-alt'></i></div>
                    <div id="tel" class="mb-2">
                        <a href="https://goo.gl/maps/kJWRQqrsExMgX7iG6" class="text-dark">
                            <span>A-64, Next to sai mandir, Sai mandir road, MDA colony, Moradabad</span>
                        </a>
                    </div>
                    <div class="tel-text">
                        Mon- Sat: 5:00 am to 6:30 pm
                        Sunday: Close
                    </div>

                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="wrap-box box1 bg-light py-5 px-2">
                    <div id="icon" class="mb-2"><i class='bx bxl-gmail'></i></div>
                    <div id="tel" class="mb-2">
                        <a href="mailto:info@pathkconstruction.com" class="text-dark">info@pathkconstruction.com</a>
                    </div>
                    <div class="tel-text">
                        Support 24/7 - Online 24 hours
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- CONTACT -->
<!-- contact form  -->
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contactForm">
                    <h2 class="mb-4">Let's get in touch</h2>
                    <form action="send_email.php" method="post" autocomplete="off">
                        <input type="text" placeholder="Name" name="name" class="form-control mb-2 " id="name" required>
                        <input type="mail" placeholder="Email" name="email" class="form-control mb-2 " id="name" required>
                        <input type="tel" placeholder="Phone No." name="phone" class="form-control mb-2 " id="name" required>
                        <textarea name="message" id="" rows="5" class="w-100 form-control mb-2" placeholder="Description"
                            required></textarea>
                        <input type="submit" class="form-control mb-2 btn btn-primary" id="name">
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d55912.47966818915!2d78.7247221!3d28.8528504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afbed2cba2191%3A0x628dfbbd8b742c65!2sSai%20Mandir!5e0!3m2!1sen!2sin!4v1690203703635!5m2!1sen!2sin"
                    class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- contact form  -->

<!-- footer setion  -->
<!-- <div id="footer"></div> -->
<?php 
include 'footer.php';
?>
<!-- footer setion  End -->
