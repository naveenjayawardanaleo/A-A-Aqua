<?php include('include/header.php') ?>
<section class="breadcrum  bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white"><?= $record->ProjectTitle ?>Contact us</h1>
                <nav class="d-flex">
                    <h6 class="mb-0 text-white text-decoration-none">
                        <a href="<?= base_url() ?>" class="text-white text-decoration-none">Home</a>
                        <span>/</span>
                        <a href="#" class="text-white text-decoration-none">Contact us</a>

                    </h6>
                </nav>
            </div>
        </div>
    </div>

</section>
<section class="form-contact">
    <div class="container">
        <div class="row clearfix">
            <!-- Form Text -->
            <div class="text-block col-lg-4 col-md-5 col-sm-12">
                <div class="rating">
                    <span class="star fa fa-fish"></span>
                    <span class="star fa fa-ship  "></span>
                    <span class="star fa fa-fish fa-rotate-180"></span>
                </div>
                <h2>Contact Information</h2>



                <p class="fs-5"><i class="fa-solid fa-location-dot  me-3 text-grayish"></i>

                    #42/A, Church Junction, Nainamadama,

                    <i class="fa-solid fa-location-dot  me-3 text-grayish visi" style="    visibility: hidden;"></i>


                    Wennappuwa, Sri Lanka.
                </p>
                <p class="fs-5">
                    <i class="fas fa-phone me-3 text-grayish"></i>+94 31 2257 072 <br>
                    <i class="fas fa-phone me-3 text-grayish"  style="visibility: hidden;"></i>+94 77 3406 865 <br>
                    <i class="fas fa-phone me-3 text-grayish" style="visibility: hidden;"></i>+94 77 7986 017 <br>



                </p>

                <p class="fs-5">
                    <i class="fas fa-envelope me-3 text-grayish"></i>aaaquainternational@gmail.com <br>
                    <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>dcengineeringdnk@gmail.com <br>
                    <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>disneystudio85@gmail.com <br>
                    <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>dcengineeringdnk@gmail.com <br>
                    <i class="fas fa-envelope me-3 text-grayish " style="visibility: hidden;"></i>sdklk7@yahoo.com



                  

                </p>


                <p class="fs-5">
                    <i class="fas fa-globe me-3 text-grayish"></i>www.aaaqua.lk
                </p>

            </div>
            <!-- Form Detail -->
            <div class="col-lg-8 col-md-7 col-sm-12">
                <form id="contact-form" action="" name="contact" method="post">
                    <div class="row clearfix">
                        <!--Nane  -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="form[Full-Name]">
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="form[Email]">
                            </div>
                        </div>
                        <!--Phone  -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" name="form[Telephone]">
                            </div>
                        </div>
                        <!-- Subject -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="form[Subject]">
                            </div>
                        </div>
                        <!-- Text area -->
                        <div class="col-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="form[Message]"></textarea>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="theme-btn btn-style-two border-0 "><span class="txt">Submit</span>

                            </button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</section>


<?php include('include/footer.php') ?>