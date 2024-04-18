<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Zone</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href=<?php echo _PATH_ROOT . "/assets/base.css" ?>>
    <link rel="stylesheet" href=<?php echo _PATH_ROOT . "/assets/login.css" ?>>
    <link rel="stylesheet" href=<?php echo _PATH_ROOT . "/assets/cart.css" ?>>
    <link rel="stylesheet" href=<?php echo _PATH_ROOT . "/assets/reponsive.css" ?>>
    <link rel="stylesheet" href=<?php echo _PATH_ROOT . "/assets/product.css" ?>>
    <link rel="stylesheet" href=<?php echo _PATH_ROOT . "/assets/about.css" ?>>
    <link rel="stylesheet" href=<?php echo _PATH_ROOT . "/assets/style.css" ?>>
</head>

<body>
    <div id="main">
        <!-- Header -->
        <div class="header">

            <div class="img-header">
                <a href="<?php echo _WEB_ROOT . '/user/trangchu' ?>"><img src="<?php echo _PATH_ROOT . "/assets/img/img-header/shoe-logo-new_300x300.webp" ?>" alt=""></a>
            </div>

            <div class="menu-header">
                <ul class="subnav-menu">
                    <li><a href="<?php echo _WEB_ROOT . '/user/trangchu' ?>">Home</a></li>


                    <li class="collection-show"><a href="<?php echo _WEB_ROOT . '/user/collection' ?>">Collection <i class="fa-solid fa-chevron-down"></i></a>


                        <div class="collection-show-list">
                            <div class="row">
                                <div class="col col-3 collection-item">
                                    <img src="<?php echo _PATH_ROOT  ."/assets/img/img-header/shoe21.webp" ?>" alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">200$</span>
                                    </button>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="<?php echo _PATH_ROOT  ."/assets/img/img-header/shoe11.webp" ?>" alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">532$</span>
                                    </button>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="<?php echo _PATH_ROOT  ."/assets/img/img-header/shoe22_48464579-a7fe-40ba-ad66-8c6aa7ef2bb1.webp" ?>" alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">300$</span>
                                    </button>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="<?php echo _PATH_ROOT  ."/assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp" ?>" alt="">
                                    <button class="collection-btn">
                                        <span class="name-shoes">Ballet shoe</span>
                                        <span class="cost-shoes">620$</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li><a href="<?php echo _WEB_ROOT . '/user/product' ?>">Shoes</a></li>
                    <li><a href="<?php echo _WEB_ROOT . '/user/boots' ?>">Boots</a></li>
                    <li><a href="<?php echo _WEB_ROOT . '/user/climbing' ?>">Climbing</a></li>
                    <li class="page-show"><a href="<?php echo _WEB_ROOT . '/user/blog' ?>">Pages <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="page-show-list ps-3">
                            <li><a href="<?php echo _WEB_ROOT . '/user/about' ?>">About us</a></li>
                            <li><a href="<?php echo _WEB_ROOT . '/user/contact' ?>">Contact us</a></li>
                            <li><a href="<?php echo _WEB_ROOT . '/user/blog' ?>">Blog</a></li>
                            <li><a href="<?php echo _WEB_ROOT . '/user/giohang' ?>">Wishlist</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="icon-header flex align-items-center">
                <span class="icon-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <span class="icon-user dropdown">
                    <div class="dropdown">
                        <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (isset($_SESSION['user']) && $_SESSION['user']) { ?>
                                <li>
                                    <a class="dropdown-item">Hi! <?php
                                                                echo  $_SESSION['user']['firstName'];
                                                                ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo _WEB_ROOT.'/user/logout' ?>" class="dropdown-item ">
                                            Logout
                                    </a>
                                </li>
                                <!-- kiem tra neu co admin thi dang nhap Admin -->
                                <?php if ($_SESSION['user']['idgroup'] == 1) {
                                ?>

                                    <li>
                                        <a href="<?php echo _WEB_ROOT.'/admin/index'?>"class="dropdown-item">Admin
                                        </a>
                                    </li>
                                <?php
                                } ?>
                            <?php
                            } else {



                            ?>

                                <li>
                                    <a class="dropdown-item" href="<?php echo _WEB_ROOT . '/user/login' ?>">Đăng nhập
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item " href="<?php echo _WEB_ROOT . '/user' ?>">
                                        Đăng kí
                                    </a>
                                </li>
                            <?php
                            }
                            ?>


                        </ul>
                    </div>
                </span>

                <span class="icon-cart">
                    <span class="icon-number">
                        0
                    </span>
                    <i class="fa-solid fa-briefcase"></i>
                </span>

            </div>

        </div>


        <?php

        require_once './mvc/views/pages/' . $data['page'] . '.php';
        ?>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-about">

                <div class="footer-header">
                    <div class="row">
                        <div class="col-4">
                            <div class="item">

                                <img src="./assets/img/footer/logo.webp" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item">

                                <input type="text" id="search" class="form-control" placeholder="Your email address">
                                <button><i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                        </div>
                        <div class="col-4 footer-icon">
                            <div class="item">

                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-google-plus-g"></i>
                                <i class="fa-brands fa-tumblr"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-contact">
                    <div class="row">
                        <div class="col-3">
                            <div class="footer-list">
                                <div class="footer-title">Contact us</div>
                                <ul>
                                    <li><i class="fa-solid fa-house-chimney-user"></i>
                                        <span>No: 58 A, East Madison Street, Baltimore, MD, USA 4508</span>
                                    </li>
                                    <li><i class="fa-solid fa-phone"></i>
                                        <span>+84 969400633</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <span><a href="">info@example.com</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="footer-list">
                                <div class="footer-title">Info</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Search Term</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Advanced Search</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Oders and Returns</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Consutant</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Help & FAQs</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="footer-list">
                                <div class="footer-title">Help</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">About</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Contact</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Privacy Policy</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Best Sellers</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Support</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="footer-list">
                                <div class="footer-title">Support</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Search Term</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Advanced Search</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Oders and Returns</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Consutant</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Help & FAQs</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-footer">
                    <ul>
                        <li><a href="">Search Terms</a></li>
                        <li><a href="">Advanced Search</a></li>
                        <li><a href="">Oders and Returns</a></li>
                        <li><a href="">Consutant</a></li>
                        <li><a href="">Help & FAQs</a></li>
                    </ul>
                </div>

                <div class="site-footer__bottom">
                    <div class="end-footer">
                        <p><i class="fa-regular fa-copyright"></i>2022 Shoes <a href="">Design Von Nguyen</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!----------------------------------------- Start Cart --------------------------------------------------->
    <div class="main-cart">
        <div class="about-cart">
            <div class="heading-cart">
                <span class="close"><i class="fa-solid fa-xmark"></i></span>
                <div class="header-cart">
                    <h4>Your Cart</h4>
                </div>
            </div>

            <div class="container-cart">
                <!-- Them san pham vao -->
            </div>

            <div class="bottom-cart">
                <div class="sub-total">
                    <div class="p-title">Total</div>
                    <span class="money"> <span></span> $106.00</span>
                </div>
                <div class="p-main">
                    Shipping, taxes, and discounts will be calculated at checkout.
                </div>
                <div class="btn-cart">
                    <button>PRODUCT TO CHECK OUT</button>
                </div>
                <div class="btn-cart">
                    <button>VIEW CART</button>
                </div>
            </div>

        </div>

    </div>
    <!------------------------------------ End-Cart------------------------------------------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script src=<?php echo _PATH_ROOT . "/assets/main.js" ?>></script>
    <script src=<?php echo _PATH_ROOT . "/assets/cart.js" ?>></script>
    <script src=<?php echo _PATH_ROOT . "/assets/responesive.js" ?>></script>
</body>

</html>