<?php include('include/header.php') ?>

<section class="p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

        <div class="carousel-inner">
            <?php
            $sl_count = 1;
            foreach ($brands as $bra) {
            ?>
                <div class="carousel-item <?php if ($sl_count == 1) {
                                                echo "active";
                                            } ?>">
                    <img src="<?= UP ?><?= $bra->Image ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1><?= $bra->BrandTitle ?></h1>
                        <p><?= $bra->ShortDescription ?></p>
                    </div>
                </div>
            <?php
                $sl_count++;
            }


            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="story-section">
    <div class="container">
        <div class="row clearfix">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <img src="<?= base_url() ?>media/image/<?= $pra->Image ?>" class="w-100" alt="" style="border-radius: 15px;">
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="title-box">
                        <div class="rating">
                            <span class="star fa fa-fish"></span>
                            <span class="star fa fa-ship  "></span>
                            <span class="star fa fa-fish fa-rotate-180"></span>
                        </div>
                        <h3 class="main-text ">WELCOME TO AA AQUA (PVT) LTD.</h3>
                    </div>
                    <div class="bold-text">Fresh & Frozen Sea Food Trading</div>
                    <div class="text">
                        <p><?= $pra->Description ?></p>
                    </div>
                    <a href="<?= base_url() ?>About-Us" class="theme-btn btn-style-two"><span class="txt">Learn More</span></a>



                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-services" style="    background-image: url(assets/img/bg-new.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title-box">
                    <div class="rating">
                        <span class="star fa fa-fish"></span>
                        <span class="star fa fa-ship  "></span>
                        <span class="star fa fa-fish fa-rotate-180"></span>
                    </div>
                    <h3 class="main-text text-white">Our Services</h3>
                </div>





            </div>
        </div>

        <div class="row mt-5">
            <div class="owl-carousel owl-theme owl-carousel-services">
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url() ?>assets/p1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Exporting Fresh Fish

                            </h5>
                            <p class="card-text text-justify">Fresh harvests of the Indian Ocean, naturally bred, ethically caught, and delivered fresh to the global markets</p>

                            <a href="<?= base_url() ?>Our-Services" class="btn btn-dark bg-black w-100 text-uppercase"><span class="txt">Learn
                                    More</span></a>
                        </div>

                    </div>

                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url() ?>assets/p2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Sea Foods Products</h5>
                            <p class="card-text text-justify">Specialising in high end, top quality seafood products for the international industry. </p>

                            <a href="<?= base_url() ?>Our-Services" class="btn btn-dark bg-black w-100 text-uppercase"><span class="txt">Learn
                                    More</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url() ?>assets/p3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Rigi Foam Cool Boxes Supply

                            </h5>
                            <p class="card-text text-justify">Rigifoam Boxes manufacture in various sizes and densities to serve your unique applications. </p>

                            <a href="<?= base_url() ?>Our-Services" class="btn btn-dark bg-black w-100 text-uppercase"><span class="txt">Learn
                                    More</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url() ?>assets/p4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Boat Manufacturing</h5>
                            <p class="card-text text-justify">As a AA Aqua International We owns Boat Manufacturing Factory in Sri Lanka.</p>

                            <a href="<?= base_url() ?>Our-Services" class="btn btn-dark bg-black w-100 text-uppercase"><span class="txt">Learn
                                    More</span></a>
                        </div>
                    </div>
                </div>


            </div>













        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <a href="<?= base_url() ?>Our-Services" class="theme-btn btn-style-two"><span class="txt">Find all Services</span></a>
            </div>
        </div>

    </div>
</section>

<section>

    <div class="container">

        <div class="row mb-5">

            <div class="col-md-12 text-center">

                <h1>Distribution Methods of Fish in the Country </h1>



            </div>

        </div>

        <div class="row">

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/1.jpg">

                        <img src="assets/img/lfd/1.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/2.jpg">

                        <img src="assets/img/lfd/2.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/3.jpg">

                        <img src="assets/img/lfd/3.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/4.jpg">

                        <img src="assets/img/lfd/4.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <!-- <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/5.jpg">

                        <img src="assets/img/lfd/5.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/6.jpg">

                        <img src="assets/img/lfd/6.jpg" class="gallery w-100">

                    </a>

                </div>

            </div> -->

        </div>



        <div class="row my-5">

            <div class="col-md-12 text-center">

                <h1>Methods of Distribution of Fish to Foreign Markets </h1>



            </div>

        </div>

        <div class="row">

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/7.jpg">

                        <img src="assets/img/lfd/7.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/8.jpg">

                        <img src="assets/img/lfd/8.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/9.jpg">

                        <img src="assets/img/lfd/9.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="item-gallery">

                    <a data-fancybox="gallery" href="assets/img/lfd/10.jpg">

                        <img src="assets/img/lfd/10.jpg" class="gallery w-100">

                    </a>

                </div>

            </div>





        </div>


    </div>

    <div class="container">
        <div class="row my-5">

            <div class="col-md-12 text-center">

                <h1>Our Boat Factory </h1>



            </div>

        </div>

        <div class="row">
            <?php
            for ($x = 1; $x <= 19; $x++) {
                echo '
                <div class="col-md-3 mb-4">
                        <a data-fancybox="gallery" href="assets/img/our-factory/our-boat-factory' . $x . '.jpg">

                            <img src="assets/img/our-factory/our-boat-factory' . $x . '.jpg" class="gallery w-100">

                        </a>
                    </div>
                
                
                ';
            }
            ?>

            <div class="col-md-3 mb-4">
                <a data-fancybox="gallery" href="assets/img/our-factory/our-boat-factory20.jpg">

                    <img src="assets/img/our-factory/our-boat-factory20.jpg" class="gallery w-100">

                </a>
            </div>




        </div>

    </div>

</section>



<section class="pt-0">

    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="title-box">
                    <div class="rating">
                        <span class="star fa fa-fish"></span>
                        <span class="star fa fa-ship  "></span>
                        <span class="star fa fa-fish fa-rotate-180"></span>
                    </div>
                    <h3 class="main-text ">Our Products</h3>
                </div>

            </div>
        </div>
        <div class="row  mt-5">
            <?php foreach ($products as $paaa) : ?>
                <div class="col-lg-3 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="<?= UP ?><?= $paaa->Image ?>" class="img-fluid">
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $paaa->ProductTitle ?></h5>
                            <p class="card-text">
                                <?= $paaa->ShortDescription ?>
                            </p>
                            <a href="<?= base_url() ?>Products-Details/<?= url_title($paaa->ProductTitle) ?>/<?= $paaa->ProductId ?>" class="btn btn-dark w-100 text-uppercase py-2" style="border-radius: 0px;">View More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>


        </div>
    </div>




</section>

<section class="our-services" style="    background-image: url(assets/img/fish-12.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="title-box">
                    <div class="rating">
                        <span class="star fa fa-fish"></span>
                        <span class="star fa fa-ship  "></span>
                        <span class="star fa fa-fish fa-rotate-180"></span>
                    </div>
                    <h3 class="main-text text-white">What our customers say
                    </h3>
                </div>


            </div>

        </div>

        <div class="row mt-5">
            <?php foreach ($testimonials as  $roo) : ?>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="<?= base_url() ?>assets/dummypic.jpg" class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold text-center"><?= $roo->Name ?></h5>
                            <h6 class="font-weight-bold my-3 text-center"><?= $roo->Designation ?></h6>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-warning"></i>
                                </li>
                            </ul>
                            <p class="mb-2">
                                <i class="fas fa-quote-left pe-2"></i><?= $roo->Description ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>



        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <a href="<?= base_url() ?>Testimonials" class="theme-btn btn-style-two"><span class="txt">More Testimonials</span></a>

            </div>
        </div>


    </div>
</section>
<section class="form-contact">
    <div class="container">
        <div class="row clearfix">
            <!-- Form Text -->
            <div class="text-block col-lg-4 col-md-5 col-sm-12">
                <div class="rating">
                    <span class="star fa fa-fish"></span>
                    <span class="star fa fa-ship  "></span>
                    <span class="star fa fa-fish fa-rotate-180"></span>
                </div>
                <h2>Contact Information</h2>



                <p class="fs-5"><i class="fa-solid fa-location-dot  me-3 text-grayish"></i>

                    #42/A, Church Junction, Nainamadama,

                    <i class="fa-solid fa-location-dot  me-3 text-grayish visi" style="    visibility: hidden;"></i>


                    Wennappuwa, Sri Lanka.
                </p>
                <p class="fs-5">
                    <i class="fas fa-phone me-3 text-grayish"></i>+94 31 2257 072 <br>
                    <i class="fas fa-phone me-3 text-grayish" style="visibility: hidden;"></i>+94 77 3406 865 <br>
                    <i class="fas fa-phone me-3 text-grayish" style="visibility: hidden;"></i>+94 77 7986 017 <br>



                </p>

                <p class="fs-5">
                    <i class="fas fa-envelope me-3 text-grayish"></i>aaaquainternational@gmail.com <br>
                    <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>dcengineeringdnk@gmail.com <br>
                    <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>disneystudio85@gmail.com

                </p>


                <p class="fs-5">
                    <i class="fas fa-globe me-3 text-grayish"></i>www.aaaqua.lk
                </p>

            </div>
            <!-- Form Detail -->
            <div class="col-lg-8 col-md-7 col-sm-12">
                <form id="contact-form" action="" name="contact" method="post">
                    <div class="row clearfix">
                        <!--Nane  -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="form[Full-Name]">
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="form[Email]">
                            </div>
                        </div>
                        <!--Phone  -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" name="form[Telephone]">
                            </div>
                        </div>
                        <!-- Subject -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="form[Subject]">
                            </div>
                        </div>
                        <!-- Text area -->
                        <div class="col-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="form[Message]"></textarea>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="theme-btn btn-style-two border-0 "><span class="txt">Submit</span>

                            </button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php') ?>