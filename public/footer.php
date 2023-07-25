<!-- footer section  -->
<footer class="mt-5" id="footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="logo mb-3">
                    <a href="home" rel="home">
                        <img src="../client/images/webSiteLogo/pathakLogoFooter.png" alt="LOGO" id="logo">
                    </a>
                </div>
                <div class="aboutPera">   
                    <p class="text-white-50">Pathak construction is one of the prominent groups of the brass city.
                        We have been in real estate since 1990 and we have delivered more than 150 successful
                        projects in Moradabad,
                        Bijnor,Rudrapur and Noida.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="address pb-2">
                    <a href="https://goo.gl/maps/kJWRQqrsExMgX7iG6" class="text-white-50">
                        <span>A-64, Next to sai mandir, Sai mandir road, MDA colony, Moradabad</span>
                    </a>
                </div>
                <div class="phoneNumber pb-2">
                    <a href="tel:+9412245420" class="text-white-50">9412245420</a>
                </div>
                <div class="emailAddress pb-2">
                    <a href="mailto:info@pathkconstruction.com" class="text-white-50">info@pathkconstruction.com</a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-4 mb-3 ">
                        <img src="../client/images/webSiteLogo/123.webp" alt="FooterGallary" class="w-100">
                    </div>
                    <div class="col-4 mb-3 ">
                        <img src="../client/images/webSiteLogo/167.webp" alt="FooterGallary" class="w-100">
                    </div>
                    <div class="col-4 mb-3 ">
                        <img src="../client/images/webSiteLogo/55.webp" alt="FooterGallary" class="w-100">
                    </div>
                    <div class="col-4 mb-3 ">
                        <img src="../client/images/webSiteLogo/74.webp" alt="FooterGallary" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="footerMenuLInks">
            <ul>
                <li><a href="home" rel="HOME">HOME</a></li>
                <li><a href="AboutUS" rel="ABOUT">ABOUT US</a></li>
                <li><a href="Services" rel="SERVICES">SERVICES</a></li>
                <li><a href="contact" rel="CONTACT">CONTACT</a></li>
            </ul>
        </div>
    </div>

    </div>
    <div class="footerCopyWrite text-white text-center py-2">
        <span>© 2023 Copyright : Pathak Constructions</span>
    </div>
</footer>
<!-- footer section  -->

<!-- java script all link  -->
<script src="../client/javaScript_Mode//homeSlider.js"></script>
<script src="../client/javaScript_Mode/testimonial.js"></script>
 <!-- java script all link end -->


<!-- =========================================== jQuery CDN========================================================== -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <!--=========== owl Carousel =========== -->
<script>
$('#All-home-services').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
</script>
 <!--=========== owl Carousel ENd =========== -->

<!-- jQuary  magnific-popup js  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('#All-home-services').magnificPopup({
    delegate: 'a', 
    type: 'image',
    gallery: {
        enabled: true
    }
});
</script>
<!-- jQuary  magnific-popup End-->
<!--=========== owl Carousel =========== -->
<script>
$('#All-home-services').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
</script>
<script>
$('#AllClients').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 5
        },
        1000: {
            items: 7
        }
    }
})
</script>
<!-- =========================================== jQuery CDN ENd========================================================== -->

</body>
</html>

