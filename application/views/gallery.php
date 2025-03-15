<?php include('include/header.php') ?>
<style>
    .gallery-nav ul {

        display: flex;

        list-style: none;

        border-top: 2px solid #555555;

        border-bottom: 2px solid #555555;

        background-color: #1659b5;

        justify-content: space-evenly;

        color: white;

        margin: 0px;

    }



    .gallery-nav ul li {

        padding: 20px 20px;

    }



    .gallery-nav ul li:hover {

        background-color: white;

        color: black;

        cursor: pointer;

    }



    .gallery-active {

        background-color: white;

        color: black;

        cursor: pointer;

    }

    .hide {

        display: none;

    }
</style>
<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $record->ProjectTitle ?>Gallery</h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none">Gallery</a>

                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>


<section>
    <div class="container">
        <div class="row">

            <div class="col-md-12 pr-0 pl-0">



                <div class="gallery-nav">

                    <ul>

                        <li class="all" onclick="gallery('all')" value="all">All</li>

                        <?php foreach ($records as $k => $roo) : ?>

                            <li class="all" onclick="gallery(<?= $roo->GalleryId ?>)" value="all"><?= $roo->GalleryTitle ?></li>

                        <?php endforeach ?>





                    </ul>

                </div>

            </div>

        </div>



        <div id="allall" class="row All roooooo gallery_new ">

            <?php $tot = 0; ?>

            <?php foreach ($records as $k => $row) : ?>
                <?php $MoreImage = (array)json_decode($row->MoreImage); ?>

                <?php $ttt = 1 ?>

                <?php foreach ($MoreImage as $no => $ooo) : ?>

                    <?php if ($tot < 16) : ?>

                        <div class="col-md-3 pr-0 pl-0">

                            <div class="item-gallery">

                                <a data-fancybox="gallery" href="<?= UP ?><?= $ooo ?>">

                                    <img src="<?= UP ?><?= $ooo ?>" class="gallery w-100">

                                </a>

                            </div>

                        </div>

                    <?php endif ?>


                    <?php $ttt = $ttt + 1; ?>

                <?php endforeach ?>

                <?php $tot = $tot + $ttt ?>

            <?php endforeach ?>


        </div>

        <?php foreach ($records as $k => $row) : ?>

            <?php $MoreImage = (array)json_decode($row->MoreImage); ?>



            <div style="display: none;" id="all<?= $row->GalleryId ?>" class="row roooooo Gampaha gallery_new ">

                <?php foreach ($MoreImage as $no => $ooo) : ?>

                    <div class="col-md-3 pr-0 pl-0">

                        <div class="item-gallery">

                            <a data-fancybox="gallery" href="<?= UP ?><?= $ooo ?>">

                                <img src="<?= UP ?><?= $ooo ?>" class="gallery w-100">

                            </a>

                        </div>

                    </div>

                <?php endforeach ?>

            </div>



        <?php endforeach ?>
    </div>
</section>


<?php include('include/footer.php') ?>

<script>
    $(document).ready(function() {



        $('body').addClass('archive post-type-archive post-type-archive-product theme-ippsum bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-shop woocommerce woocommerce-page woocommerce-js btHeadingStyle_default btHeadingWeight_bold btSupertitleWeight_bold btSubtitleWeight_normal btMenuWeight_normal btButtonWeight_bold btCurrentPage_dot btHasAltLogo btMenuRightEnabled btStickyEnabled btHideHeadline btLightSkin btBelowMenu noBodyPreloader btHardRoundedButtons btTransparentLightHeader  btSidebarRight btMenuRight btMenuHorizontal btRemovePreloader btMenuInitFinished');

    });

    function gallery(id) {

        $('.roooooo').css('display', 'none');

        $('#all' + id).css('display', 'flex');

    }
</script>