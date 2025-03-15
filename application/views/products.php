<?php include('include/header.php') ?>
<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $cate_details->CategoryTitle ?></h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none"><?= $cate_details->CategoryTitle ?></a>

                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>

<section>

   <div class="container ">
     
      <div class="row  ">
         <?php foreach ($records as $key => $row) : ?>

            <div class="col-lg-3 col-md-12 mb-4">
               <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                     <img src="<?= UP . $row->Image ?>" class="img-fluid" style="border-bottom: 1px solid #d2d2d2;">

                  </div>
                  <div class="card-body">
                     <h5 class="card-title"><?= $row->ProductTitle ?></h5>
                     <p class="card-text">
                        <?= $row->ShortDescription ?>
                     </p>
                     <a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="btn btn-dark w-100 text-uppercase py-2" style="border-radius: 0px;">Read More</a>
                  </div>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</section>

<?php include('include/footer.php') ?>