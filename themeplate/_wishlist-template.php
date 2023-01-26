<!-- Shopping cart section  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>

<section id="cart" class="py-3 mb-5">
        <!-- wish-list area start here  -->
        <div class="wish-list-area section">
            <div class="container">
                <div class="row">
                    
                <div class="col-12 wish-list-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                                <th scope="col">Remove</th>
                              </tr>
                            </thead>
                            <tbody>

                                <tr>
                                <?php
                foreach ($product->getData('wishlist') as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                        ?>
                                    <td>
                                        <div class="product-image">
                                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                                            <div class="product-flags">
                                                <span class="product-flag sale">SALE</span>
                                                <span class="product-flag discount">-15%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <div class="product-price text-center">
                                            <h4 class="regular-price">$220.88</h4>
                                            <span class="price">$<?php echo $item['item_price'] ?? '0' ; ?></span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="action-area">
                                        <form method="post">
                                           <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                           <button type="submit" name="cart-submit" class="add-cart action-btn">Add to Cart<i class="icon fas fa-plus-circle"></i></button>
                                        </form>
                                            <!-- <a href="cart.html" title="Add to cart" class="add-cart action-btn">Add To Cart <i class="icon fas fa-plus-circle"></i></a> -->
                                            <!-- <a class="buy-btn action-btn mt-15" href="checkout.html">Buy Now</a> -->
                                        </div>
                                    </td>

                                    <td>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="delet-btn"><img src="assets/images/close.svg" alt="close" /></button>
                                    </form>
                                        
                                    </td>
                                    <?php
                        return $item['item_price'];
                    }, $cart); // closing array_map function
                endforeach;
                ?>
                                </tr>









                                


                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- wish-list area end here  -->

</section>
<!-- !Shopping cart section  -->