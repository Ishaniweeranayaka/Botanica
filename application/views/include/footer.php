<!-- footer -->
<footer class="text-center py-5">
    <div class="container py-md-3">
        <!-- logo -->
        <h2 class="logo2 text-center">
            <?php if(!empty($page['footer']['company_name'])){?>
            <a href="<?php echo site_url($page['pageurl']) ?>">
                <span class="fa fa-leaf"></span> <?php echo $page['footer']['company_name'] ?>
            </a>
            <?php }?>
        </h2>
        <!-- //logo -->
        <!-- address -->
        <div class="contact-left-footer mt-4">
            <ul>
                <li>
                    <?php if(!empty($page['footer']['company_address'])){?>
                    <p>
                        <span class="fa fa-map-marker mr-2"></span><?php echo $page['footer']['company_address'] ?>
                    </p>
                    <?php }?>
                </li>
                <li class="mx-4">
                     <?php if(!empty($page['footer']['Company_tele_01'])){?>
                    <p>
                        <span class="fa fa-phone mr-2"></span><?php echo $page['footer']['Company_tele_01'] ?>
                    </p>
                   <?php }?>
                </li>
                <li>
                 <?php if(!empty($page['footer']['email'])){?>
                     <p class="text-wh">
                        <span class="fa fa-envelope-open mr-2"></span>
                        <a href="mailto:info@example.com"><?php echo $page['footer']['email'] ?></a>
                    </p>
                   <?php }?>

                </li>
            </ul>
        </div>
        <!-- //address -->
        <!-- social icons -->
        <div class="footercopy-social my-4">
            <ul>
                <?php foreach($page['socialmedia'] as $val){ ?>
                <li>
                    <a target="_blank" href="<?php echo $val['Social_link']?>">
                        <span class="<?php echo $val['Social_Icon']?>"></span>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
        <!-- //social icons -->
        <!-- copyright -->
        <div class="w3l-copy text-center">
            <p class="text-da">© 2019 <?php echo $page['footer']['company_name'] ?>. All rights reserved
            </p>
        </div>
        <!-- //copyright -->
    </div>
</footer>
<!-- //footer -->

<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->

</body>
</html>
<script type="text/javascript">

    function refreshpage() {
        location.reload();
    }

    $(document).ready(function() {

        var owl = $("#owl-demo");

        owl.owlCarousel({
            navigation : true,
            singleItem : true,
            transitionStyle : "fade"
        });

    });
    addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    function startLoad() {
        HoldOn.open({
            theme: "sk-cube-grid",//If not given or inexistent theme throws default theme , sk-bounce
            message: "<div style='font-size: 13px;'> Loading, Please wait </div><div id='loaderDivContent'></div>",
            content: 'test', // If theme is set to "custom", this property is available
            textColor: "white" // Change the font color of the message
        });
    }
    $(".reviews .owl-carousel").owlCarousel({
        loop: true,
        margin: 35,
        nav: true,
        center: true,
        autoplay: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            750: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

</script>

