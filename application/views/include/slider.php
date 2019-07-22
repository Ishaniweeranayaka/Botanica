<section class="banner_w3lspvt" id="home">
    <div class="csslider infinity" id="slider1">
        <?php
        $x = 1;
        foreach ($slider as $val) {
            ?>

            <?php if ($x == 1) { ?>
                <input type="radio" name="slides" checked="checked" id="slides_<?php echo $x ?>"/>
            <?php } else { ?>
                <input type="radio" name="slides" id="slides_<?php echo $x ?>"/>
            <?php } ?>
            <?php
            $x++;
        } ?>
        <ul>
            <?php foreach ($slider as $val) { ?>
                <li>
                    <div style="background: url(<?php echo base_url('images/' . $val['slider_image']) ?>)">
                        <div class="overlay">
                            <div class="container">
                                <div class="w3layouts-banner-info text-center">
                                    <h3 class="text-wh"><?php echo $val['slider_heading'] ?></h3>
                                    <h4 class="text-wh mx-auto my-4"><?php echo $val['sub_text1'] ?>
                                        <h4>
                                            <p class="text-li mx-auto mt-2"><?php echo $val['sub_text2'] ?></p>
                                            <a href="about.html"
                                               class="button-style mt-sm-5 mt-4"><?php echo $val['button_name'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <div class="arrows">
            <?php
            $x = 1;
            foreach ($slider as $sliderval) {
                ?>
                <label for="slides_<?php echo $x ?>"></label>

                <?php
                $x++;
            }

            ?>
        </div>
    </div>
</section>

<!-- Products & Services -->
<!--<section class="blog py-5">
    <div class="container py-md-5">
        <h3 class="heading mb-sm-5 mb-4 text-center"> Our Products and Services</h3>

        <div class="row blog-grids">
            <div class="col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">
                <img src="images/s1.jpg" class="img-fliud" alt="" />
            </div>

            <div class="col-lg-4 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 pb-md-5">
                <img src="images/s2.jpg" class="img-fliud" alt="" />

            </div>
            <div class="col-lg-4 col-md-6 blog-right mt-lg-0 mt-5 pt-lg-0 pt-md-5">
                <img src="images/s3.jpg" class="img-fliud" alt="" />

            </div>


    </div>
    </div>

</section>-->
<section class="blog py-5">
    <div class="container py-md-5">
        <h3 class="heading mb-sm-5 mb-4 text-center"> Our Products and Services</h3>
        <div class="row blog-grids">
            <div class="col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">
                <img src="images/s2.jpg" class="img-fliud" alt="" />
                <div class="blog-info"style="background-color: yellowgreen">
                    <h4>Landscape Design <span class="fa fa-pagelines"></span></h4>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 pb-md-5">
                <img src="images/s2.jpg" class="img-fliud" alt="" />
                <div class="blog-info" style="background-color: yellowgreen">
                    <h4>Hardscapes <span class="fa fa-pagelines" style="font-size: 10px; content: '';"></span></h4>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-right mt-lg-0 mt-5 pt-lg-0 pt-md-5">
                <img src="images/s3.jpg" class="img-fliud" alt="" />
                <div class="blog-info"style="background-color: yellowgreen">
                    <h4>Water Features <span class="fa fa-pagelines"></span></h4>
                    <p class="mt-2"style="border-bottom-color: blue"></p>
                </div>
            </div>
        </div>
        <br>
        <div class="row blog-grids">
            <div class="row">
            <div class="col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">
                <img src="images/s2.jpg" class="img-fliud" alt="" />
                <div class="blog-info"style="background-color: yellowgreen">
                    <h4>Planning <span class="fa fa-pagelines"></span></h4>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 pb-md-5">
                <img src="images/s2.jpg" class="img-fliud" alt="" />
                <div class="blog-info"style="background-color: yellowgreen">
                    <h4>Irrigation <span class="fa fa-pagelines"></span></h4>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-right mt-lg-0 mt-5 pt-lg-0 pt-md-5">
                <img src="images/s3.jpg" class="img-fliud" alt="" />
                <div class="blog-info">
                    <h4>Property Maintenace <span class="fa fa-pagelines"></span></h4>

                </div>
            </div>
        </div>
            <br>
            <div class="row blog-grids">
                <div class="row">
                    <div class="col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">
                        <img src="images/s2.jpg" class="img-fliud" alt="" />
                        <div class="blog-info">
                            <h4>Planning <span class="fa fa-pagelines"></span></h4>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 pb-md-5">
                        <img src="images/s2.jpg" class="img-fliud" alt="" />
                        <div class="blog-info">
                            <h4>Irrigation <span class="fa fa-pagelines"></span></h4>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-right mt-lg-0 mt-5 pt-lg-0 pt-md-5">
                        <img src="images/s3.jpg" class="img-fliud" alt="" />
                        <div class="blog-info">
                            <h4>Property Maintenace <span class="fa fa-pagelines"></span></h4>

                        </div>

    </div>
</section>
<!-- //Products & Services -->





<!-- //about -->

<!-- Why Choose Us -->

<section class="background-img=1.jpg">

    <div class="container py-md-5">
        <h3 class="heading mb-5 text-center"> Why Choose Us</h3>
        <div class="welcome-bottom text-center">
            <div class="welcome-grid">
                <span class="fa fa-apple"></span>
                <h4 class="my-3">Grains </h4>
                <p>quis nostrum ullamet corporis suscipit.</p>
            </div>
            <div class="welcome-grid">
                <span class="fa fa-skyatlas"></span>
                <h4 class="my-3">Seed Traits</h4>
                <p>quis nostrum ullamet corporis suscipit.</p>
            </div>

            <div class="welcome-grid mt-md-0 mt-5">
                <span class="fa fa-yelp"></span>
                <h4 class="my-3">Safety</h4>
                <p>quis nostrum ullamet corporis suscipit.</p>
            </div>
            <div class="welcome-grid mt-lg-0 mt-md-4 mt-5">
                <span class="fa fa-viadeo"></span>
                <h4 class="my-3">Cultivation</h4>
                <p>quis nostrum ullamet corporis suscipit.</p>
            </div>
            <div class="welcome-grid mt-lg-0 mt-md-4 mt-5">
                <span class="fa fa-pagelines"></span>
                <h4 class="my-3">Environment</h4>
                <p>quis nostrum ullamet corporis suscipit.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!-- Why Choose Us -->

<!-- core values -->
<section class="core-value py-5">
    <div class="container py-md-4">
        <h3 class="heading mb-sm-5 mb-4 text-center"> Our Process</h3>
        <div class="row core-grids">
            <div class="col-lg-6 core-left">
                <img src="images/core.jpg" class="img-fliud" alt="" />
            </div>
            <div class="col-lg-6 core-right">
                <p class="mt-4"Style="font-size:8px;color:Black"></p>
            </div>
        </div>
    </div>
</section>
<!-- //core values -->

<!-- text -->
<section class="background-img">
    <div class="overlay-clr py-5">
        <div class="container py-md-3">
            <div class="row core-grids">
                <div class="col-lg-4 bg-left">
                    <h4 class="">Turn Your Outdoor Living Area into a Backyard Paradise!</h4>
                </div>

                <div class="col-lg-3 col-md-5 bg-right mt-lg-0 mt-4">
                    <ul>

                        <li><span class="fa fa-pagelines"></span>Lawn Maintenance</li>
                        <li><span class="fa fa-pagelines"></span>Flower Plantings</li>
                        <li><span class="fa fa-pagelines"></span> Waterfalls & Ponds</li>
                        <li><span class="fa fa-pagelines"></span> Grasses</li>
                        <li><span class="fa fa-pagelines"></span> Irrigation Openers & Closing</li>
                        <li><span class="fa fa-pagelines"></span> Root Bolling</li>
                        <li><span class="fa fa-pagelines"></span> Overseed Lawn</li>
                    </ul>

                </div>
                <div class="col-lg-3 col-md-5 bg-right mt-lg-0 mt-4">
                    <ul>

                        <li><span class="fa fa-pagelines"></span> Lawn Maintenance</li>
                        <li><span class="fa fa-pagelines"></span> Flower Plantings</li>
                        <li><span class="fa fa-pagelines"></span> Waterfalls & Ponds</li>
                        <li><span class="fa fa-pagelines"></span> Grassese</li>
                        <li><span class="fa fa-pagelines"></span>  Irrigation Openers & Closing</li>
                        <li><span class="fa fa-pagelines"></span> Root Bolling</li>
                        <li><span class="fa fa-pagelines"></span> Overseed Lawn</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //text -->

<!-- text -->
<section class="text py-5">
    <div class="container py-md-3 text-center">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-4 heading">The Best Time To <span>Plant The Tree</span> Is Now.</h3>
                <p>Sed ut perspiciatis unde omnis natus error dolor volup tatem ed accus antium dolor emque
                    laudantium, totam rem aperiam, eaqu ipsa quae ab illo quasi architi ecto beatae vitae dicta
                    sunt dolor ipsum.</p>
                <a href="services.html" class="btn mr-3"> Our Services</a>
                <a href="contact.html" class="btn btn1"> Contact Us </a>
            </div>
        </div>
    </div>
</section>