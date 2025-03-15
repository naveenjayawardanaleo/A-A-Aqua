<?php include('include/header.php') ?>
<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $obj->ProductTitle ?></h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none"><?= $obj->ProductTitle ?></a>

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
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <img src="<?= UP ?><?= $obj->Image ?>" class="w-100" alt="" style="border-radius: 15px; border:1px solid #d2d2d2;">
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">

                        <h3 class="main-text "><?= $obj->ProductTitle ?></h3>
                    </div>


                    <div class="text">

                        <?= $obj->Description ?>
                    </div>




                </div>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="title-box">
                    <div class="rating">
                        <span class="star fa fa-fish"></span>
                        <span class="star fa fa-ship  "></span>
                        <span class="star fa fa-fish fa-rotate-180"></span>
                    </div>
                    <h3 class="main-text ">Related Products</h3>
                </div>

            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($related as $k => $roow) : ?>

                <div class="col-lg-3 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="<?= UP . $roow->Image ?>" class="img-fluid" style="border-bottom: 1px solid #d2d2d2;">

                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $roow->ProductTitle ?></h5>
                            <p class="card-text">
                                <?= $roow->ShortDescription ?>
                            </p>
                            <a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" class="btn btn-dark w-100 text-uppercase py-2" style="border-radius: 0px;">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php include('include/footer.php') ?>