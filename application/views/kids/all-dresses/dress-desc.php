<main class="main">
    <?php
    if (isset($data1)) {
         foreach($data1 as $row){
        ?>
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $data1[0]->product_name ?></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">          
                                    <!-- #region-->
                                    <figure class="product-main-image">
                                    <!-- <span class="product-label label-sale">Sale</span> -->
                                    <img id="product-zoom" src="<?= base_url('./upload/kids/') . $data1[0]->product_img1 ?>"
                                        alt="product image">
                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                    </figure>
                                    <!-- End .product-main-image -->

                                <div id="product-zoom-gallery" class="product-image-gallery product-gallery-masonry">
                                    <a class="product-gallery-item" href="#"
                                        data-image="<?= base_url('./upload/kids/') . $data1[0]->product_img1 ?>"
                                        data-zoom-image="<?= base_url('./upload/kids/') . $data1[0]->product_img1 ?>  ">
                                        <img src="<?= base_url('./upload/kids/') . $data1[0]->product_img1 ?>"
                                            alt="product cross">
                                    </a>

                                    <a class="product-gallery-item gallery-item-wide" href="#"
                                        data-image="<?= base_url('./upload/kids/') . $data1[0]->product_img2 ?>"
                                        data-zoom-image="<?= base_url('./upload/kids/') . $data1[0]->product_img2 ?>">
                                        <img src="<?= base_url('./upload/kids/') . $data1[0]->product_img2 ?>"
                                            alt="product with model">
                                    </a>

                                    <a class="product-gallery-item" href="#"
                                        data-image="<?= base_url('./upload/kids/') . $data1[0]->product_img3 ?>"
                                        data-zoom-image="<?= base_url('./upload/kids/') . $data1[0]->product_img3 ?>">
                                        <img src="<?= base_url('./upload/kids/') . $data1[0]->product_img3 ?>"
                                            alt="product side">
                                    </a>
                                </div><!-- End .product-image-gallery -->
                                
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details sticky-content">
                                <h1 class="product-title"><?=$data1[0]->product_name?></h1><!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <a class="ratings-text" href="#product-accordion" id="review-link">( 2 Reviews )</a>
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    <span class="new-price"><?=$data1[0]->product_price?><i class="fa fa-inr pl-2" style="font-size:18px"></i></span>
                                    <!-- <span class="old-price">$80.00</span> -->
                                </div><!-- End .product-price -->

                                <!-- <div class="product-content">
                                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus
                                        libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus. </p>
                                </div>End .product-content -->

                                <!-- <div class="details-filter-row details-row-size">
                                    <label>Color:</label>

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="<?= base_url('assets/images/products/single/masonry/1-thumb.jpg') ?>"
                                                alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/products/single/masonry/2-thumb.jpg') ?>"
                                                alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="<?= base_url('assets/images/products/single/masonry/3-thumb.jpg') ?>"
                                                alt="product desc">
                                        </a>
                                    </div>
                                </div> -->

                                <div class="details-filter-row details-row-size">
                                    <label for="size">Size:</label>
                                    <div class="select-custom">
                                        <form action="<?= base_url('main/option')  ?>" method="post">
                                        <select name="size" id ="size" class="form-control">
                                            <option value="#" selected="selected">Select a size</option>
                                            <option value="<?= $data1[0]->product_size1 ?>"><?= $data1[0]->product_size1 ?></option>
                                            <option value="<?= $data1[0]->product_size2 ?>"><?= $data1[0]->product_size2 ?></option>
                                            <option value="<?= $data1[0]->product_size3 ?>"><?= $data1[0]->product_size3 ?></option>
                                            <option value="<?= $data1[0]->product_size4 ?>"><?= $data1[0]->product_size4 ?></option>
                                     <!-- #region 
                                    
                                    
                                    -->     </select>
                                        <input type="submit" value="submit">
                                        </form>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .details-filter-row -->

                                <div class="details-filter-row details-row-size">
                                    <label for="qty">Qty:</label>
                                    <div class="product-details-quantity">
                                        <input type="number" id="qty" class="form-control" value="1" min="1" max="10"
                                            step="1" data-decimals="0" required>
                                    </div><!-- End .product-details-quantity -->
                                </div><!-- End .details-filter-row -->

                                <div class="product-details-action">
                                    <a href="<?= base_url('main/add_cart/').$row->id?>" class="btn-product btn-cart"><span>add to cart</span></a>

                                    <div class="details-action-wrapper">
                                        <a href="#" class="btn-product btn-wishlist" title="Buy Now"><span>Buy Now</span></a>
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->
  
                                <!--<div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:</span>
                                        <a href="#">Women</a>,
                                        <a href="#">Coat</a>,
                                        <a href="#">Brown</a>
                                    </div>

                                    <div class="social-icons social-icons-sm">
                                        <span class="social-label">Share:</span>
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                                class="icon-pinterest"></i></a>
                                    </div>
                                </div> -->
                                <!-- End .product-details-footer -->

                                <div class="accordion accordion-plus product-details-accordion" id="product-accordion">
                                    

                                    <div class="card card-box card-sm">
                                        <div class="card-header" id="product-info-heading">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    href="#product-accordion-info" aria-expanded="false"
                                                    aria-controls="product-accordion-info">
                                                    Product Details
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="product-accordion-info" class="collapse"
                                            aria-labelledby="product-info-heading" data-parent="#product-accordion">
                                            <div class="card-body">
                                                <div class="product-desc-content">
                                                    <?=$data1[0]->product_details ?>
                                                    <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                                                        Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                                        Suspendisse urna viverra non, semper suscipit, posuere a, pede.
                                                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                                        mauris sit amet orci. </p>

                                                    <h3>Fabric & care</h3>
                                                    <ul>
                                                        <li>100% Polyester</li>
                                                        <li>Do not iron</li>
                                                        <li>Do not wash</li>
                                                        <li>Do not bleach</li>
                                                        <li>Do not tumble dry</li>
                                                        <li>Professional dry clean only</li>
                                                    </ul>

                                                    <h3>Size</h3>
                                                    <p>S, M, L, XL</p> -->
                                                </div><!-- End .product-desc-content -->
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card card-box card-sm">
                                        <div class="card-header" id="product-desc-heading">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    href="#product-accordion-desc" aria-expanded="false"
                                                    aria-controls="product-accordion-desc">
                                                    Description
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="product-accordion-desc" class="collapse"
                                            aria-labelledby="product-desc-heading" data-parent="#product-accordion">
                                            <div class="card-body">
                                                <div class="product-desc-content">
                                                <?=$data1[0]->product_description ?>
                                                    <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                                                        Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                                        Suspendisse urna viverra non, semper suscipit, posuere a, pede.
                                                        Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                                        mauris sit amet orci.</p>
                                                    <ul>
                                                        <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis
                                                            elit. </li>
                                                        <li>Vivamus finibus vel mauris ut vehicula.</li>
                                                        <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.
                                                        </li>
                                                    </ul>

                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
                                                        Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                                        Suspendisse urna viverra non, semper suscipit, posuere a, pede.</p> -->
                                                </div><!-- End .product-desc-content -->
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card card-box card-sm">
                                        <div class="card-header" id="product-shipping-heading">
                                            <h2 class="card-title">
                                                <a role="button" data-toggle="collapse" href="#product-accordion-shipping"
                                                    aria-expanded="true" aria-controls="product-accordion-shipping">
                                                    Shipping & Returns
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="product-accordion-shipping" class="collapse show"
                                            aria-labelledby="product-shipping-heading" data-parent="#product-accordion">
                                            <div class="card-body">
                                                <div class="product-desc-content">
                                                    <p>We deliver to over 100 countries around the world. For full details
                                                        of the delivery options we offer, please view our <a
                                                            href="#">Delivery information</a><br>
                                                        We hope you’ll love every purchase, but if you ever need to return
                                                        an item you can do so within a month of receipt. For full details of
                                                        how to make a return, please view our <a href="#">Returns
                                                            information</a></p>
                                                </div><!-- End .product-desc-content -->
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card card-box card-sm">
                                        <div class="card-header" id="product-review-heading">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    href="#product-accordion-review" aria-expanded="false"
                                                    aria-controls="product-accordion-review">
                                                    Reviews (2)
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="product-accordion-review" class="collapse"
                                            aria-labelledby="product-review-heading" data-parent="#product-accordion">
                                            <div class="card-body">
                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="row no-gutters">
                                                            <div class="col-auto">
                                                                <h4><a href="#">Samanta J.</a></h4>
                                                                <div class="ratings-container">
                                                                    <div class="ratings">
                                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                                        <!-- End .ratings-val -->
                                                                    </div><!-- End .ratings -->
                                                                </div><!-- End .rating-container -->
                                                                <span class="review-date">6 days ago</span>
                                                            </div><!-- End .col -->
                                                            <div class="col">
                                                                <h4>Good, perfect size</h4>

                                                                <div class="review-content">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                        elit. Ducimus cum dolores assumenda asperiores
                                                                        facilis porro reprehenderit animi culpa atque
                                                                        blanditiis commodi perspiciatis doloremque,
                                                                        possimus, explicabo, autem fugit beatae quae
                                                                        voluptas!</p>
                                                                </div><!-- End .review-content -->

                                                                <div class="review-action">
                                                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful
                                                                        (2)</a>
                                                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful
                                                                        (0)</a>
                                                                </div><!-- End .review-action -->
                                                            </div><!-- End .col-auto -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .review -->

                                                    <div class="review">
                                                        <div class="row no-gutters">
                                                            <div class="col-auto">
                                                                <h4><a href="#">John Doe</a></h4>
                                                                <div class="ratings-container">
                                                                    <div class="ratings">
                                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                                        <!-- End .ratings-val -->
                                                                    </div><!-- End .ratings -->
                                                                </div><!-- End .rating-container -->
                                                                <span class="review-date">5 days ago</span>
                                                            </div><!-- End .col -->
                                                            <div class="col">
                                                                <h4>Very good</h4>

                                                                <div class="review-content">
                                                                    <p>Sed, molestias, tempore? Ex dolor esse iure hic
                                                                        veniam laborum blanditiis laudantium iste amet. Cum
                                                                        non voluptate eos enim, ab cumque nam, modi, quas
                                                                        iure illum repellendus, blanditiis perspiciatis
                                                                        beatae!</p>
                                                                </div><!-- End .review-content -->

                                                                <div class="review-action">
                                                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful
                                                                        (0)</a>
                                                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful
                                                                        (0)</a>
                                                                </div><!-- End .review-action -->
                                                            </div><!-- End .col-auto -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .review -->
                                                </div><!-- End .reviews -->
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->
                                </div><!-- End .accordion -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <hr class="mt-3 mb-5">

                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                    <div class="product product-7">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.html">
                                <img src="<?= base_url('assets/images/products/product-4.jpg') ?>" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                        wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Women</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Brown paperbag waist <br>pencil skirt</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $60.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="<?= base_url('assets/images/products/product-4-thumb.jpg') ?>"
                                        alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="<?= base_url('assets/images/products/product-4-2-thumb.jpg') ?>"
                                        alt="product desc">
                                </a>

                                <a href="#">
                                    <img src="<?= base_url('assets/images/products/product-4-3-thumb.jpg') ?>"
                                        alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7">
                        <figure class="product-media">
                            <span class="product-label label-out">Out of Stock</span>
                            <a href="product.html">
                                <img src="<?= base_url('assets/images/products/product-6.jpg') ?>" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                        wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jackets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="out-price">$120.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <a href="product.html">
                                <img src="<?= base_url('assets/images/products/product-11.jpg') ?>" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                        wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $110.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 1 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="<?= base_url('assets/images/products/product-11-thumb.jpg') ?>"
                                        alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="<?= base_url('assets/images/products/product-11-2-thumb.jpg') ?>"
                                        alt="product desc">
                                </a>

                                <a href="#">
                                    <img src="<?= base_url('assets/images/products/product-11-3-thumb.jpg') ?>"
                                        alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="<?= base_url('assets/images/products/product-10.jpg') ?>" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                        wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jumpers</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $56.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="<?= base_url('assets/images/products/product-7.jpg') ?>" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                        wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jeans</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Blue utility pinafore denim dress</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $76.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
        <?php
         }
    }
    ?>
</main><!-- End .main -->