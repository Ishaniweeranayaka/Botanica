<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page['footer']['company_name'] ?></title>
    <!-- for-mobile-apps -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Agro Harvest Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <style>
        .drodowncls {
            font-family: -apple-system;
        }



    </style>

    <!-- css files -->
    <link href="<?php echo base_url('css/bootstrap.css') ?>" rel='stylesheet' type='text/css'/><!-- bootstrap css -->
    <link href="<?php echo base_url('css/style.css') ?>" rel='stylesheet' type='text/css'/><!-- custom css -->
    <link href="<?php echo base_url('css/font-awesome.min.css') ?>" rel="stylesheet"><!-- fontawesome css -->
    <!-- //css files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugin/holdon/HoldOn.min.css'); ?>"/>

    <link href="<?php echo base_url('css/css_slider.css') ?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('css/owl.carousel.min.css') ?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('css/slider.css') ?>" type="text/css" rel="stylesheet" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Thasadith:400,400i,700,700i&amp;subset=latin-ext,thai,vietnamese"
          rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css">
    <!-- //google fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo base_url('js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('plugin/holdon/HoldOn.min.js'); ?>"></script>
</head>

<body>

<script>
    HoldOn.open({
        theme: "sk-cube-grid",//If not given or inexistent theme throws default theme , sk-bounce
        message: "<div style='font-size: 13px;'> Loading, Please wait </div><div id='loaderDivContent'></div>",
        content: 'custom', // If theme is set to "custom", this property is available
        textColor: "white" // Change the font color of the message
    });
    setTimeout(function(){ HoldOn.close(); }, 1600);



    </script>


    <!-- header -->
<header>
    <div class="container">
        <!-- nav -->
        <nav class="py-4 d-lg-flex">
            <div id="logo">
                  <?php if(!empty($page['footer']['company_name'])){?>
                <h1><a onclick="refreshpage()"><span class="fa fa-leaf"></span><?php echo $page['footer']['company_name'] ?></a></h1>
                 <?php }?>
            </div>
            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop"/>
            <ul class="menu mt-md-2 ml-auto">
                <li class="mr-lg-4 mr-2 active"><a href="<?php echo site_url('home') ?>">Home</a></li>
                <li class="mr-lg-4 mr-2"><a href="<?php echo site_url('about_us') ?>">About Us</a>


                </li>

                <li class="mr-lg-4 mr-2"><a href="comingsoon.html">Services</a>
                    <ul class="menuselection">

                        <li><a href="<?php echo site_url('serveice_sub/Landscaping_Design') ?>">Landscaping Design</a>
                        </li>
                        <hr>
                        <li><a href="<?php echo site_url('serveice_sub/Hardscaping') ?>">HardScaping</a></li>
                        </li>
                        <hr>
                        <li><a href="<?php echo site_url('serveice_sub/Water_Features') ?>">Water Features</a></li>
                        </li>
                        <hr>
                        <li><a href="<?php echo site_url('serveice_sub/Water_Features') ?>">Root Boling</a></li>
                    </ul>
                </li>
                <li class="mr-lg-4 mr-2"><a href="comingsoon.html">Project</a></li>
                <li class="mr-lg-4 mr-2"><a href="contact.html">Contact</a></li>
                <li class="mr-lg-4 mr-2">
                    <?php if(!empty($page['footer']['Company_tele_01'])){?>
                    <span><span class="fa fa-phone"></span><?php echo $page['footer']['Company_tele_01'] ?></span>
                    <?php }?>
                </li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>