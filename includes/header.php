<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width" />
    <title>JRS Biodivesity Foundation</title>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
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
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>

    <script type="text/javascript" src="js/accordion.js"></script>
    <script type="text/javascript">   
        //<!-- NEVO SLIDER -->
            <!--//--><![CDATA[//><!--
            $("html").addClass("js");
            $.fn.accordion.defaults.container = false; 
            $(function() {
              $("#acc3").accordion({initShow: "#current"});
              $("#acc1").accordion({
                  el: ".h", 
                  head: "h4, h5", 
                  next: "div", 
                  initShow : "div.outer:eq(1)"
              });
              $("#acc2").accordion({
                  obj: "div", 
                  wrapper: "div", 
                  el: ".h", 
                  head: "h4, h5", 
                  next: "div", 
                  showMethod: "slideFadeDown",
                  hideMethod: "slideFadeUp",
                  initShow : "div.shown",
                  elToWrap: "sup, img"
                });
              $("html").removeClass("js");
            });
            //--><!]]>
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#gallery a img').fadeIn(function() {
                var $this = $(this);
                $this.next('.description').append($this.attr('alt'));
            });
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
            <div id="bread-crumb"><p>Breadcrumb / Breadcrumbs</p></div>
        </div><!--end header-->