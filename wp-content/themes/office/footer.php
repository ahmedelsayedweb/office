<!-- FOOTER-->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_about_footer = ot_get_option( 'title_about_footer' );
	  $description_about_footer = ot_get_option( 'description_about_footer' );
	  $fotter_title = ot_get_option( 'fotter_title' );
	  $instagram = ot_get_option( 'instagram' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $call = ot_get_option( 'phone' );
	  $address = ot_get_option( 'address' );
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
                        <h2><?php echo $title_about_footer; ?></h2>
                    </div>
                    <div class="fotter_content">
                        <?php echo $description_about_footer; ?>
                    </div>
                    <!--FOOTTER ABOUT -->
                </div>
                <div class="col-md-3 col-sm-3 text-left">
                    <!--FOOTTER INFORMATION-->
                    <div class="fotter_title">
                        <h2><?php echo $fotter_title; ?></h2>
                    </div>
                    <div class="fotter_content fotter_address">
							<p>	<?php echo $address; ?></p>
							 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo "<p> البريد الالكتروني :  $email </p>"; 
		}elseif($lang == 'en'){
		echo "<p> E-Mail :  $email </p>"; 
	};
	?>
							 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo "<p> الموبيل  :  $call </p>"; 
		}elseif($lang == 'en'){
		echo "<p> Moblie :  $call </p>"; 
	};
	?>
                    </div>
                </div>
                <!--FOOTTER INFORMATION-->
                <!--FOOTTER LINKS
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
					<?php
			if ( function_exists( 'ot_get_option' ) ) {
				$images = explode( ',', ot_get_option( 'gallery', '' ) );
?>
                <div class="col-md-5 col-sm-5 text-left">
                    <div class="fotter_title">
						 <?php
  	$lang = custom_get_current_lang();
	if($lang == 'ar'){
		 echo ' <h2>معرض الصور </h2>'; 
		}elseif($lang == 'en'){
		echo '  <h2>Gallery</h2>'; 
	};
	?>
                       
                    </div>
                    <div class="fotter_content fotter_content_instagram">
                        <div class="row footer_content_image_row footer_content_image_row_one">
							<?php
								if ( ! empty( $images ) ) {
							foreach( $images as $id ) {
								if ( ! empty( $id ) ) {
							$full_img_src = wp_get_attachment_image_src( $id, 'custom-thumb' );
								  echo '<img src="' . $full_img_src[0] . '">';
								}
							  }
							}	
						}
					?>
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
                        © <?php echo date ('Y'); ?>. All Rights Reserved | Design & Developer by psolvingegypt
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <div class="copy_right_area_social_icons">
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
    <!--copy_right_area -->
        <!--start angle up-->
<?php wp_footer(); ?>
	
</body>	
</html>