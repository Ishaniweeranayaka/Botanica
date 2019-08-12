


<section class="banner_w3lspvt" id="home">
    <div class="csslider infinity" id="slider1">
        <?php

        $x = 1;
        foreach ($home['slider'] as $val) {
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
            <?php foreach ($home['slider'] as $val) { ?>
                <li>
                    <div style="background: url(<?php echo base_url('images/' . $val['slider_image']) ?>)">
                        <div class="overlay">
                            <div class="container">
                                <div class="w3layouts-banner-info text-center">
                                    <h3 class="text-wh"><?php echo $val['slider_heading'] ?></h3>
                                    <h4 class="text-wh mx-auto my-4"><?php echo $val['sub_text1'] ?>
                                        <h4>
                                            <p class="text-li mx-auto mt-2"><?php echo $val['sub_text2'] ?></p>
                                            <?php if ($val['Isactive'] == 1) { ?>
                                                <a href="about.html"
                                                   class="button-style mt-sm-5 mt-4"><?php echo $val['button_name'] ?></a>
                                            <?php } ?>
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
            foreach ($home['slider'] as $sliderval) {
                ?>
                <label for="slides_<?php echo $x ?>"></label>

                <?php
                $x++;
            }

            ?>
        </div>
    </div>
</section>

<?php if (!empty($home['fetch_home_detail'])) { ?>
    <section class="about py-5">
        <div class="container py-md-4">
            <h3 class="heading text-center mb-4"><?php echo $home['fetch_home_detail'][0]['Page_Heading'] ?></h3>
            <p class="about-text mx-auto text-center"><?php echo $home['fetch_home_detail'][0]['Description'] ?></p>
            <?php if(!empty($home['fetch_home_detail'][0]['Page_icon'])){?>
            <div class="feature-grids row mt-5 text-center">
                <?php foreach($home['fetch_home_detail'] as $val){?>
                <div class="col-lg-4 col-md-6 ">
                    <div class="bottom-gd px-2 text-center">
                        <div class="f-icon">
                            <span class="<?php echo $val['Page_icon'] ?>" aria-hidden="true"></span>
                        </div>

                        <h3 class="mt-4"> <?php echo $val['Heading'] ?></h3>
                        <p class="mt-3"><?php echo $val['Sub_heading'] ?></p>

                    </div>
                </div>
                <?php }?>
            </div>
            <?php }?>
        </div>
    </section>
<?php } else { ?>

    <section class="about py-5">
        <div class="container py-md-4">

        </div>
    </section>
<?php } ?>

<?php if (!empty($home['why_chooseup'])) { ?>
    <section class="serives-agile py-5">

        <div class="container py-md-5">
            <h3 class="heading mb-5 text-center"
                style="color: #fff;">  <?php echo $home['why_chooseup'][0]['Page_Heading'] ?></h3>
            <div class="welcome-bottom text-center">
                <?php foreach ($home['why_chooseup'] as $val) { ?>
                    <div class="welcome-grid mt-lg-0 mt-md-4 mt-5">
                        <span class="<?php echo $val['Page_icon'] ?>"></span>
                        <h4><?php echo $val['Heading'] ?></h4>
                        <p><?php echo $val['Description'] ?></p>
                    </div>
                <?php } ?>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Why Choose Us -->

<!-- core values -->
<?php if (!empty($home['our_process'])) { ?>
    <section class="core-value py-5">
        <div class="container py-md-4">
            <h3 class="heading mb-sm-5 mb-4 text-center"><?php echo $home['our_process']['Page_Heading'] ?></h3>
            <div class="row core-grids">
                <div class="col-lg-6 core-left">
                    <img src="<?php echo base_url($home['our_process']['Image']) ?>" class="img-fliud" alt=""/>
                </div>
                <div class="col-lg-6 core-right">
                    <p class="mt-4"
                       Style="font-size:15px;color:Black"><?php echo $home['our_process']['Description'] ?></p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- //core values -->

<!-- text -->
<?php if (!empty($home['turn_your_garden'])) { ?>
    <section style="background: url(<?php echo base_url($home['turn_your_garden'][0]['Image'])?>) no-repeat center;" class="background-img">
        <div class="overlay-clr py-5">
            <div class="container py-md-3">
                <div class="row core-grids">
                    <div class="col-lg-4 bg-left">
                        <h4 class=""><?php echo $home['turn_your_garden'][0]['Page_Heading'] ?></h4>
                    </div>
                    <div class="col-lg-3 col-md-5 bg-right mt-lg-0 mt-4">
                        <ul>
                            <?php foreach ($home['turn_your_garden'] as $val) { ?>
                                <li><span
                                        class="<?php echo $val['Page_icon'] ?>"></span><?php echo $val['Description'] ?>
                                </li>
                            <?php } ?>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php if (!empty($home['product_service'])) { ?>
    <section class="blog py-5">
        <div class="container py-md-5">
            <h3 class="heading mb-sm-5 mb-4 text-center"> <?php echo $home['product_service'][0]['Page_Heading'] ?></h3>
            <div class="row blog-grids">
                <?php foreach ($home['product_service'] as $val) { ?>
                    <div class="col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">
                        <img src="<?php echo base_url($val['Image']) ?>" class="img-fliud" alt=""/>
                        <div class="blog-info" style="background-color: yellowgreen">
                            <h4 style="font-size: 105%"><?php echo $val['Heading'] ?><span
                                    class="<?php echo $val['Page_icon'] ?>"></span></h4>
                            <p><?php echo $val['Description'] ?>  </p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <?php } ?>

            </div>
    </section>
<?php } ?>


<?php if (!empty($home['fetch_last_detail'])) { ?>
    <section style="background: url(<?php echo base_url($home['fetch_last_detail']['Image'])?>) no-repeat center;" class="text py-5" >
        <div class="container py-md-3 text-center">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-4 heading"><?php echo $home['fetch_last_detail']['Page_Heading'] ?></h3>
                    <p><?php echo $home['fetch_last_detail']['Description'] ?> </p>
                    <a href="<?php echo $home['fetch_last_detail']['btnlink1'] ?>"
                       class="<?php echo $home['fetch_last_detail']['btnclass1'] ?>"><?php echo $home['fetch_last_detail']['btnname1'] ?></a>
                    <a href="<?php echo $home['fetch_last_detail']['btnlink2'] ?>"
                       class="<?php echo $home['fetch_last_detail']['btnclass2'] ?>"><?php echo $home['fetch_last_detail']['btnname2'] ?> </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>