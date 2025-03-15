<?php include('include/header.php') ?>


<section class="breadcrum  bg-black">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h1 class="text-white"><?= $Home ?> </h1>

                <nav class="d-flex">

                    <h6 class="mb-0 text-white text-decoration-none">

                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>

                        <span>/</span>

                        <a href="#" class="text-white text-decoration-none"><?= $Home ?> </a>



                    </h6>

                </nav>

            </div>

        </div>

    </div>



</section>

<section class="story-section">

    <div class="container">

        <div class="row clearfix">

            <!-- Image Column -->

            <div class="image-column col-lg-6 col-md-12 col-sm-12">

                <img src="<?= base_url() ?>assets/img/our-boat-factory.jpg" class="w-100" alt="" style="border-radius: 15px;">

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

                        <!-- <h3 class="main-text ">AA AQUA (PVT) LTD.</h3> -->

                    </div>

                    <h3 class="main-text "><?= $Home ?></h3>

                    <div class="text">

                        <p>Designed initially as a safer beach launching vessel, the Profile Boats range has developed to provide craft from family recreation, to seriously good dive and fishing boats, as well as commercial charter vessels. The inherent safety of the unique aluminium chamber & Fiber design offers superior stability and makes all Profile Boats virtually unsinkable. Profile Boats are manufactured in Negmombo Sri lanka. In 2022 Profile Boats (Procell Boats in SLS) will also be manufactured in the SLS under license by Excel Boats Sri lanka </p>

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<section class="pt-0">

    <div class="container">

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

<?php include('include/footer.php') ?>