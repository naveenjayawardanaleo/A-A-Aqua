<?php include('include/header.php') ?>

<!--Main Navigation-->
<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $record->ProjectTitle ?></h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="<?= base_url() ?>Blog" class="text-white text-decoration-none">Blog</a>
                        <span>/</span>
                        <a href="" class="text-white text-decoration-none"><?= $record->ProjectTitle ?></a>
                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="wdt-100"><?= $record->ProjectTitle ?></h1>
                <img src="<?= UP . $record->Image ?>" class="w-100" alt="blog-image">

                <p><?= $record->Description ?></p>


            </div>
        </div>
        <div class="row">
            <div class="col-md-3 single-image">
                <a data-fancybox="gallery" data-src="<?= UP . $record->Image ?>">
                    <img src="<?= UP . $record->Image ?>" class="img-responsive zoom_img_effect w-100" alt="cnc-image">
                </a>
            </div>
            <?php $MoreImage = json_decode($record->MoreImage); ?>
            <?php foreach ($MoreImage as $k => $img) : ?>
                <div class="col-md-3 single-image">
                    <a data-fancybox="gallery" data-src="<?= UP . $img ?>">
                        <img src="<?= UP . $img ?>" class="img-responsive zoom_img_effect w-100" alt="cnc-image">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php include('include/footer.php') ?>