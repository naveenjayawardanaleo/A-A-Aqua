<?php include('include/header.php') ?>

<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white">About us</h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none">About us</a>

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
                <img src="<?= base_url() ?>media/image/<?= $pra->Image ?>" class="w-100" alt="" style="border-radius: 15px;">
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="title-box">
                        <div class="rating">
                            <span class="star fa fa-star"></span>
                            <span class="star fa fa-star"></span>
                            <span class="star fa fa-star"></span>
                        </div>
                        <h3 class="main-text ">WELCOME TO AA AQUA (PVT) LTD.</h3>
                    </div>
                    <div class="bold-text">Fresh & Frozen Sea Food Trading</div>
                    <div class="text">
                        <p><?= $pra->Description ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-services" style="    background-image: url(assets/img/visionmissionbg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title-box">
                    <div class="rating">
                        <span class="star fa fa-fish"></span>
                        <span class="star fa fa-ship  "></span>
                        <span class="star fa fa-fish fa-rotate-180"></span>
                    </div>
                    <h3 class="main-text text-white">Our Vision and Mission</h3>
                </div>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/vision.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5>Our Vision
                        </h5>
                        <p>As a A A Aqua International (PVT) Ltd Our Vision is strive to become the most competitive, trusted and an exceptional seafood exporting company in Sri Lanka by delivering unexcelled produts overseas.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/mission.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5>Our Mission


                        </h5>
                        <p>Our Mission is to overeach the customer expectation consistently through commitment and innovation and in harmony with the environment. We continously seek to accomplish inclusive growth of our organisation along with that of our farmers and the environment. </p>

                    
                    </div>
                </div>
            </div>

           
        </div>
       

    </div>
</section>



<?php include('include/footer.php') ?>