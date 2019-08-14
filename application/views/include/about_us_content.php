<div class="inner-banner"
     style="background: url(<?php echo base_url($about_us['content']['Image']) ?>) no-repeat center;" id="home">
    <div class="container">
    </div>
</div>

<section class="about py-5" id="about">
    <div class="container py-lg-5 py-sm-3">
        <h3 class="heading mb-sm-5 mb-4 text-center"><?php echo $about_us['content']['Page_Heading'] ?></h3>
        <div class="row">
            <div class="col-lg-6 about-left">
                <h5 class="mb-3"><?php echo $about_us['content']['Heading'] ?></h5>
                <h3 class="mb-lg-4 mb-2"><?php echo $about_us['content']['Sub_heading'] ?> </h3>
                <h4 class=""><?php echo $about_us['content']['Sub_heading02'] ?></h4>
            </div>
            <div class="col-lg-6 pl-xl-5 mt-lg-0 mt-4 about-right">
                <p><?php echo $about_us['content']['Description'] ?> </p>
                <p class="pt-3 mt-3 border-top"><?php echo $about_us['content']['Description_02'] ?></p>
            </div>
        </div>
    </div>
</section>


<?php

if (!empty($about_us['fetch_customer_review'])) { ?>
    <hr style="width: 90%;">
    <section class="reviews">
        <h4 class="main-title text-center font-weight-bold pb-4"><?php echo $about_us['what_cus']['Page_Heading'] ?></h4>

        <div class="container">
            <div class="owl-carousel">
                    <?php foreach ($about_us['fetch_customer_review'] as $val) { ?>
                    <div class="item">
                        <div class=" card">
                            <div class="row">
                                <div class="col-xs-7 col-7 info-col">
                                    <h4 class="title"><?php echo $val['Customer_Name']?></h4>
                                    <h6 class="sub-title"><?php echo $val['Customer_Position']?></h6>


                                    <ul>
                                        <?php for($x=0;$x<$val['Customer_Rating'];$x++){?>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <?php }?>
                                    </ul>

                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4 img-col">
                                    <div class="user" style="background-image: url(<?php echo base_url($val['Customer_Image'])?>)"></div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-col">
                                    <p><?php echo $val['Customer_Review'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>

            </div>
            </div>
    </section>
<?php } ?>

