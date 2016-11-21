<?php 
/*
Template name: KonstantinWettig
*/
?>
<?php get_header(); ?>
<div class="az-header1 az-margin-bottom45">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-5">
                <span class="az-head-span az-head-span_style">Konstantin Wettig<br>Immobilienscout</span>
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

<section class="ah-res">
    <div class="container">
	    <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
			    <?php while ( have_posts() ) : the_post(); ?>
			 	<?php the_content(); ?>
			 	<?php endwhile; ?>	
		    </div>
	    </div>
    </div>
</section>

<div class="clearfix"></div>


<?php get_footer(); ?>