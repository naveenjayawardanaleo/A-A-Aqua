<?php include('include/header.php') ?>



<style>
    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
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

<section >

    <div class="container ">

        <div class="row">

            <div class="col-md-12 text-center">



                <div class="title-box">



                    <h3 class="main-text ">Board of Directors</h3>

                </div>



            </div>

        </div>

        <div class="row  mt-5">

            <div class="col-lg-4 col-md-12 mb-4">

                <div class="card">

                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

                        <img src="assets/chairman.jpg" class="img-fluid w-100">

                        <a href="#!">

                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h5 class="card-title">Group Chairman</h5>



                        <p class="card-text" style="    text-align: justify;">

                            <b>MR. N.A.D.S.C.KUMARA</b> <br>

                            <br>

                            Post graduate studies in faculty of leading the A A Aqua international(pvt)ltd Engineering Solutions (pvt) ltd as COO/DIRECOTR with the abjective to become the market leader in all civil engineering projects and servives.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-12 mb-4">

                <div class="card">

                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

                        <img src="assets/img/director.jpg" class="img-fluid w-100">

                        <a href="#!">

                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h5 class="card-title">Group Director</h5>



                        <p class="card-text" style="    text-align: justify;">

                            <b>MR. D.S. PRASANTHA WIJETHUNGA </b> <br>

                            <br>

                            A visionary leder whose business & customer management sense and drive to push for excelence has taken AA Aqua international (pvt) ltd. Since the last 6 years of his life he has been a prominet member in the AA Aqua company. who is graduated in the faculty of Art visual It University of Kalaniya.



                        </p>

                    </div>

                </div>

            </div>
            <!-- <div class="col-lg-4 col-md-12 mb-4">

                <div class="card">

                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

                        <img src="assets/img/shareholder.jpg" class="img-fluid w-100">

                        <a href="#!">

                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>

                        </a>

                    </div>

                    <div class="card-body">

                        <h5 class="card-title">Managing Director</h5>



                        <p class="card-text" style="    text-align: justify;">

                            <b>MR. N.A.D.S.C. KUMARA </b> <br>

                            <br>

                           



                        </p>

                    </div>

                </div>

            </div> -->




        </div>

    </div>









</section>



<?php include('include/footer.php') ?>