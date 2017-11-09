<?php get_header(); ?>
        <!-- SLIDER_AREA -->
        <div class="slider_area">
            <div id="homepage-slider-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators homepage-slider-carousel-indicators">
                    <li data-target="#homepage-slider-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#homepage-slider-carousel" data-slide-to="1"></li>
                    <li data-target="#homepage-slider-carousel" data-slide-to="2"></li>
                    <li data-target="#homepage-slider-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
					<?php 
		if ( function_exists( 'ot_get_option' ) ) {			
		  $slides = ot_get_option( 'banner', array() );	
		  if ( ! empty( $slides ) ) {
			foreach( $slides as $slide ) {
				$class = '';
								if ($i++ == 0){
									$class = ' active ';
								}
			  echo '
			  
			  <div class="item '. $class .'">
                        <div class="slider_area_bg">
                            <img src="' . $slide['image'] . '" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="silder_content_area">
                                        <h2>' . $slide['title'] . '</h2>
                                        ' . $slide['description'] . '
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> ';
			}
		  }
		}	
	  ?>	
                   
                    <!-- SINGLE_SLIDER_AREA -->
                </div>
                <a class="left homepage-slider-control" href="#homepage-slider-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right homepage-slider-control" href="#homepage-slider-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- SLIDER_AREA -->
    </section>
    <!-- HOME_PAGE SECTION -->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_about = ot_get_option( 'title_about' );
	  $description_about = ot_get_option( 'description_about' );
	}
    ?>
    <!--ABOUT_US_FIRST_AREA -->
    <section id="about" class="area">
        <div class="container">
            <!--SECTION_TITLE_AREA -->
            <div class="row section_title_area text-center">
                <div class="col-md-12 col-sm-12 text-left">
                    <h2><?php echo $title_about; ?></h2>
                </div>
            </div>
            <!--SECTION_TITLE_AREA -->
            <!--SECTION_CONTENT_AREA -->
            <div class="row section_content_area text-center">
                <!-- ABOUT_US_FIRST_LEFT_PARAGRAPHS-->
                <div class="section_content_area_items text-left about_us_first_area_left_paragraph">
					<?php echo $description_about; ?>
                </div>
                <!-- ABOUT_US_FIRST_LEFT_PARAGRAPHS-->
                <!-- ABOUT_US_FIRST_RIGHT_AREA
                <div class="col-md-6 col-sm-12 about_us_first_area_right_paragraph  section_content_area_items text-left ">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default active">
                            <div class="panel-heading ">
                                <h2 class="panel-title ">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									  <i class="fa fa-caret-right"></i> 
									  why with us
									</a>
								  </h2>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 w raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								  <i class="fa fa-caret-right"></i> 
								 our mission
								</a>
							  </h2>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 w raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									  <i class="fa fa-caret-right"></i> 
									  our vission
									</a>
                               </h2>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 w raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ABOUT_US_FIRST_RIGHT_AREA-->
            </div>
            <!--SECTION_CONTENT_AREA -->
        </div>
    </section>
    <!--ABOUT_US_FIRST_AREA -->
    <!--SERVICES_FIRST_AREA -->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $title_service = ot_get_option( 'title_service' );
	  $description_service = ot_get_option( 'description_service' );
	  $content_service_1 = ot_get_option( 'content_service_1' );
	  $content_service_2 = ot_get_option( 'content_service_2' );
	  $content_service_3 = ot_get_option( 'content_service_3' );
	  $content_service_4 = ot_get_option( 'content_service_4' );
	}
    ?>
    <section id="service" class=" background_color_area area">
        <div class="container">
            <!--SECTION_TITLE_AREA -->
            <div class="row section_title_area2">
                <div class="col-md-12 col-sm-12 text-left">
                    <h2><?php echo $title_service; ?></h2>
					<?php echo $description_service; ?>
                </div>
            </div>
            <!--SECTION_TITLE_AREA -->
            <!--SECTION_CONTENT_AREA -->
            <div class="row section_content_area  services_section_content_area">
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
                <div class="col-sm-6 section_content_area_items2 text-left">
                    <div class="single_service_area">
                        <div class="section_content_icons">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <?php echo $content_service_1; ?>
                    </div>
                </div>
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
                <div class="col-sm-6 section_content_area_items2 text-left">
                    <div class="single_service_area">
                        <div class="section_content_icons">
                            <i class="fa fa-coffee" aria-hidden="true"></i>
                        </div>
                        <?php echo $content_service_2; ?>
                    </div>
                </div>
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
                <div class="col-sm-6 section_content_area_items2 text-left">
                    <div class="single_service_area">
                        <div class="section_content_icons">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                       <?php echo $content_service_3; ?>
                    </div>
                </div>
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
                <div class="col-sm-6 section_content_area_items2 text-left">
                    <div class="single_service_area">
                        <div class="section_content_icons">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <?php echo $content_service_4; ?>
                    </div>
                </div>
                <!--SERVICES_FIRST_SINGLE_SERVICE_AREA -->
            </div>
            <!--SECTION_CONTENT_AREA -->
        </div>
    </section>
    <!--SERVICES_FIRST_AREA -->
    <section id="protfolio" class=" background_color_area area">
        <div class="container">
            <!--SECTION_TITLE_AREA -->
            <div class="row section_title_area2">
                <div class="col-md-12 col-sm-12 text-left">
                    <h2>Gallery</h2>
                </div>
            </div>
            <!--SECTION_TITLE_AREA -->
            <!--SECTION_CONTENT_AREA -->
            <div class="row section_content_area  services_section_content_area">
                <!--PROTFOLIO -->
                <div class="page_content wow fadeInUp" style="visibility: visible; animation-delay: 0.01s; animation-name: fadeInUp; ">
                    <div id="portfolio">
                        	<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo do_shortcode('[print_gllr id=23]'); 
						}elseif($lang == 'en'){
						echo do_shortcode('[print_gllr id=23]'); 
					};
				  	?> 
                    </div>
                </div>
                <!--PROTFOLIO -->
            </div>
            <!--SECTION_CONTENT_AREA -->
        </div>
    </section>
    <!--SERVICES_FIRST_AREA -->
    <!--CONTACT_US_FIRST_AREA -->
    <section id="contact" class="background_color_area area">
        <div class="container">
            <!--SECTION_TITLE_AREA -->
            <div class="row section_title_area2">
                <div class="col-md-12 col-sm-12 text-left">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <!--SECTION_TITLE_AREA -->
            <!--SECTION_CONTENT_AREA -->
            <div class="row section_content_area">
                <div class="col-md-6 col-sm-12 section_content_area_items2">
                    <div class="google_map  ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.221623321529!2d31.285383084886593!3d29.97306018190839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDU4JzIzLjAiTiAzMcKwMTYnNTkuNSJF!5e0!3m2!1sar!2seg!4v1510216616814" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6  col-sm-12 section_content_area_items2">
                    <div class="contact_form_area">
							<?php
				  $lang = custom_get_current_lang();
    				if($lang == 'ar'){
						 echo do_shortcode('[contact-form-7 id="31" title="Contact ar"]'); 
						}elseif($lang == 'en'){
						echo do_shortcode('[contact-form-7 id="30" title="Contact en"]'); 
					};
				  	?> 
                        
                    </div>
                </div>
            </div>
            <!--SECTION_CONTENT_AREA -->
        </div>
    </section>
<?php get_footer(); ?>