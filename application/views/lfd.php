<?php include('include/header.php') ?>

<style>
    /* Create four equal columns that sits next to each other */
    .column {
        -ms-flex: 25%;
        /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
        }
    }
</style>
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
<section class="story-section pb-0">
    <div class="container">
        <div class="row clearfix">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <img src="<?= base_url() ?>assets/Local and Foreign Fish Distribution.jpg" class="w-100" alt="" style="border-radius: 15px;">
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
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1>Distribution methods of fish in the country </h1>

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
            <div class="col-md-3">
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
            </div>
        </div>

        <div class="row my-5">
            <div class="col-md-12 text-center">
                <h1>Methods of distribution of fish to foreign markets </h1>

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
            <div class="col-md-3">
                <div class="item-gallery">
                    <a data-fancybox="gallery" href="assets/img/lfd/11.jpg">
                        <img src="assets/img/lfd/11.jpg" class="gallery w-100">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include('include/footer.php') ?>