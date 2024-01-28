<div id="footer">
    <div class="container d-flex">
        <div class="row d-flex">
            <div class="col-md-3 col-sm-6 " data-aos="fade-up" data-aos-duration="1000">
                <?php
                $db = new Database();
                $db->select('options', 'site_name,footer_text,site_desc,contact_phone,contact_email,contact_address', null, null, null, null);
                $footer = $db->getResult();  ?>
                <h3><?php echo $footer[0]['site_name']; ?></h3>
                <p><?php echo $footer[0]['site_desc']; ?></p>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="useful-link">Useful Links</h3>
                <ul class="menu-list">
                    <li><a href="<?php echo $hostname; ?>">Home</a></li>
                    <li><a href="all_products.php">All Publications</a></li>
                    <li><a href="latest_products.php">Latest Publications</a></li>
                    <li><a href="popular_products.php">Popular Publications</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <h3>Categories</h3>
                <ul class="menu-list">
                    <?php
                    $db = new Database();
                    $db->select('sub_categories', '*', null, 'cat_products > 0 AND show_in_footer ="1"', null, null);
                    $result = $db->getResult();
                    if (count($result) > 0) {
                        foreach ($result as $res) { ?>
                            <li><a href="category.php?cat=<?php echo $res['sub_cat_id']; ?>"><?php echo $res['sub_cat_title']; ?></a>
                            </li>
                    <?php    }
                    } ?>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <h3>Contact Us</h3>
                <ul class="menu-list">
                    <?php if (!empty($footer[0]['contact_address'])) { ?>
                        <li><i class="fa fa-home"></i><span>: <?php echo $footer[0]['contact_address']; ?></span></li>
                    <?php } ?>
                    <?php if (!empty($footer[0]['contact_phone'])) { ?>
                        <li><i class="fa fa-phone"></i><span>: <?php echo $footer[0]['contact_phone']; ?></span></li>
                    <?php } ?>
                    <?php if (!empty($footer[0]['contact_email'])) { ?>
                        <li><i class="fa fa-envelope"></i><span>: <?php echo $footer[0]['contact_email']; ?></span></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12">
                <span><?php echo $footer[0]['footer_text'] ?> | Created by <a href="#" target="_blank">Our
                        Team</a></span>
            </div>
        </div>
    </div>
</div>

<!--AOS-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--AOS-->

<!---Main JS--->
<script src="./js/main.js"></script>

<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap-js/bootstrap.min.js"></script>
<script src="js/actions.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/okzoom.min.js" type="text/javascript"></script>

<!-- Owl Carousel -->
<script src="js/owl.carousel.js"></script>


<script>
    AOS.init();

    $(document).ready(function() {

        $('#product-img').okzoom({
            width: 200,
            height: 200,
            scaleWidth: 800
        });

        $('.banner-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText: ["", ""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.popular-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText: ["", ""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 4,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.latest-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText: ["", ""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 5
                }
            }
        });
    });

    /* magnificPopup video popup */
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });


    /* counterUp */
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    // JavaScript function to handle scroll-to-top functionality
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    // JavaScript function to show/hide the scroll-to-top button based on scroll position
    window.addEventListener("scroll", function() {
        var scrollToTopButton = document.getElementById("scrollToTop");

        if (window.pageYOffset > 100) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    });
</script>

</body>

</html>