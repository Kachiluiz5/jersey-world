<!-- Shopping cart section  -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }

        // save for later
        if (isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['item_id']);
        }
    }
?>

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Cart</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.html">Home</a></li>
                        <li class="page-item">Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- wish-list area start here  -->
        <div class="wish-list-area cart-page-area section">

            <div class="container">
            
                <div class="row">

                    <div class="col-12 wish-list-table">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <!-- <th scope="col">Total</th> -->
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>

                                <tbody>
                                 <?php
                                 foreach ($product->getData('cart') as $item) :
                                  $cart = $product->getProduct($item['item_id']);
                                    $subTotal[] = array_map(function ($item){
                                     ?>
                                <tr class="cart-page-item">
                                        <td>
                                            <div class="single-grid-product m-0">
                                                <div class="product-top">
                                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                                                    <div class="product-flags">
                                                        <span class="product-flag sale">SALE</span>
                                                        <span class="product-flag discount">-15%</span>
                                                    </div>
                                                </div>
                                                <div class="product-info text-center">
                                                    <h4 class="product-catagory">jersey</h4>
                                                    <h3 class="product-name"><a class="product-link" href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><?php echo $item['item_name'] ?? "Unknown"; ?></a></h3>
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
                                </div>
                                
                                        </td>
                                        <td>
                                            <div class="product-price text-center">
                                                <!-- <h4 class="regular-price">$220.88</h4> -->
                                                <h3> $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span></h3>
                                            
                                            </div>
                                            
                                        </td>
                                        
                                        <td>
                                            <div class="cart-quantity input-group">
                                            
                                
                                

                                        <div class=" qty d-flex  w-55">
                                          <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                          <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                          <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                    
                                        </td>

                                        <!-- CONCELING PRODUCT -->
                                        <form method="post">
                                          <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                          <td><button type="submit" name="delete-cart-submit" class="delet-btn" title="Delete Item"><img src="assets/images/close.svg" alt="close" /></button></td>
                                        </form>
                                        <!--! CONSELLING PRODUCT  -->
                                </tr>

                                </tbody>
                                <?php
                            return $item['item_price'];
                        }, $cart); // closing array_map function
                    endforeach;
                ?>
                            </table>
                        </div>
                    </div>
                   
                </div>

                <!-- Cart Page Bottom box area Start -->
                <div class="row cart-page-bottom-box-wrap">

                    <!-- Cart page bottom box -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="cart-page-bottom-box">
                            <h2 class="bottom-box-title">Discount Codes</h2>
                            
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="coupon_code" placeholder="Enter your coupon code" />
                                </div>
                                
                                <div class="form-button text-center">
                                    <button type="button" class="form-btn">Apply Cupon</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- Cart page bottom box -->

                    <!-- Cart page bottom box -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="cart-page-bottom-box">
                            <h2 class="bottom-box-title">Shipping</h2>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="coupon_code" placeholder="Enter your country" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="coupon_code" placeholder="Enter your city" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="coupon_code" placeholder="Enter your zip code" />
                                </div>
                                
                                <div class="form-button text-center">
                                    <button type="button" class="form-btn">Apply Now</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- Cart page bottom box -->

                    <!-- Cart page bottom box -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="cart-page-bottom-box cart-page-sub-total-box">
                            
                            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                                <h2 class="bottom-box-title m-0">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp;</h2>
                                <h2 class="bottom-box-title m-0">$<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></h2>
                            </div>

                            <!-- <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                                <div class="cart-inner-shipping-title">
                                    <span>Shipping</span>
                                    <p class="shipping-state m-0">Shipping to United States</p>
                                </div>
                                <h2 class="bottom-box-title m-0">$25.00</h2>
                            </div> -->

                            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                            <h2 class="">Total ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">
                            <?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h2>
                            </div>
                                
                            <div class="form-button text-center">
                                <a href="checkout.html" class="form-btn proceed-to-checkout-btn">Place an Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- Cart page bottom box -->
                </div>
                <!-- Cart Page Bottom box area End -->

            </div>
        </div>
        <!-- wish-list area end here  -->