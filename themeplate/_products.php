<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>


<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Product Single Page</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.html">Home</a></li>
                        <li class="page-item">Product Single Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- product-single-area start here  -->
        <div class="product-single-area section-top">
            <div class="container">
                <div class="product-single-details">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-single-left">
                                <div class="product-thumbnail-image">
                                    <ul class="product-thumb-silide slider slider-nav">
                                        <!-- <li class="single-item"><img class="single-item-image" src="assets/images/single-product-image1.png" alt="product" /></li>
                                        <li class="single-item"><img class="single-item-image" src="assets/images/single-product-image2.png" alt="product" /></li> -->
                    
                                </div>
                                <div class="product-slier-big-image">
                                    <div class="product-priview-slide slider slider-for">
                                        <div class="single-slide">
                                            <!-- <img class="slide-image" src="assets/images/single-product-image1.png" alt="product" /> -->
                                            <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-single-right">
                                <div class="product-info">
                                    <h4 class="product-catagory">Jersey</h4>
                                    <h3 class="product-name"><?php echo $item['item_name'] ?? "Unknown"; ?></h3>
                                    <ul class="product-review">
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                    </ul>

                                    <div class="product-price">
                                        <span class="regular-price">$770.18</span>
                                        <span class="price">$<?php echo $item['item_price'] ?? 0; ?></span>
                                    </div>

                                    <p class="note-text">Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.</p>
                                    
                                    <div class="product-color-area">
                                        <h4 class="color-title">COLOR: WHITE</h4>
                                                                        <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color"
                                                class="color-select" type="radio" checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color"
                                                class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>
    
                                        <label>
                                            <input name="modal-product-color"
                                                class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                    </div>

                                    <div class="product-size-area">
                                        <h4 class="size-title">SIZE : XL</h4>
                                        <ul class="size-switch">
                                            <li class="single-size active">XL</li>
                                            <li class="single-size">LARGE</li>
                                            <li class="single-size">SMALL</li>
                                        </ul>
                                    </div>

                                    <div class="prdouct-btn-wrapper d-flex align-items-center">
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton btn">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly />
                                            <div class="inc qtybutton btn">+</div>
                                        </div>
                                        <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                        <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </div>
                                    <div class="product-bottom-button d-flex">

                                    <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="add-cart btn-success ">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="add-cart btn-warning ">Add to Cart</button>';
                        }
                        ?>
                                        <!-- <a href="checkout.html" class="primary-btn">Buy Now</a> -->
                                        <!-- <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a> -->
                                    </div>
                                </div>
                                <div class="product-right-bottom">
                                    <ul class="features">
                                        <li class="single-feature"><img class="icon" src="assets/images/delivery-van-icon.svg" alt="icon" /><strong class="feature-title">Estimated Delivery:</strong><span class="feature-text">Sep 13 - Sep 17</span></li>
                                        <li class="single-feature"><img class="icon" src="assets/images/shipping-return.svg" alt="icon" /><strong class="feature-title">Free Shipping & Returns:</strong><span class="feature-text">On all orders over $75</span></li>
                                    </ul>
                                    <div class="guarantee-checkout-area">
                                        <h3 class="guarantee-title">Guarantee safe & secure checkout</h3>
                                        <img src="assets/images/payment-method-image.png" alt="payment-method-image" />
                                    </div>
                                    <div class="share-area mt-30">
                                        <h3 class="share-title">SHARE:</h3>
                                        <ul class="social-media">
                                            <li class="media-item"><a class="media-link facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="media-item"><a class="media-link twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li class="media-item"><a class="media-link linkedin" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="media-item"><a class="media-link pinterest" href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








                <!-- product description here including revciews -->

                <div class="product-bottom-info mt-50">
                    <div class="nav-tabs-menu">
                        <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="Description-tab" data-bs-toggle="tab" data-bs-target="#Description" type="button" role="tab" aria-controls="Description" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews" type="button" role="tab" aria-controls="Reviews" aria-selected="false">Reviews</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="Shipping-Return-tab" data-bs-toggle="tab" data-bs-target="#Shipping-Return" type="button" role="tab" aria-controls="Shipping-Return" aria-selected="false">Shipping & Return</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="Additional-Information-tab" data-bs-toggle="tab" data-bs-target="#Additional-Information" type="button" role="tab" aria-controls="Additional-Information" aria-selected="false">Additional Information</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="ProductTabContent">

                        <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                            <div class="product-description">
                                <p class="description-text"><?php echo $item['item_desc'] ?? "Unknown"; ?></p>
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            <div class="product-reviews">
                                <div class="review-top">
                                    <div class="review-top-left">
                                        <span class="review-point">4.5</span>
                                        <ul class="review-list">
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <span class="review-count">4 reviews</span>
                                    </div>
                                    <div class="review-top-right">
                                        <a href="javascript:void(0)" class="write-review-btn">Write A Review</a>
                                    </div>
                                </div>

                                <div class="reviews-list">
                                    <div class="single-review">
                                        <div class="reviewer">
                                            <div class="reviewer-wrap">
                                                <img class="reviewer-image" src="assets/images/reviewer-image-1.png" alt="reviewer-image" />
                                                <h4 class="reviewer-name">Cameron Williamson</h4>
                                            </div>
                                        </div>
                                        <div class="review-middle">
                                            <ul class="review-list">
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                            </ul>
                                            <span class="remiew-time">3 months ago</span>
                                        </div>
                                        <h3 class="review-title">Beautiful And Easy Use</h3>
                                        <h4 class="review-meta"><span class="time">25th Sep 2021 </span> by <a class="author" href="javascript:void(0)">Angelo Mathews</a></h4>
                                        <p class="review-text">Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel</p>
                                    </div>
                                    <div class="single-review">
                                        <div class="reviewer">
                                            <div class="reviewer-wrap">
                                                <img class="reviewer-image" src="assets/images/reviewer-image-1.png" alt="reviewer-image" />
                                                <h4 class="reviewer-name">Leslie Alexander</h4>
                                            </div>
                                        </div>
                                        <div class="review-middle">
                                            <ul class="review-list">
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                            </ul>
                                            <span class="remiew-time">3 months ago</span>
                                        </div>
                                        <h3 class="review-title">Beautiful And Easy Use</h3>
                                        <h4 class="review-meta"><span class="time">25th Sep 2021 </span> by <a class="author" href="javascript:void(0)">John Mathews</a></h4>
                                        <p class="review-text">Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Shipping-Return" role="tabpanel" aria-labelledby="Shipping-Return-tab">
                            <div class="shipping-return-area">
                                <div class="single-return-policy">
                                    <h3 class="return-title">RETURNS POLICY</h3>
                                    <p class="return-text"><?php include("themeplate/returnpolicy.php"); ?></p>
                                    
                                </div>

                        </div>
                        <div class="tab-pane fade" id="Additional-Information" role="tabpanel" aria-labelledby="Additional-Information-tab">
                            <div class="additional-information-area">

                                <ul class="additional-feature">
                                    <li class="single-feature">
                                        <h3 class="feature-title">Jersey Specification</h3>
                                        <p class="feature-text">Player, Authentic, Spectator</p>
                                    </li>
                                    <li class="single-feature">
                                        <h3 class="feature-title">Size:</h3>
                                        <p class="feature-text">S, M, L, XL, XXL</p>
                                    </li>
                                    <li class="single-feature">
                                        <h3 class="feature-title">Custom Type:</h3>
                                        <p class="feature-text">None, Suede</p>
                                    </li>
                                    <li class="single-feature">
                                        <h3 class="feature-title">Molestie:</h3>
                                        <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-single-area end here  -->

        <?php
        endif;
        endforeach;
?>