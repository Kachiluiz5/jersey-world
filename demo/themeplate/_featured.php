<!-- featured Sale -->
<?php
 $product_shuffle = $product->getData();

?> 
 
 
 
 <!-- Featured Products area start here  -->
 <div class="featured-productss-area section-top pb-100">
            <div class="container">
                <div class="section-header-area">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="sub-title">New Products</h3>
                            <h2 class="section-title">Featured Products</h2>
                        </div>
                        <div class="col-md-6 align-self-end text-md-end">
                            <a href="shop-grid-left-sidebar.html" class="see-btn">See All</a>
                        </div>
                    </div>
                </div>


                <div class="product-list">
                <?php foreach ($product_shuffle as $item) { ?>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-grid-product">
                <div class="product-top">
                    <a href="single-product.html"><?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid" /></a>
                    <ul class="prdouct-btn-wrapper">
                        <li class="single-product-btn">
                            <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                        </li>
                        <li class="single-product-btn">
                            <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="product-info text-center">
                    <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                    <h3 class="product-name"><a class="product-link" href="single-product.html">Rosmo Namino Milancelos</a></h3>
                    <ul class="product-review">
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item"><i class="flaticon-star"></i></li>
                        <li class="review-item"><i class="flaticon-star"></i></li>
                    </ul>
                    <div class="product-price">
                        <span class="regular-price">$770.18</span>
                        <span class="price">$700.08</span>
                    </div>
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

                    <ul class="size-switch">
                        <li class="single-size active">XL</li>
                        <li class="single-size">LARGE</li>
                        <li class="single-size">SMALL</li>
                    </ul>
                    
                    <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                </div>
            </div>
        </div>
        
        
        
        
    
    </div>
    <?php } // closing foreach function ?>
    <div class="pagination-area mt-30">
        <ul class="paginations text-center">
            <li class="pagination-page"><a href="#" class="pagination-link"><i class="fas fa-angle-double-left"></i></a></li>
            <li class="pagination-page active"><a href="#" class="pagination-link">1</a></li>
            <li class="pagination-page"><a href="#" class="pagination-link">2</a></li>
            <li class="pagination-page"><a href="#" class="pagination-link">3</a></li>
            <li class="pagination-page"><a href="#" class="pagination-link"><i class="fas fa-angle-double-right"></i></a></li>
        </ul>
    </div>
</div>
                    




                    <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="single-product.html"><img class="product-thumbnal" src="assets/product_img/ajax.png" alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">Hot - Collection</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html">Black T-Shirt For Woman</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$220.08</span>
                                    <span class="price">$200.08</span>
                                </div>
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
                                <ul class="size-switch">
                                    <li class="single-size">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div> -->


<!-- 
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="single-product.html"><img class="product-thumbnal" src="assets/product_img/arsenal.png" alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">New - Collection</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html">fit-flare dress</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$748.08</span>
                                    <span class="price">$730.08</span>
                                </div>
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
                                <ul class="size-switch">
                                    <li class="single-size">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div> -->




                    <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="single-product.html"><img class="product-thumbnal" src="assets/product_img/bayarn.jpg" alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">Bag - Collection</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html">midi dress</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$709.08</span>
                                    <span class="price">$600.08</span>
                                </div>
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
                                <ul class="size-switch">
                                    <li class="single-size">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        
                    </div> -->
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
        <!-- Featured Products area end here  -->
