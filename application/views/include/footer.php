<!-- footer -->
<footer class="text-center py-5">
    <div class="container py-md-3">
        <!-- logo -->
        <h2 class="logo2 text-center">
            <a href="<?php echo site_url($page['pageurl']) ?>">
                <span class="fa fa-leaf"></span> <?php echo $page['footer']['company_name'] ?>
            </a>
        </h2>
        <!-- //logo -->
        <!-- address -->
        <div class="contact-left-footer mt-4">
            <ul>
                <li>
                    <p>
                        <span class="fa fa-map-marker mr-2"></span><?php echo $page['footer']['company_address'] ?>
                    </p>
                </li>
                <li class="mx-4">
                    <p>
                        <span class="fa fa-phone mr-2"></span><?php echo $page['footer']['Company_tele_01'] ?>
                    </p>
                </li>
                <li>
                    <p class="text-wh">
                        <span class="fa fa-envelope-open mr-2"></span>
                        <a href="mailto:info@example.com"><?php echo $page['footer']['email'] ?></a>
                    </p>
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
            <p class="text-da">© 2019 Botanica. All rights reserved
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
</script>

