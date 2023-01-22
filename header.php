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
        <!-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"> -->

        <?php
        //  require function.php file

        require('functions.php');

        ?>

    </head>
    <body>
        <!-- Preloader Area Start -->
        <!-- <div id="preloader">
            <div id="status">
                <img src="assets/images/j.png" alt="img" style="width: 300px;" />
            </div>
        </div> -->
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
                            <!-- <div class="switcher-lang-currency">
                                <div class="currency-switcher">
                                    <span class="flag"><i class="fas fa-dollar-sign"></i></span>
                                    <a href="#" class="currency">Usd <i class="fas fa-angle-down"></i></a>
                                    <ul class="currency-list">
                                        <li class="single-currency"><span class="flag"><i class="fas fa-dollar-sign"></i></span><a class="currency-text" href="#">Usd</a></li>
                                        <li class="single-currency"><span class="flag"><i class="fas fa-rupee-sign"></i></span><a class="currency-text" href="#">Rupi</a></li>
                                    </ul>
                                </div>
                                <div class="lang-switcher">
                                    <span class="flag"><img src="assets/images/united-states.png" alt="united-states" /></span>
                                    <a href="#" class="lang">Eng <i class="fas fa-angle-down"></i></a>
                                    <ul class="lang-list">
                                        <li class="single-lang"><span class="flag"><img src="assets/images/united-states.png" alt="united-states" /></span><a class="lang-text" href="#">Eng</a></li>
                                        <li class="single-lang"><span class="flag"><img src="assets/images/india.png" alt="india"></span><a class="lang-text" href="#">Hin</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <a class="account-btn" href="sign-in.html"><i class="user-icon flaticon-user"></i> My Account </a> -->
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
                                        <option value="1">Health & Beauty</option>
                                        <option value="2">Women's Fashion</option>
                                        <option value="3">Men's Fashion</option>
                                        <option value="4">Electronic</option>
                                        <option value="5">Sports </option>
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
                            <!-- <div class="compare single-btn">
                                <a href="compare.html" class="compare-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-bar-chart"></i>
                                        <span class="count">5</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Compare</span>
                                        <span class="item-count">5 items</span>
                                    </div>
                                </a>
                            </div> -->
                            <div class="cart single-btn">
                                <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-shopping-bag" href="cart.php"></i>
                                        <span class="count"><?php echo count($product->getData('cart')); ?></span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Your Cart</span>
                                        <span class="price">$92.56</span>
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
                            <a class="menu-link" href="#">Club Jerseys<i class="arrow-icon fas fa-angle-down"></i></a>
                            <!-- <div class="mega-menu-area">
                                <div class="container">
                                    <ul class="mega-menu">
                                        <li class="mega-menu-item">
                                            <a class="mega-menu-title" href="#">Shop Layout</a>
                                            <ul class="menu-items">
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="shop-grid-left-sidebar.html">Shop Grid Leftsidebar <span class="menu-item-badge new">New</span></a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="shop-grid-right-sidebar.html">Shop Grid Rightsidebar </a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="shop-grid.html">Shop Grid No Sidebar <span class="menu-item-badge trending">Trending</span></a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="shop-list-left-sidebar.html">Shop List Leftsidebar</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="shop-list-right-sidebar.html">Shop List Rightsidebar</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="shop-list.html">Shop List No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a class="mega-menu-title" href="#">List Layout & Others</a>
                                            <ul class="menu-items">
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="single-product.html">Product Single 1</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="single-product-v2.html">Product Single 2</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="single-product-v3.html">Product Single 3</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="cart.html">Cart Page</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="checkout.html">Checkout Page</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="compare.html">Compare</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="wish-list.html">Wishlist</a></li>
                                                <li class="mega-menu-items"><a class="mega-menu-link" href="empty-wish-list.html">Empty Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a class="mega-menu-banner" href="shop-grid.html">
                                                <img class="menu-banner-image" src="assets/images/mega-menu-banner.png" alt="mega-menu-banner" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a class="menu-link" href="#">Basketball Jerseys <i class="arrow-icon fas fa-angle-down"></i></a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu-item"><a class="sub-menu-link" href="term-conditions.html">Term & Conditions</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="privacy-policy.php">Privacy Policy</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shipping-return.html">Shipping & Return</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="faq.html">Frequently Asked Questions</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="refund-policy.html">Refund policy</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="error.html">Error Page</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="sign-in.html">Sign In</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="sign-up.html">Sign Up</a></li>
                            </ul> -->
                        </li>

                        <li class="menu-item"><a class="menu-link" href="about-us.html">Footwears</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a class="menu-link" href="#">Blog</a>
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
                        <a class="brand-logo" href="index.html"><img class="brand-image" src="assets/images/jerseyworld .png" alt="jerseyworld " /></a>
                    </div>
                    <div class="header-right">
                        <a href="wish-list.html" class="wishlist-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-like"></i>
                                <span class="count">12</span>
                            </div>
                        </a>
                        <a href="compare.html" class="compare-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-bar-chart"></i>
                                <span class="count">5</span>
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
                    <a class="brand-logo" href="index.html"><img class="brand-image" src="assets/images/jerseyworld .png" alt="jerseyworld " /></a>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="menu-search-form">
                    <form>
                        <div class="search-wrap">
                            <select class="form-select">
                                <option selected>Category</option>
                                <option value="1">Health & Beauty</option>
                                <option value="2">Women's Fashion</option>
                                <option value="3">Men's Fashion</option>
                                <option value="4">Electronic</option>
                                <option value="5">Sports </option>
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
                            <span class="menu-expand"></span>
                            <a class="menu-link" href="#">Home</a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item"><a class="sub-menu-link" href="index.html">Home One</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="index2.html">Home Two</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="index3.html">Home Three</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <span class="menu-expand"></span>
                            <a class="menu-link" href="#">Shop</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu-item"><a class="sub-menu-title" href="#">Shop Layout</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid-left-sidebar.html">Shop Grid Leftsidebar <span class="menu-item-badge new">New</span></a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid-right-sidebar.html">Shop Grid Rightsidebar </a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid.html">Shop Grid No Sidebar <span class="menu-item-badge trending">Trending</span></a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list-left-sidebar.html">Shop List Leftsidebar</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list-right-sidebar.html">Shop List Rightsidebar</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list.html">Shop List No Sidebar</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-title" href="#">List Layout & Others</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="single-product.html">Product Single 1</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v2.html">Product Single 2</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v3.html">Product Single 3</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="cart.html">Cart Page</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="checkout.html">Checkout Page</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="compare.html">Compare</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="wish-list.html">Wishlist</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="empty-wish-list.html">Empty Wishlist</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item">
                            <span class="menu-expand"></span>
                            <a class="menu-link" href="#">Pages</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu-item"><a class="sub-menu-link" href="term-conditions.html">Term & Conditions </a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="privacy-policy.php">Privacy Policy</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="shipping-return.html">Shipping & Return</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="faq.html">Frequently Asked Questions</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="refund-policy.html">Refund policy</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="error.html">Error Page</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="sign-in.html">Sign In</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="sign-up.html">Sign Up</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item"><a class="menu-link" href="about-us.html">about us</a></li>
                        <li class="menu-item">
                            <span class="menu-expand"></span>
                            <a class="menu-link" href="#">Blog</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu-item"><a class="sub-menu-link" href="blog.html">Blog Grid</a></li>
                                <li class="sub-menu-item"><a class="sub-menu-link" href="single-blog.html">Blog Single</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item"><a class="menu-link" href="contact.html">Contact</a></li>
                        
                    </ul>
                </nav>
                <div class="menu-bottom">
                    <div class="switcher-lang-currency">
                        <div class="currency-switcher">
                            <span class="flag"><i class="fas fa-dollar-sign"></i></span>
                            <a href="#" class="currency">Usd <i class="fas fa-angle-down"></i></a>
                            <ul class="currency-list">
                                <li class="single-currency"><span class="flag"><i class="fas fa-dollar-sign"></i></span><a class="currency-text" href="#">Usd</a></li>
                                <li class="single-currency"><span class="flag"><i class="fas fa-rupee-sign"></i></span><a class="currency-text" href="#">Rupi</a></li>
                            </ul>
                        </div>
                        <div class="lang-switcher">
                            <span class="flag"><img src="assets/images/united-states.png" alt="united-states" /></span>
                            <a href="#" class="lang">Eng <i class="fas fa-angle-down"></i></a>
                            <ul class="lang-list">
                                <li class="single-lang"><span class="flag"><img src="assets/images/united-states.png" alt="united-states" /></span><a class="lang-text" href="#">Eng</a></li>
                                <li class="single-lang"><span class="flag"><img src="assets/images/india.png" alt="india"></span><a class="lang-text" href="#">Hin</a></li>
                            </ul>
                        </div>
                    </div>
                    <a class="account-btn" href="sign-in.html"><i class="user-icon flaticon-user"></i> My Account </a>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area area end here  -->

        <!-- Cart Offcanvas Sidebar Menu area Start here  -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvasSidebar" aria-labelledby="cartOffcanvasSidebarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="cartOffcanvasSidebarLabel">Shopping Cart</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div class="cart-product-list">

                    <!-- Product item start -->
                    <div class="product-item cart-product-item">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="single-product.html"><img class="product-thumbnal" src="assets/images/cart-sidebar-img1.png" alt="cart"></a>
                            </div>
                            <div class="product-info">
                                <div class="product-name-part">
                                    <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                    <h3 class="product-name"><a class="product-link" href="single-product.html">Premier Cropped Jean</a></h3>

                                    <div class="cart-quantity input-group">
                                        <div class="increase-btn dec qtybutton btn">-</div>
                                        <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly />
                                        <div class="increase-btn inc qtybutton btn">+</div>
                                    </div>

                                    <button class="cart-remove-btn">Remove</button>
                                </div>
                                <div class="product-price">
                                    <span class="regular-price">$220.08</span>
                                    <span class="price">$150.08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product item end -->

                    <!-- Product item start -->
                    <div class="product-item cart-product-item">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="single-product.html"><img class="product-thumbnal" src="assets/images/cart-sidebar-img2.png" alt="cart"></a>
                            </div>
                            <div class="product-info">
                                <div class="product-name-part">
                                    <h4 class="product-catagory">New - Collections</h4>
                                    <h3 class="product-name"><a class="product-link" href="single-product.html">Premier Bag Jean</a></h3>

                                    <div class="cart-quantity input-group">
                                        <div class="increase-btn dec qtybutton btn">-</div>
                                        <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly />
                                        <div class="increase-btn inc qtybutton btn">+</div>
                                    </div>

                                    <button class="cart-remove-btn">Remove</button>
                                </div>
                                <div class="product-price">
                                    <span class="regular-price">$215.08</span>
                                    <span class="price">$150.08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product item end -->
                </div>

                <div class="total-bottom-part">
                    <div class="total-count d-flex">
                        <h3>Total</h3>
                        <h4>$567.00</h4>
                    </div>
                    <a href="checkout.html" class="proceed-to-btn d-block text-center">
                        Proceed To Checkout
                    </a>
                    <div class="view-cart-go">
                        <a href="cart.html">View Cart</a>
                    </div>
                </div>

            </div>
          </div>
        <!-- Cart Offcanvas Sidebar Menu area end here  -->