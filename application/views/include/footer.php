    <!-- Footer -->
    <footer class="text-lg-start text-white p-0 " style="background-image: url(<?= base_url() ?>assets/img/footer-bg.jpg)">


        <!-- Section: Links  -->
        <section class="">
            <div class="container  text-md-start ">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 ">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact Information
                        </h6>


                        <p><i class="fa-solid fa-location-dot  me-3 text-grayish"></i>
                            <b>A A Aqua International (PVT) Ltd.</b> <br>
                            <i class="fa-solid fa-location-dot  me-3 text-grayish visi" style="    visibility: hidden;"></i>
                            #42/A, Church Junction, Nainamadama, <br>

                            <i class="fa-solid fa-location-dot  me-3 text-grayish visi" style="    visibility: hidden;"></i>

                            Wennappuwa, Sri Lanka.
                        </p>
                        <!-- <p><i class="fas fa-phone me-3 text-grayish"></i>+94 31 2 257 072</p> -->
                        <p class="">
                            <i class="fas fa-phone me-3 text-grayish"></i>+94 31 2255 856 <br>
                            <i class="fas fa-phone me-3 text-grayish" style="visibility: hidden;"></i>+94 77 3406 865 <br>
                            <i class="fas fa-phone me-3 text-grayish" style="visibility: hidden;"></i>+94 77 7986 017 <br>


                            



                        </p>
                        <p>
                            <i class="fas fa-envelope me-3 text-grayish"></i>aaaquainternational@gmail.com <br>
                            <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>dcengineeringdnk@gmail.com <br>
                            <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>disneystudio85@gmail.com <br>
                            <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>dcengineeringdnk@gmail.com <br>
                            <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>sdklk7@yahoo.com
                        </p>


                        <!-- <p>
                            <i class="fas fa-globe me-3 text-grayish"></i>www.aaaqua.lk
                        </p> -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Main Menu
                        </h6>

                        <ul class="footer-menu two-cols">
                            <li>
                                <a href="<?= base_url() ?>">Home</a>
                            </li>
                            <li><a href="<?= base_url() ?>About-Us">About us</a></li>
                            <li><a href="<?= base_url() ?>Board-of-Directors">Board of Directors</a></li>
                            <li><a href="<?= base_url() ?>Our-Services">Our Services</a></li>

                            <li><a href="<?= base_url() ?>Gallery">Gallery</a></li>
                            <li><a href="<?= base_url() ?>Testimonials">Testimonials</a></li>
                            <li><a href="<?= base_url() ?>Contact-Us">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Our Services
                        </h6>
                        <ul class="footer-menu">
                            <li>
                                <a href="<?= base_url() ?>Our-Services">Exporting Fresh Fish</a>
                            </li>
                            <li><a href="<?= base_url() ?>Our-Services">Sea Foods Products</a></li>
                            <li><a href="<?= base_url() ?>Our-Services">Rigi Foam Cool Boxes Manufacturing</a></li>

                            <li><a href="<?= base_url() ?>Our-Services">Boat Manufacturing</a></li>

                        </ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Information
                        </h6>
                        <ul class="footer-menu">
                            <li><a href="<?= base_url() ?>Our-Boat-Factory">Our Boat Factory</a></li>
                            <li><a href="<?= base_url() ?>Local-Fish-Distribution">Local and Foreign Fish Distribution</a></li>
                            <li><a href="<?= base_url() ?>Food-Safety-Policy-of-the-Company">Food Safety Policy of the Company</a></li>
                            <li><a href="<?= base_url() ?>" download>A A Aqua Company Profile</a></li>



                        </ul>
                    </div>
                    <!-- Grid column -->


                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->



        <!-- Copyright -->
        <div class="text-center p-4 bg-black Copyright">


            © 2022 A A Aqua International (PVT) Ltd. All Rightes Reserved. | Powered by
            <a href="https://wdsl.lk/" style="font-weight:bold;" class="text-primary  text-decoration-none" target="_blank">Website Design Sri Lanka</a>
        </div>
        <!-- Copyright -->
    </footer>




    </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 50) {
                $(".header nav").addClass("header-active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".header nav").removeClass("header-active");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $('.test-popup-link').magnificPopup({
            items: {
                src: 'images/certificate/certificate-1.jpg'
            },
            type: 'image'
            // other options
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $(document).ready(function() {

            $('.owl-carousel-services').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
    </script>
    <script>
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 50) {
                $(".header nav").addClass("header-active fixed-top");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".header nav").removeClass("header-active fixed-top");
            }
        });
    </script>


    </html>