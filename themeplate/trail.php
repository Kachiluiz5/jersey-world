<!-- Special Price -->



<?php
    $brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['top_sale_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }

            // save for later
    if (isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }

    
}





$in_cart = $Cart->getCartId($product->getData('cart'));

?>
 
 
 <!-- Featured Products area start here  -->
        <div class="featured-productss-area section-top pb-100">




            <div class="container">








                <div class="row">


                <?php array_map(function ($item) use($in_cart){ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                    
                        <div class="single-grid-product">
                        
                            <div class="product-top">
                            
                            <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" ></a>

                            </div>


                            <div class="product-info text-center">
                                <h4 class="product-catagory"><?php echo $item['item_cat'] ?? "Unknown"; ?></h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html"><?php echo  $item['item_name'] ?? "Unknown";  ?></a></h3>
                                <!-- <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul> -->
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$<?php echo $item['item_price'] ?? '0' ; ?></span>
                                </div>
                                <!-- <div class="variable-single-item color-switch">
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
                                </div> -->

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
                                    echo '<button type="submit"  class="add-cart  btn-success ">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="add-cart action-btn btn-warning  ">Add to Cart</button>';
                                }
                                ?>
                                </form>


                               
                                
                            </div>
                        </div>
                    </div>
















                    <?php }, $product_shuffle) ?>
                </div>
            </div>
        </div>
        <!-- Featured Products area end here  -->