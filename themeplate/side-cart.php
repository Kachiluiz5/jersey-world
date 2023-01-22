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

<div class="cart-product-list">

                    <!-- Product item start -->
                    <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function ($item){
                ?>
                    <div class="product-item cart-product-item">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="single-product.html"><?php echo $item['item_image'] ?? "/assets/products/1.png" ?></a>
                            </div>
                            <div class="product-info">
                                <div class="product-name-part">
                                    <h4 class="product-catagory"><?php echo $item['item_brand'] ?? "Brand"; ?></h4>
                                    <h3 class="product-name"><a class="product-link" href="single-product.html"><?php echo $item['item_name'] ?? "Unknown"; ?></a></h3>

                                    <div class="cart-quantity input-group">
                                        <div class="increase-btn dec qtybutton btn">-</div>
                                        <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly />
                                        <div class="increase-btn inc qtybutton btn">+</div>
                                    </div>

                                    <button class="cart-remove-btn">Remove</button>
                                </div>
                                <div class="product-price">
                                    <span class="regular-price">$150.0<span>
                                    <span class="price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            return $item['item_price'];
                        }, $cart); // closing array_map function
                    endforeach;
                ?>
                    <!-- Product item end -->
                </div>