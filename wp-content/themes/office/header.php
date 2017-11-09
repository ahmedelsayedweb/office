<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $call = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
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
		<link rel="shortcut icon" type="image/ico" href="<?php echo $logo; ?>" />
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
                            <p><?php echo $call; ?></p>
                        </div>
						<div class="header_top_left_area">
                            <i class="fa fa fa-envelope-o"></i>
                            <p><?php echo $email; ?></p>
                        </div>
						 <?php
					if(is_active_sidebar('header')){
					dynamic_sidebar('header');
					}
					?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6  text-right">
                        <div class="header_top_right_area">
                            <ul>
                                <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
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
                            <a href="<?php bloginfo('url'); ?>">
                               <img src="<?php echo $logo; ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10 text-right">
                        <!--START MOBILE MENU-->
                        <div class="mobileMenu_icon">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                        <div class="mobilemenu text-center">
							 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<ul>
                                <li class="smooth-menu "><a href="#home">الرئيسية</a></li>
                                <li class="smooth-menu "><a href="#about">من نحن</a></li>
                                <li class="smooth-menu "><a href="#service">الخدمات</a></li>
                                <li class="smooth-menu "><a href="#protfolio">معرض الصور</a></li>
                                <li class="smooth-menu "><a href="#contact">اتصل بنا</a></li>
                            </ul>'; 
		}elseif($lang == 'en'){
		echo ' <ul>
                                <li class="smooth-menu "><a href="#home">Home</a></li>
                                <li class="smooth-menu "><a href="#about">ABOUT US</a></li>
                                <li class="smooth-menu "><a href="#service">SERVICES</a></li>
                                <li class="smooth-menu "><a href="#protfolio">Gallery</a></li>
                                <li class="smooth-menu "><a href="#contact">CONTACT US</a></li>
                            </ul>'; 
	};
	?>
                        </div>
                        <div class="menu collapse navbar-collapse navbar-right">
	 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo '<ul class="nav navbar-nav">
                                <li class="smooth-menu active"><a href="#home">الرئيسية</a></li>
                                <li class="smooth-menu "><a href="#about">من نحن</a></li>
                                <li class="smooth-menu "><a href="#service">الخدمات</a></li>
                                <li class="smooth-menu "><a href="#protfolio">معرض الصور</a></li>
                                <li class="smooth-menu "><a href="#contact">اتصل بنا</a></li>
                            </ul>'; 
		}elseif($lang == 'en'){
		echo ' <ul class="nav navbar-nav">
                                <li class="smooth-menu active"><a href="#home">Home</a></li>
                                <li class="smooth-menu "><a href="#about">ABOUT US</a></li>
                                <li class="smooth-menu "><a href="#service">SERVICES</a></li>
                                <li class="smooth-menu "><a href="#protfolio">Gallery</a></li>
                                <li class="smooth-menu "><a href="#contact">CONTACT US</a></li>
                            </ul>'; 
	};
	?>
                           
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO_MENU_AREA -->
   