<!-- Top Sale -->
<?php

    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?> 
 
 
 <!-- Featured Products area start here  -->
        <div class="featured-productss-area section-top pb-100">




            <div class="container">








                <div class="row">


                <?php foreach ($product_shuffle as $item) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                    
                        <div class="single-grid-product">
                        
                            <div class="product-top">
                            
                            <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" ></a>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <!-- <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a> -->

                                        <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="wishlist-submit" class="addCompare product-btn"><i class="icon flaticon-like"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>


                            <div class="product-info text-center">
                                <h4 class="product-catagory">jersey</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html"><?php echo  $item['item_name'] ?? "Unknown";  ?></a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$<?php echo $item['item_price'] ?? '0' ; ?></span>
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



                                <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="add-cart btn-success ">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="add-cart btn-warning  ">Add to Cart</button>';
                                }
                                ?>
                                </form>
                               
                                
                            </div>
                        </div>
                    </div>
















                    <?php } // closing foreach function ?>
                </div>
            </div>
        </div>
        <!-- Featured Products area end here  -->