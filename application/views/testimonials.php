<?php include('include/header.php') ?>
<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $record->ProjectTitle ?>Testimonials</h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none">Testimonials</a>

                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="title-box">
                    <div class="rating">
                        <span class="star fa fa-fish"></span>
                        <span class="star fa fa-ship  "></span>
                        <span class="star fa fa-fish fa-rotate-180"></span>
                    </div>
                    <h3 class="main-text ">What our customers say
                    </h3>
                </div>


            </div>

        </div>

        <div class="row mt-5">
            <?php foreach ($records as $k => $roo) : ?>
                <div class="col-md-4 mb-4 mb-5">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="<?= base_url() ?>assets/dummypic.jpg" class="rounded-circle shadow-1-strong" width="100" height="100">
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



    </div>
</section>

<?php include('include/footer.php') ?>