<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="keywords" content="">





    <title><?= $Home ?> - A A Aqua International (PVT) Ltd.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/html/css/custom.css">

    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/html/favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/html/favi/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/html/favi/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/html/favi/site.webmanifest">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/html/favi/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= base_url() ?>assets/html/favi/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <section class="py-2 bg-black topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="mb-0 text-white">Welcome A A Aqua International (PVT) Ltd.</p>
                </div>
                <div class="col-md-6">
                    <p class="mb-0  text-white text-right"><i class="fas fa-phone me-3 text-grayish"></i>+94 77 340 6865, 
+94 77 7986 017, 
+94 31 2255 856</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0  text-white text-right">
                        <i class="fas fa-envelope me-3 text-grayish  text-right"></i>aaaquainternational@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </section>
    <header class="header">

        <nav class="navbar navbar-expand-lg  main-navbar navbar">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>assets/html/img/aa-aqua-logo.png" class="main-logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= base_url() ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url() ?>About-Us">About Us</a></li>
                                <li><a class="dropdown-item" href="<?= base_url() ?>Board-of-Directors">Board of Directors</a></li>
                            </ul>
                        </li>
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Our Products
                            </a>

                            <ul class="dropdown-menu">
                                <?php foreach ($cate as $k => $row) : ?>
                                    <li>
                                        <a href="<?= base_url() ?>Products/<?= url_title($row->CategoryTitle) ?>/<?= $row->CategoryId ?>" class="dropdown-item">
                                            <?= $row->CategoryTitle ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                                

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url() ?>Our-Services">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>Gallery">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>Contact-Us">Contact Us</a>
                        </li>

                    </ul>
                    <!-- <a class="header-btn text-white fw-bold" href="<?= base_url() ?>Tailor-Made-Tours-Sri-Lanka">Tailor-Made</a> -->

                </div>
            </div>
        </nav>
    </header>