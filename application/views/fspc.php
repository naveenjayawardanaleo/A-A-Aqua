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
                <img src="<?= base_url() ?>assets/img/food safety policy.jpg" class="w-100" alt="" style="border-radius: 15px;">
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
                    </div>
                    <h3 class="main-text "><?= $Home ?></h3>
                    <div class="text">
                        <p>Our effort is to become the best Sri Lankan exporter of seafood in the international market including the EU. Our expertise is aligned to fulfill the needs of client exportation requirements adhering to international food safety standards. </p>
                        <p>Our operations are carried out by well-experienced individuals, who are constantly being introduced to new technologies and equipped with skills that will drive the company forward to their return. The success story of VS Seafood is our craving towards innovative inputs into our processes which have boosted our success over the years. </p>
                    </div>
                </div>
            </div>
            <div class="content-column col-lg-12">
                <div class="text">
                    <p>VS Seafood is specialized in exporting Yellow Fin Tuna (Thunnus albacares), Big Eye Tuna (Thunnus obesus) and Swordfish (Xiphias gladius) and other varieties for the International Market. The Quality has been developed to meet the existing standards of the EU, which outline the entire processing of fish, which is subjected to inspections carried out by the local authorities such as the Ministry of Fisheries and Aquatic Resources and the Sri Lanka Standard Institution, which is the authorized body in Sri Lanka on behalf of the EU. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php') ?>