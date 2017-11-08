<!-- FOOTER-->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $description_footer = ot_get_option( 'description_footer' );
	  $favicon = ot_get_option( 'favicon' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $google = ot_get_option( 'google' );
	  $address = ot_get_option( 'address' );
	  $phone = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	  $gallerytext = ot_get_option( 'gallerytext' );
	}
    ?>
    <div class="footter_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 text-left">
                    <!--FOOTTER ABOUT-->
                    <div class="fotter_title">
                        <h2>ABOUT OUR COMPANY</h2>
                    </div>
                    <div class="fotter_content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing e lit. Aenean commodo ligula egetdolor. Aenean massa Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donecquam felis.</p>
                    </div>
                    <!--FOOTTER ABOUT -->
                </div>
                <div class="col-md-3 col-sm-3 text-left">
                    <!--FOOTTER INFORMATION-->
                    <div class="fotter_title">
                        <h2>OUR INFORMATION</h2>
                    </div>
                    <div class="fotter_content fotter_address">
                        <p>10, Mc Donald Avenue, Sunset Park,
                            <p>Brooklyn, Newyork</p>
                            <p>Gmail:1992fac@gmail.co</p>
                            <p>Moblie:(+880)174-407398 </p>
                    </div>
                </div>
                <!--FOOTTER INFORMATION-->
                <!--FOOTTER LINKS-->
                <div class="col-md-2 col-sm-2 text-left">
                    <div class="fotter_title">
                        <h2>QUICK LINKS</h2>
                    </div>
                    <div class="fotter_content">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">PROTFOLIO</a></li>
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <!--FOOTTER LINKS-->
                <!--FOOTTER IMAGE-->
                <div class="col-md-3 col-sm-3 text-left">
                    <div class="fotter_title">
                        <h2>ISTRAGRAM</h2>
                    </div>
                    <div class="fotter_content fotter_content_instagram">
                        <div class="row footer_content_image_row footer_content_image_row_one">
                            <img src="assets/images/instragram1.jpg" alt="">
                            <img src="assets/images/instragram2.jpg" alt="">
                            <img src="assets/images/instragram3.jpg" alt="">
                            <img src="assets/images/instragram4.jpg" alt="">
                        </div>
                        <div class="row footer_content_image_row ">
                            <img src="assets/images/instragram5.jpg" alt="">
                            <img src="assets/images/instragram6.jpg" alt="">
                            <img src="assets/images/instragram7.jpg" alt="">
                            <img src="assets/images/instragram8.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!--FOOTTER IMAGE-->
            </div>
        </div>
    </div>
    <!--FOOTTER -->
    <!--copy_right_area -->
    <div class="copy_right_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6  text-left">
                    <p>
                        © <?php echo date ('Y'); ?>. All Rights Reserved | Design & Developer by <?php bloginfo('name'); ?>
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <div class="copy_right_area_social_icons">
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
    <!--copy_right_area -->
        <!--start angle up-->
<?php wp_footer(); ?>
	
</body>	
</html>