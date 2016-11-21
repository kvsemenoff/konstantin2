<?php 
/*
Template name: presse
*/
?>

<?php get_header(); ?>

<div class="az-header1 az-margin-bottom45">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-5">
                <span class="az-head-span az-head-span_style">Presse<br>Auszüge</span>
            </div>
            <div class="col-md-2 col-xs-2 az-center">
                <a href="/" class="az-close az-close_style"></a>
            </div>
            <div class="col-md-5 col-xs-5">
                <div class="anz-menu">
                    <input type="checkbox" id="check_1" class=""/>
                    <label class="anz-menu-ch anz-menu-ch_style" for="check_1"></label>
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
	
<div class="clearfix"></div>

<section class="ah-resse">
    <div class="container">
	    <div class="row">
		    
		<?php
		$args = array("post_type" => 'presse'); 
		$query = new WP_Query($args); 
		//d($query,"post_type = ",1); 
		while ($query->have_posts())
		{
			$query->the_post();	
		?>		
		<div class="col-md-12 col-sm-12 col-xs-12">		 
   		   <a href="<?php echo get_field('pr_link'); ?>" target="_blank">
			    <div class="ah-ressewrap">
					<span class="ah-resse-title"><?php echo get_the_title(); ?></span>
					<span class="ah-resse-text"><?php echo get_the_content(); ?></span>
					<div class="ah-imgbox">
						<div class="cube">
							<div class="side">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ah-arrow.png" class="ah-ani" alt="ah-arrow">
							</div>
						</div>
					</div>
				</div>
			</a>
	    </div>
	    <div class="clearfix"></div>
		<?php
			//die();
		}
	      	wp_reset_postdata(); 
	    ?>
					  
	    </div>
    </div>
    <div class="clearfix"></div>
</section>

 <div class="clearfix"></div>

<?php get_footer(); ?>