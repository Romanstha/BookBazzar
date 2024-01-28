<?php include 'config.php';  //include config
// set dynamic title
$db = new Database();
$db->select('options', 'site_title', null, null, null, null);
$result = $db->getResult();

if (!empty($result)) {
    $title = $result[0]['site_title'];
} else {
    $title = "Shopping Project";
}
// include header 
include 'header.php'; ?>
<!----Header End----->
<!---Carousel Section Start---->
<div id="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content ">
                    <div class="banner-carousel owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="2000">
                        <div class="item" data-aos="fade-up" data-aos-duration="3000">
                            <img src="images/book1.jpg" alt="" />
                            <h1>Best Online BookStore</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus omnis,
                                minima
                                tempore
                                illum fuga aperiam magnam a nostrum consectetur alias.</p>
                            <a href="./all_products.php">
                                <button id="buy">Buy Now</button>
                            </a>
                        </div>
                        <div class="item">
                            <img src="images/book3.jpg" alt="" />
                            <h1>Best Online BookStore</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus omnis, minima tempore
                                illum fuga aperiam magnam a nostrum consectetur alias.</p>
                            <a href="./all_products.php">
                                <button id="buy">Buy Now</button>
                            </a>
                        </div>

                        <div class="item">
                            <img src="images/book4.jpg" alt="" />
                            <h1>Best Online BookStore</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus omnis, minima tempore
                                illum fuga aperiam magnam a nostrum consectetur alias.</p>
                            <a href="./all_products.php">
                                <button id="buy">Buy Now</button>
                            </a>
                        </div>

                        <div class="item">
                            <img src="images/book5.jpg" alt="" />
                            <h1>Best Online BookStore</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus omnis, minima tempore
                                illum fuga aperiam magnam a nostrum consectetur alias.</p>
                            <a href="./all_products.php">
                                <button id="buy">Buy Now</button>
                            </a>
                        </div>

                        <div class="item">
                            <img src="images/book6.jpg" alt="" />
                            <h1>Best Online BookStore</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus omnis, minima tempore
                                illum fuga aperiam magnam a nostrum consectetur alias.</p>
                            <a href="./all_products.php">
                                <button id="buy">Buy Now</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Carousel Section End---->

<!---Publication Section Start---->
<div class="product-section popular-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    Publications</h2>
                <div class="popular-carousel owl-carousel owl-theme">
                    <?php
                    $db->select('products', '*', null, 'product_views > 0', 'product_views DESC', 10);
                    $result = $db->getResult();
                    if (count($result) > 0) {
                        foreach ($result as $row) { ?>
                            <div class="product-grid latest item" data-aos="fade-up" data-aos-duration="2000">
                                <div class="product-image popular">
                                    <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                        <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                                    </a>
                                    <div class="product-button-group">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a>
                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0, 25), '...'; ?></a>
                                    </h3>
                                    <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                                </div>
                            </div>
                    <?php    }
                    } else {
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Publication Section End---->


<!---Latest Publication Section Start---->
<div class="product-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Latest
                    Publications</h2>
                <div class="latest-carousel owl-carousel owl-theme">
                    <?php
                    $db = new Database();
                    $db->select('products', '*', null, null, 'product_id DESC', 6);
                    $result = $db->getResult();
                    if (count($result) > 0) {
                        foreach ($result as $row) { ?>
                            <div class="product-grid latest item" data-aos="fade-up" data-aos-duration="3000">
                                <div class="product-image popular">
                                    <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                        <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                                    </a>
                                    <div class="product-button-group">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a>
                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0, 25), '...'; ?></a>
                                    </h3>
                                    <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                                </div>
                            </div>
                    <?php    }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Latest Publication Section End---->

<!---Most Selling Publication Section Start---->
<div class="product-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Most
                    Selling Publications</h2>
                <div class="latest-carousel owl-carousel owl-theme">
                    <?php
                    $db = new Database();
                    $db->select('products', '*', null, null, 'product_id DESC', 6);
                    $result = $db->getResult();
                    if (count($result) > 0) {
                        foreach ($result as $row) { ?>
                            <div class="product-grid latest item" data-aos="fade-up" data-aos-duration="3000">
                                <div class="product-image popular">
                                    <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                        <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                                    </a>
                                    <div class="product-button-group">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a>
                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0, 25), '...'; ?></a>
                                    </h3>
                                    <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                                </div>
                            </div>
                    <?php    }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Most Selling Publication Section End---->


<!-- Services Area Start -->
<div class="services-area pt-120">
    <div class="container">
        <div class="row coustom-row">
            <div class="col-md-4 col-12 coustom-col" data-aos="fade-up" data-aos-duration="1000">
                <div class="single-service">
                    <span class="fa fa-book"></span>
                    <h3>Printed Book</h3>
                    <p>There are many variations passages of Lorem Ipsum available, bmaority have suffered alteration
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12 coustom-col" data-aos="fade-up" data-aos-duration="2000">
                <div class="single-service mrgn-res">
                    <span class="fa fa-pencil"></span>
                    <h3>User Research</h3>
                    <p>There are many variations passages of Lorem Ipsum available, bmaority have suffered alteration
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12 coustom-col" data-aos="fade-up" data-aos-duration="3000">
                <div class="single-service">
                    <span class="fa fa-hourglass"></span>
                    <h3>Free Delivery</h3>
                    <p>There are many variations passages of Lorem Ipsum available, bmaority have suffered alteration
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Services Area End---->


<!-- About Area End-->
<div id="about-area" class="about-area pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="about-content">
                    <h2 data-aos="fade-up" data-aos-duration="1000">A word from <span data-aos="fade-up" data-aos-duration="1000">the Author</span></h2>
                    <p data-aos="fade-up" data-aos-duration="2000">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout. The point of using
                        Lorem Ipsum is that more-or-less normal distribution of letters, as opposed to using'Content
                        here,content here',making it look like readable English. Many desktop puhing packages and web
                        page editors now.</p>
                    <div class="autograph" data-aos="fade-up" data-aos-duration="2000">
                        <img src="images/team/2.png" alt="">
                    </div>
                    <div class="about-social" data-aos="fade-up" data-aos-duration="2000">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="about-img">
                    <img src="images/team/1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End--->

<!--Career Start-->
<div class="career-area pt-60 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="mockup-img">
                    <img src="images/mockup/3.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                <div class="career-text">
                    <h2>Build Your <br>Successful Career</h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it ov 2000 years old. It uses a dictionary of over
                        200 Latin words, </p>
                    <span>ONLY Rs.1000</span>
                    <a href="category.php">BUY NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Career End-->


<!--Subscribe to Newsletter Section Start-->

<div class="subscribe-area bg-img ptb-150" style="background-image:url(images/bg/bg-image.jpg);" data-overlay="8">
    <div class="container">
        <div class="subscribe-content text-center z-index">
            <h2 data-aos="fade-up" data-aos-duration="2000">Subscribe To Our Newsletter</h2>
            <p data-aos="fade-up" data-aos-duration="2000">There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteation in some form, by injected humour, or randomised
                words which don't look even</p>
            <div class="subscribe-form text-center">
                <div id="mc_embed_signup" class="subscribe-form">
                    <form action="./index.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mc-form" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll" class="mc-form" data-aos="fade-up" data-aos-duration="3000">
                            <input type="email" value="" name="email" class="email" placeholder="Your email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                            </div>
                            <div class="clear">
                                <input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Subscribe to Newsletter Section End-->


<!-- Popup video start -->
<div class="video-counter-area gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="video-area" data-aos="fade-up" data-aos-duration="2000">
                    <img src="images/banner/1.jpg" alt="">
                    <a href="https://www.youtube.com/watch?v=xeUWvnHXikQ" class="video-icon video-popup ">
                        <img src="images/banner/1.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="counter-area" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="single-counter mb-30">
                        <div class="counter-icon">
                            <i class=" fa fa-book"></i>
                        </div>
                        <div class="counter-text">
                            <h3 class="counter">120</h3>
                            <p>Total Pages</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="single-counter mb-30">
                        <div class="counter-icon">
                            <i class="fa fa-male" aria-hidden="true"></i>
                        </div>
                        <div class="counter-text">
                            <h3 class="counter">150</h3>
                            <p>Active Readers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="single-counter mb-30">
                        <div class="counter-icon">
                            <i class=" fa fa-heart"></i>
                        </div>
                        <div class="counter-text">
                            <h3 class="counter">850</h3>
                            <p>Facebook Fans</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="single-counter mb-30">
                        <div class="counter-icon">
                            <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                        </div>
                        <div class="counter-text">
                            <h3 class="counter">540</h3>
                            <p>Subscribers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pop Up video end -->

<!--scroll to top--->
<button id="scrollToTop" onclick="scrollToTop()" style="font-size: 18px;"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

<!----Footer Start---->
<?php include 'footer.php'; ?>
<!----Footer End---->