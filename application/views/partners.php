<?php include('include/header.php') ?>

<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $record->ProjectTitle ?>Vehicles</h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none">Vehicles</a>

                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>



<section class="p-0">
    <section>
        <div class="container ">
            <div class="row mb-5">
                <div class="col-md-12 text-center">

                    <div class="title-box">
                        <div class="rating">
                            <span class="star fa fa-star"></span>
                            <span class="star fa fa-star"></span>
                            <span class="star fa fa-star"></span>
                        </div>
                        <h3 class="main-text ">Our Vehicles</h3>

                        <p>
                            Rent a Vehicle in Sri Lanka and experience the Advantages of Luxury and comfort. <br> Drive in Style round Sri Lanka with srilankapersonalchauffeurs.com. We have Cars, Buses, Van and Many More.
                        </p>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($partners as $paaa) : ?>
                    <div class="col-md-12 col-xl-10  mb-3">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">






                                <div class="row">


                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="<?= UP ?><?= $paaa->Image ?>" class="w-100" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5><?= $paaa->PartnerTitle ?></h5>

                                        <p class=" mb-4 mb-md-0">
                                            <?= $paaa->ShortDescription ?>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">

                                        <div class="d-flex flex-column mt-4 ">
                                            <a class="btn btn-dark " href="https://wa.me/94777209813?text=Hello%20Sri%20Lanka%20Personal%20Chauffeurs %20|%20  <?= $paaa->PartnerTitle ?>">
                                                <i class="fa-brands fa-whatsapp"></i> Book Now</a>
                                            <a class="btn btn-outline-dark  mt-2" href="<?= base_url() ?>Contact-Us">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>



            </div>
        </div>
    </section>
</section>

<?php include('include/footer.php') ?>