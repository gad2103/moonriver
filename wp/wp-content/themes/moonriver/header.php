<?php
$magentoUrl = "http://www.moonriverstore.com";
$magentoUrlSecure = "https://www.moonriverstore.com";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="description" content="Default Description" />
<meta name="keywords" content="Magento, Varien, E-commerce" />
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/msslider/msslider.css" />
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/msslider/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/msslider/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });
    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

var $j = jQuery.noConflict(); 
$j(document).ready(function() {
    $j('#mycarousel').jcarousel({
		vertical: false,
		animation: 2000,
        auto:2,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
});
</script>

<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = '<?php echo $magentoUrl; ?>/js/blank.html';
    var BLANK_IMG = '<?php echo $magentoUrl; ?>/js/spacer.gif';
//]]>
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/css/widgets.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/css/print.css" media="print" />
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/prototype/prototype.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/lib/ccard.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/prototype/validation.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/scriptaculous/builder.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/scriptaculous/controls.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/scriptaculous/slider.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/varien/js.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/varien/form.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/varien/menu.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/mage/translate.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/mage/cookies.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="<?php echo $magentoUrl; ?>/skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/';
Mage.Cookies.domain   = '.www.moonriverstore.com';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["HK","IE","MO","PA"];
//]]>
</script>
<script type="text/javascript">var Translator = new Translate({"Please use only letters (a-z or A-Z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Please use only letters (a-z or A-Z), numbers (0-9) or underscores (_) in this field, first character must be a letter."});</script></head>
<body class=" catalog-category-view categorypath-vintage-objects-html category-vintage-objects">

<!-- BEGIN GOOGLE ANALYTICS CODE -->
<script type="text/javascript">
//<![CDATA[
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
    })();

    var _gaq = _gaq || [];

_gaq.push(['_setAccount', 'UA-25099690-1']);
_gaq.push(['_trackPageview']);


//]]>
</script>
<!-- END GOOGLE ANALYTICS CODE --><div class="wrapper">
        <noscript>
        <div class="noscript">
            <div class="noscript-inner">
                <p><strong>JavaScript seem to be disabled in your browser.</strong></p>
                <p>You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
            </div>
        </div>
    </noscript>
    <div class="page">
        <div class="header-container">
    <div class="header">
                <a href="<?php echo $magentoUrl; ?>/" title="Moon River" class="logo"><strong>Moon River</strong><img src="<?php echo $magentoUrl; ?>/skin/frontend/default/jewelrystore/images/logo.png" alt="Moon River" /></a>
                
        <div class="nav-container">
            
        <ul id="nav">
        <li class="level0 nav-1 level-top first"><a href="http://www.moonriverstore.com/art.html" class="level-top">Art</a></li>
        <li class="level0 nav-2 level-top parent"><a href="http://www.moonriverstore.com/candles-fragrances.html" class="level-top">Candles &amp; Fragrances</a>
            <ul class="level0">
                <li class="level1 nav-2-1 first"><a href="http://www.moonriverstore.com/candles-fragrances/diptyque.html">Diptyque</a></li>
                <li class="level1 nav-2-2"><a href="http://www.moonriverstore.com/candles-fragrances/l-artisan.html">L'artisan</a></li>
                <li class="level1 nav-2-3 last"><a href="http://www.moonriverstore.com/candles-fragrances/niana.html">Niana</a></li>
            </ul>
        </li>
        <li class="level0 nav-3 level-top parent"><a href="http://www.moonriverstore.com/clothing.html" class="level-top">Clothing</a>
            <ul class="level0">
                <li class="level1 nav-3-1 first"><a href="http://www.moonriverstore.com/clothing/fashion-shoes.html">Fashion &amp; Shoes</a></li>
                <li class="level1 nav-3-2"><a href="http://www.moonriverstore.com/clothing/textiles.html">Textiles</a></li>
                <li class="level1 nav-3-3 last"><a href="http://www.moonriverstore.com/clothing/cloths.html">Scarves</a></li>
            </ul>
        </li>
        <li class="level0 nav-4 level-top parent"><a href="http://www.moonriverstore.com/contemporary-crafts-1.html" class="level-top">Contemporary Crafts</a>
            <ul class="level0">
                <li class="level1 nav-4-1 first"><a href="http://www.moonriverstore.com/contemporary-crafts-1/baskets.html">Baskets</a></li>
                <li class="level1 nav-4-2"><a href="http://www.moonriverstore.com/contemporary-crafts-1/wood-lacquer.html">Wood &amp; Lacquer</a></li>
                <li class="level1 nav-4-3"><a href="http://www.moonriverstore.com/contemporary-crafts-1/marble.html">Marble</a></li>
                <li class="level1 nav-4-4 last"><a href="http://www.moonriverstore.com/contemporary-crafts-1/wire.html">Wire &amp; Metal</a></li>
           </ul>
        </li>
        <li class="level0 nav-5 level-top"><a href="http://www.moonriverstore.com/furniture.html" class="level-top">Furniture</a></li>
        <li class="level0 nav-6 level-top parent"><a href="http://www.moonriverstore.com/global-design.html" class="level-top">Global Design</a>
            <ul class="level0">
                <li class="level1 nav-6-1 first"><a href="http://www.moonriverstore.com/global-design/bronze.html">Bronze</a></li>
                <li class="level1 nav-6-2"><a href="http://www.moonriverstore.com/global-design/ceramic-resin.html">Ceramic &amp; Resin</a></li>
                <li class="level1 nav-6-3">
        <a href="http://www.moonriverstore.com/global-design/glass.html">
        <span>Glass</span>
        </a>
        </li><li class="level1 nav-6-4 last">
        <a href="http://www.moonriverstore.com/global-design/others.html">
        <span>Others</span>
        </a>
        </li>
        </ul>
        </li><li class="level0 nav-7 level-top parent">
        <a href="http://www.moonriverstore.com/jewelry.html" class="level-top">
        <span>Jewelry</span>
        </a>
        <ul class="level0">
        <li class="level1 nav-7-1 first">
        <a href="http://www.moonriverstore.com/jewelry/earrings.html">
        <span>Earrings</span>
        </a>
        </li><li class="level1 nav-7-2">
        <a href="http://www.moonriverstore.com/jewelry/bracelets.html">
        <span>Bracelets</span>
        </a>
        </li><li class="level1 nav-7-3 last">
        <a href="http://www.moonriverstore.com/jewelry/necklaces.html">
        <span>Necklaces</span>
        </a>
        </li>
        </ul>
        </li><li class="level0 nav-8 level-top parent">
        <a href="http://www.moonriverstore.com/stationery.html" class="level-top">
        <span>Stationery</span>
        </a>
        <ul class="level0">
        <li class="level1 nav-8-1 first">
        <a href="http://www.moonriverstore.com/stationery/bags.html">
        <span>Bags</span>
        </a>
        </li><li class="level1 nav-8-2">
        <a href="http://www.moonriverstore.com/stationery/books.html">
        <span>Books</span>
        </a>
        </li><li class="level1 nav-8-3">
        <a href="http://www.moonriverstore.com/stationery/mugs.html">
        <span>Mugs </span>
        </a>
        </li><li class="level1 nav-8-4 last">
        <a href="http://www.moonriverstore.com/stationery/note-books.html">
        <span>Note Books</span>
        </a>
        </li>
        </ul>
        </li><li class="level0 nav-9 level-top last parent">
        <a href="http://www.moonriverstore.com/vintage-objects.html" class="level-top">
        <span>Vintage Objects</span>
        </a>
        <ul class="level0">
        <li class="level1 nav-9-1 first">
        <a href="http://www.moonriverstore.com/vintage-objects/indian-vintage.html">
        <span>Indian Vintage</span>
        </a>
        </li><li class="level1 nav-9-2">
        <a href="http://www.moonriverstore.com/vintage-objects/spanish-vintage.html">
        <span>Spanish Vintage</span>
        </a>
        </li><li class="level1 nav-9-3 last">
        <a href="http://www.moonriverstore.com/vintage-objects/japanese-vintage.html">
        <span>Japanese Vintage</span>
        </a>
        </li>
        </ul>
        </li>        <li class=""><a href="http://www.moonriverstore.com/blog/" class="">Blog</a></li>    
        
        </ul>    

    </div>
        </div>
	    <div class="header-welcome-msg"><p class="welcome-msg"></p></div>
    <div class="quick-access">        
        <ul class="links">
                        <li class="first" ><a href="<?php echo $magentoUrlSecure; ?>/customer/account/" title="My Account" >My Account</a></li>
                                <li ><a href="<?php echo $magentoUrlSecure; ?>/wishlist/" title="My Wishlist" >My Wishlist</a></li>
                                <li ><a href="<?php echo $magentoUrl; ?>/checkout/cart/" title="My Cart" class="top-link-cart">My Cart</a></li>
                                <li ><a href="<?php echo $magentoUrl; ?>/checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
                                <li class=" last" ><a href="<?php echo $magentoUrlSecure; ?>/customer/account/login/" title="Log In" >Log In</a></li>
            </ul>
    </div>
        </div>
        <div class="main-container col3-layout">
            <div class="main">                
                <div class="col-wrapper">
					<div class="col-left sidebar">                                       
                                            <?php get_sidebar(); ?>
                                        
                                        </div>
                    <div class="col-main" style="width: 755px;">
