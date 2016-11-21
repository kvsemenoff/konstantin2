<?php 
/*
Template name: WERTE
*/
?>
<?php get_header(); ?>

	<div class="az-header1 az-margin-bottom45">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-5 col-xs-5">
	                <span class="az-head-span"><?php the_title(); ?></span>
	            </div>
	            <div class="col-md-2 col-xs-2 az-center">
	                <a href="/" class="az-close az-close_style az-close_style2"></a>
	            </div>
	            <div class="col-md-5 col-xs-5">
	                <div class="anz-menu">
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
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<section class="qq-werte">
		<div class="container">
			<div class="row qq-main">
				<div class="col-xs-12">
					<div class="qq-img-box-a">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="qq-txt_box qq-txt_box1 qq-t1">
						<h3><?php echo get_field('individuality_title'); ?></h3>
						<p>
							<?php echo get_field('individuality'); ?>
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="qq-txt_box qq-txt_box2 qq-t2">
						<h3><?php echo get_field('intensity_title'); ?></h3>
						<p>
							<?php echo get_field('intensity'); ?>
						</p>
					</div>
				</div>
			</div>
			<div class="row qq-main_two">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="qq-txt_box qq-txt_box3 qq-t3a">
						<h3><?php echo get_field('trust_title'); ?></h3>
						<p>
							<?php echo get_field('trust'); ?>
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="qq-img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="qq-txt_box qq-txt_box4 qq-t3">
						<h3><?php echo get_field('passion_title'); ?></h3>
						<p>
							<?php echo get_field('passion'); ?>
						</p>
					</div>
				</div>
			</div>
			<div class="row main_free">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="qq-txt_box qq-txt_box5 qq-t4">
						<h3><?php echo get_field('discretion_title'); ?></h3>
						<p>
							<?php echo get_field('discretion'); ?>
						</p>
					</div>
				</div>
			</div>
			
		</div>
	</section>


<?php get_footer(); ?>