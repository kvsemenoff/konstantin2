<?php get_header(); ?>
<section class="az-content">
	<div class="az-header1 az-margin-bottom20">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <span class="az-logobox">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
                </span>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="anz-menu az-margin-bottom45">
                   

                    <?php $currentLang = qtrans_getLanguage(); ?>
                    <?php if(trim($currentLang) == 'de'){ ?>
    					<a class="change-lang hidden-xs" href="/en/">English Version <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    				<?php } ?>
    				<?php if(trim($currentLang) == 'en'){ ?>
				   		<a class="change-lang hidden-xs" href="/de/">Deutsche Version <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				   	<?php } ?>

                    <input type="checkbox" id="check_1" class=""/>
                    <label class="anz-menu-ch" for="check_1"></label>
                    <div class="anz-perspective">
                        <div class="menu-list-pressed">
                            <label class="anz-menu-ch1" for="check_1"></label>
                            <?php
					            $args = array(
					            'theme_location'  => '',
					            'menu'            => 'Main Menu', 
					            'container'       => false, 
					            'container_class' => '', 
					            'container_id'    => '',
					            'menu_class'      => 'menu', 
					            'menu_id'         => '',
					            'echo'            => true,
					            'fallback_cb'     => 'wp_page_menu',
					            'before'          => '',
					            'after'           => '',
					            'link_before'     => '',
					            'link_after'      => '',
					            'items_wrap'      => '<ul class="main-menu">%3$s</ul>',
					            'depth'           => 0
					        );
					        wp_nav_menu($args ); 
					        ?>

                        </div>
                    </div>
                    <div class="chng-lng hidden-lg hidden-md hidden-sm">
                    <?php $currentLang = qtrans_getLanguage(); ?>
                    <?php if(trim($currentLang) == 'de'){ ?>
    					<a class="change-lang-xs" href="/en/">English Version <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    				<?php } ?>
    				<?php if(trim($currentLang) == 'en'){ ?>
				   		<a class="change-lang-xs" href="/de/">Deutsche Version <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				   	<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ah-slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ah-sbox1" id="ah-sbox1">
					
				<?php 
					$args = array("post_type" => 'slider', 'order' => 'ASC',); 
					$query = new WP_Query($args); 
					//d($query->posts,"post_type = slider",0); 
					while ($query->have_posts())
					{
						$query->the_post();	
						$img1 = get_field("sl_img"); 
						//d($img1,"img1",1); 
						$img1 = $img1['url']; 

						$id = get_the_ID(); 
						switch ($id) { 
						 	case 41:  $slbox_class = ""; $slboxi_class = "slidetextbox-span1_style"; break; 
						 	case 43:  $slbox_class = "slidetextbox-2"; $slboxi_class = "slidetextbox-span2"; break; 
						 	case 45:  $slbox_class = "slidetextbox-3"; $slboxi_class = "slidetextbox-span2"; break; 
						 	default:  $slbox_class = ""; $slboxi_class = ""; 
						}
					?>
					<div class="item">
						<div>
							<div class="ab-img-box">
								<img src="<?php echo $img1; ?>">
							</div>
							<div class="slidetextbox-outer">
								<div class="slidetextbox <?php echo $slbox_class; ?>">
									<span class="slidetextbox-span1 <?php echo $slboxi_class; ?>">
										<?php echo get_the_content(); ?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<?php 
					} wp_reset_postdata(); 
				?>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<script>

	var owl = $("#ah-sbox1"); 
	owl.on( 'initialized.owl.carousel', function(e) {
		// alert(e.item.index);
		$('.az-arrowright').html('<i class="fa fa-angle-right" aria-hidden="true"></i>')
        $('.az-arrowleft').html('<i class="fa fa-angle-left" aria-hidden="true"></i>')
        if(e.page.index == 1 || e.page.index == 2){
        	$('.owl-dot').addClass('white-dot');
        	$('.az-arrowleft').addClass('white-left');
        	$('.az-arrowright').addClass('white-right');
        }
    	else if(e.page.index == 0){
    		$('.owl-dot').removeClass('white-dot');
    		$('.az-arrowleft').removeClass('white-left');
        	$('.az-arrowright').removeClass('white-right');
    	}
    });
    owl.on( 'translated.owl.carousel', function(e) {
		// alert(e.page.index);
        if(e.page.index == 1 || e.page.index == 2){
        	$('.owl-dot').addClass('white-dot');
        	$('.az-arrowleft').addClass('white-left');
        	$('.az-arrowright').addClass('white-right');
        }
    	else if(e.page.index == 0){
    		$('.owl-dot').removeClass('white-dot');
    		$('.az-arrowleft').removeClass('white-left');
        	$('.az-arrowright').removeClass('white-right');
    	}
    });
	owl.owlCarousel({
		lazyLoad: true,
	    loop: true,
	    margin:0,
	    items: 1,
	    autoplay: true,
	    smartSpeed:500,
	    autoplayTimeout:7000,
	    nav: true,
	    navText:['<span class="az-arrowleft"></span>','<span class="az-arrowright"></span>']
	});
	

	var owl2 = $(".owl-example");
	owl2.owlCarousel({
		items : 2,
		autoPlay: 1000
	});
	owl2.on("mousewheel", ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev");
		} else {
			owl.trigger("owl.next");
		}
		e.preventDefault();
	});
	$(".next_button").click(function(){
		console.log("next");
		owl.trigger("owl.next"); 
	});
	$(".prev_button").click(function(){
		console.log("prev"); 
		owl.trigger("owl.prev"); 
	});

</script>


	<div class="az-buffer"></div>
</section>
<section class="az-footer">
	
<section class="footer">
	<div class="container">
		<div class="row">
			
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="/?page_id=6">
					<div class="ab-main-img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/art-1.png" alt="">
						<div class="ab-box-txt">
							<span>Konstantin Wettig</span>
							<span class="ab-box-txt-span">Immobilienscout</span>
						</div>
						<div class="ab-str"></div>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="/?page_id=4">
					<div class="ab-main-img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/art-2.png" alt="">
						<div class="ab-box-txt">
							<span>Leistungen</span>
						</div>
						<div class="ab-str"></div>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="/?page_id=9">
					<div class="ab-main-img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/art-3.png" alt="">
						<div class="ab-box-txt">
							<span>Geschäftspartner</span>
						</div>
						<div class="ab-str"></div>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="/?page_id=12">
					<div class="ab-main-img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/art-4.png" alt="">
						<div class="ab-box-txt">
							<span>Transaktions-<br>volumen</span>
						</div>
						<div class="ab-str"></div>
					</div>
				</a>
			</div>

			<div class="clearfix"></div>
			
			<div class="col-md-12">
				
				<?php
	                $args = array(
	                'theme_location'  => '',
	                'menu'            => 'Footer Menu', 
	                'container'       => false, 
	                'container_class' => '', 
	                'container_id'    => '',
	                'menu_class'      => 'menu', 
	                'menu_id'         => '',
	                'echo'            => true,
	                'fallback_cb'     => 'wp_page_menu',
	                'before'          => '',
	                'after'           => '',
	                'link_before'     => '',
	                'link_after'      => '',
	                'items_wrap'      => '<ul class="ab-footer-menu">%3$s</ul>',
	                'depth'           => 0
	            );
	            wp_nav_menu($args ); 
	            ?>
			</div>
		</div>
	</div>
</section>
</section>
<?php get_footer(); ?>

