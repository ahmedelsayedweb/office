<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $favicon = ot_get_option( 'favicon' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $linkedin = ot_get_option( 'linkedin' );
	  $call = ot_get_option( 'phone' );
	  $address = ot_get_option( 'address' );
	}
    ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $favicon; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
    <!-- HOME_PAGE SECTION -->
    <section id="home">
        <!-- HEADER_TOP_AREA -->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                        <div class="header_top_left_area">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>(+880)1744-407398</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6  text-right">
                        <div class="header_top_right_area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER_TOP_AREA -->
        <!-- LOGO_MENU_AREA -->
        <div class="logo_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2 text-left">
                        <div class="logo_area">
                            <a href="index.html">
                               <img src="assets/images/logo.png" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10 text-right">
                        <!--START MOBILE MENU-->
                        <div class="mobileMenu_icon">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                        <div class="mobilemenu text-center">
                            <ul>
                                <li class="smooth-menu "><a href="#home">Home</a></li>
                                <li class="smooth-menu "><a href="#about">ABOUT</a></li>
                                <li class="smooth-menu "><a href="#service">SERVICES</a></li>
                                <li class="smooth-menu "><a href="#protfolio">Gallery</a></li>
                                <li class="smooth-menu "><a href="#contact">CONTACT</a></li>
                            </ul>
                        </div>
                        <!--END MOBLIE MENU -->
                        <div class="menu collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="smooth-menu active"><a href="#home">Home</a></li>
                                <li class="smooth-menu"><a href="#about">ABOUT</a></li>
                                <li class="smooth-menu"><a href="#service">SERVICES</a></li>
                                <li class="smooth-menu"><a href="#protfolio">PROTFOLIO</a></li>
                                <li class="smooth-menu "><a href="#contact">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO_MENU_AREA -->
   