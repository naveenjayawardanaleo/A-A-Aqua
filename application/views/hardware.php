<?php include('include/header.php') ?>
<div class="inner-pages-bnr">
    <img src="<?= base_url() ?>assets/html/images/hardwera-banner.jpg" class="img-responsive" alt="contact-banner-image">
    <div class="banner-caption">
        <h1>Hardware</h1>
        <ul class="breadcumb">
            <li><a href="<?= base_url() ?>">Home</a> - </li>
            <li>Hardware</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<section class="pad100-top-bottom">
    <div class="container">
        <div class="row">
            <!--=========Shop Left Start============-->
            <div class="col-md-4 left-column">
                <div class=" wdt-100 marbtm50">
                    <h4>HARDWARE CATEGORIES</h4>
                    <ul class="blog-category-cl">
                        <?php foreach ($categories as $row) : ?>
                            <li><a href="<?= base_url('Category/') . url_title($row->CategoryTitle) . '/' . $row->CategoryId ?>"><?= $row->CategoryTitle ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!--=========Shop Left end============-->
            <!--=========Shop Right Start============-->
            <div class="col-md-8 right-column pull-right">
                <?php foreach ($records as $k => $row) : ?>
                    <div class="shop-column">
                        <a href="<?= base_url('Hardware-Details/') . url_title($row->HardwareTitle) . '/' . $row->HardwareId ?>">
                            <img src="<?= UP . $row->Image ?>" class="img-responsive" alt="product-image">
                        </a>
                        <div class="shop-column-head">
                            <a href="<?= base_url('Hardware-Details/') . url_title($row->HardwareTitle) . '/' . $row->HardwareId ?>">
                                <h5><?= $row->HardwareTitle ?></h5>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="pagination">
                    <?= $links ?>
                </div>
            </div>
            <!--=========Shop Right end============-->
        </div>
    </div>
</section>
<?php include('include/footer.php') ?>