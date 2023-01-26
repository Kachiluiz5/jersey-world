<!DOCTYPE html>
<html lang="en">

    
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>jersey world collection</title>
        <meta name="description" content="jerseyworld  - eCommerce HTML Template" />
        <meta name="keywords" content="business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive" />
        <meta name="author" content="jerseyworld " />


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<!-- Custom CSS file -->
<link rel="stylesheet" href="style.css">





        <!-- fonts file -->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allison&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

        <!-- css file  -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- Favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/" type="image/x-icon"> -->

        <?php
        //  require function.php file

        require('functions.php');

        ?>

    </head>
    <body>
        <!-- Preloader Area Start -->
        <div id="preloader">
            <div id="status">
                <img src="assets/images/j.png" alt="img" style="width: 300px;" />
            </div>
        </div>
        <!-- Preloader Area End -->

        <!-- header area start here  -->
        <header class="header-area d-none d-lg-block">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="header-top-left">
                            <p class="contact-info"><i class="icon flaticon-phone"></i> Call Us: +234 7059781180 (FREE)</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header-top-right">
                            <div class="top-bar-menu">
                                <ul class="menu-list">
                                    <li class="menu-item"><a class="menu-link" href="refund-policy.html"></a></li>
                                    <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                                    <li class="menu-item"><a class="menu-link" href="blog.html">Blog</a></li>
                                    <li class="menu-item"><a class="menu-link" href="faq.html">How To Buy</a></li>
                                </ul>
                            </div>

                            <a class="account-btn" href="login.php"><i class="user-icon flaticon-user"></i> My Account </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="header-middle-wrap">
                        <div class="brand-area">
                            <a class="brand-logo" href="index.php"><img class="brand-image" src="assets/images/j.png" alt="jerseyworld" /></a>
                        </div>
                        <div class="search-area">
                            <form>
                                <div class="search-wrap">
                                    <select class="form-select">
                                        <option selected>Category</option>
                                        <option value="1">Jerseys</option>
                                        <option value="2">Sports Gears</option>
                                        <option value="3"> Kits</option>
                                        <option value="4">Football boots</option>
                                        <option value="5">Sportswears </option>
                                    </select>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" name="search" placeholder="Search Here" />
                                        <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="header-right">
                            <div class="wishlist single-btn">
                                <a href="wish-list.html" class="wishlist-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-like"></i>
                                        <span class="count">12</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Wishlist</span>
                                        <span class="item-count">12 items</span>
                                    </div>
                                </a>
                            </div>

                            <div class="cart single-btn">
                                <a  href="cart.php" role="button"  class="cart-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-shopping-bag" href="cart.php"></i>
                                        <span class="count"><?php echo count($product->getData('cart')); ?></span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Your Cart</span>
                                        <span class="price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : ""; ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="menu-area">
                    <ul class="main-menu">
                        <li class="menu-item menu-item-has-children active">
                            <a class="menu-link" href="#">Club Jerseys<i class="arrow-icon fas fa-angle-down"></i></a>
                        </li>
                        <li class="menu-item mega-menu-parent">
                            <a class="menu-link" href="#"> kits<i class="arrow-icon fas fa-angle-down"></i></a>

                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a class="menu-link" href="#">Basketball Jerseys <i class="arrow-icon fas fa-angle-down"></i></a>

                        </li>

                        <li class="menu-item"><a class="menu-link" href="about-us.html">Footwears</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a class="menu-link" href="#">Boots</a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="contact.html">Contact</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>
        <!-- header area end here  -->

        <!-- mobile-header-area area start here  -->
        <div class="mobile-header-area d-block d-lg-none">
            <div class="container">
                <div class="menu-wrap">
                    <div class="header-left">
                        <a class="brand-logo" href="index.html"><img class="brand-image" src="assets/images/j.png" alt="jerseyworld " /></a>
                    </div>
                    <div class="header-right">
                        <a href="wish-list.html" class="wishlist-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-like"></i>
                                <span class="count">12</span>
                            </div>
                        </a>

                        <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-shopping-bag"></i>
                                <span class="count">10</span>
                            </div>
                        </a>
                        <button class="menu-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-header-area area end here  -->

        <!-- mobile-menu-area area start here  -->
        <div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
            <div class="mobile-menu-area">
                <div class="offcanvas-header">
                    <a class="brand-logo" href="index.html"><img class="brand-image" src="assets/images/j.png" alt="jerseyworld " style="width: 200px;"/></a>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="menu-search-form">
                    <form>
                        <div class="search-wrap">
                            <select class="form-select">
                                <option selected>Category</option>
                               
                                        <option value="1">Jerseys</option>
                                        <option value="2">Sports Gears</option>
                                        <option value="3"> Kits</option>
                                        <option value="4">Football boots</option>
                                        <option value="5">Sportswears </option>
                            </select>
                            <div class="form-group">
                                <input type="text" class="form-control" id="mobilesearch" name="search" placeholder="Search Here" />
                                <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <nav class="main-menu">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <span ></span>
                            <a class="menu-link" href="#">Club Jerseys</a>
                        </li>
                        <li class="menu-item">
                            <span class=""></span>
                            <a class="menu-link" href="#">kits</a>

                        </li>
                        <li class="menu-item">
                            <span ></span>
                            <a class="menu-link" href="#">Basketball Jerseys</a>

                        </li>
                        <li class="menu-item"><a class="menu-link" href="about-us.html">about us</a></li>
                        <li class="menu-item">
                            <span ></span>
                            <a class="menu-link" href="#">Boots</a>

                        </li>
                        <li class="menu-item"><a class="menu-link" href="contact.html">Contact</a></li>
                        
                    </ul>
                </nav>
                <div class="menu-bottom">

                    <a class="account-btn" href="sign-in.html"><i class="user-icon flaticon-user"></i> My Account </a>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area area end here  -->

       
          </div>
        <!-- Cart Offcanvas Sidebar Menu area end here  -->