<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width" />
    <title>JRS Biodivesity Foundation</title>
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/themes/default/default.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
<style>
#footer-nav {
     width: 250px;
}
#footer-nav ul{
    -webkit-column-count:none;
    -moz-column-count:none;
    column-count:none;
}
#footer-nav ul li {
    width: 48%;
    float: left;
    list-style: none;
}
</style>
<![endif]-->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            if($("#slider").length)
            {
                $("#slider").nivoSlider();
            }
        });
    </script>   
</head>
<body>
    <div id="wrapper" class="wrapper">
        <div id="header">      
            <div id="logo">
                <a href="index.php"><h1><img src="images/JRS_Logo-01.png" alt="JRS Biodivesity Foundation" id="jrs-logo" title="JRS Biodivesity Foundation"/></h1></a>
            </div><!--end logo-->
            <div id="header-p">
                <p class="italic">Enhancing the understanding of biological diversity for the benefit and sustainability of life on earth.</p>
            </div>
            <div id="top-nav">
                <ul>
                    <li><a href="javascript:;">Apply for Funding </a></li>
                    <li><a href="javascript:;">Login</a></li>
                </ul>
            </div><!-- end top nav--><div class="clear"></div>
            <div id="searchbar">
                <form id="search" method="" action="" name="search">
                    <input id="s-term" class="" type="text" aria-required="true" role="input" value="" name="searchterm" placeholder="Search Site..." />
                    <input type="submit" value="" class="imgClass" />
                </form>
            </div>
            <div class="clear"></div>
            <div id="main-nav">
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="approach.php">Our Approach</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="grants.php">Grant Portfolio</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="blog.php">Blog</a></li> 
                </ul>
            </div>
            <div class="clear"></div>
            
        </div><!--end header-->
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/home-hero.gif" title="Cras justo odio, dapibus ac facilisis in, egestas eget quam"/>
                <img src="images/wildlife01.png" title="stuff gos hear"/>
                <img src="images/wildlife02.png" title="Cras justo odio, dapibus ac facilisis in, egestas eget quam"/>
                <img src="images/wildlife03.png" title="stuff gos hear"/>
                <img src="images/wildlife04.png" title="Cras justo odio, dapibus ac facilisis in, egestas eget quam"/>
                <img src="images/wildlife05.png" title="stuff gos hear"/>
                <img src="images/wildlife06.png" title="Cras justo odio, dapibus ac facilisis in, egestas eget quam"/>
            </div>
        </div>
        <div id="high-light-img">
            <img src="images/home-be-s2.png" />
            <img src="images/home-bg-s2.png" class="high-light-img" />
            <img src="images/home-bi-s2.png" />
        </div>
        
        
        <div class="col-2 border-right" id="home-left">      
            <h2>Grantee News</h2>
            <article>
                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor<br><a href="single-news.php" class="float-right"><img src="images/readmore.png" /></a></p>
            </article>
            <article>
                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor<br><a href="single-news.php" class="float-right"><img src="images/readmore.png" /></a></p>
            </article>
            <article>
                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor<br><a href="single-news.php" class="float-right"><img src="images/readmore.png" /></a></p>
            </article>
        </div><!--end home left -->
        
        <div class="col-2">      
            <h2>JRS News</h2>
            <article>
                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor<br><a href="single-news.php" class="float-right"><img src="images/readmore.png" /></a></p>
            </article>
            <article>
                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor<br><a href="single-news.php" class="float-right"><img src="images/readmore.png" /></a></p>
            </article>
            <article>
                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, sed do eiusmod tempor<br><a href="single-news.php" class="float-right"><img src="images/readmore.png" /></a></p>
            </article>
        </div><!--end main-->

<?php include('includes/footer.php'); ?>