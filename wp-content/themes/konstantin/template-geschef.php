<?php 
/*
Template name: GESCHÄFTSPARTNER
*/
?>
<?php get_header(); ?>

<div class="az-header1 az-margin-bottom45">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-5">
                <span class="az-head-span">Geschäfts<span class="az-hidden-xs">-<br></span>partner<br>Ein Auszug</span>
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

<section class="ab-logos">
    <div class="container">
        <div class="ab-logo-box box1">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/BWG.jpg" alt="">
        </div>
        <div class="ab-logo-box box2">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Bergerventure.jpg" alt="">
        </div>
        <div class="ab-logo-box box3">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Binnberg.jpg" alt="">
        </div>
        <div class="ab-logo-box box4">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Projektentwicklu.jpg" alt="">
        </div>
        <div class="ab-logo-box box5">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Combine.jpg" alt="">
        </div>
        <div class="clearfix da-mob"></div>
        <div class="ab-logo-box box6">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Sacher.jpg" alt="">
        </div>
        <div class="ab-logo-box box6-1">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Omega-Gruppe-300x136.jpg" alt="">
        </div>
        <div class="ab-logo-box box7">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Hilmer.jpg" alt="">
        </div>
        <div class="clearfix da-mob"></div>
        <div class="ab-logo-box box8">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Grundkontor.jpg" alt="">
        </div>
        <div class="ab-logo-box box9">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/DonnerReuschel.jpg" alt="">
        </div>
        <div class="ab-logo-box box10">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Estate.jpg" alt="">
        </div>
        <div class="ab-logo-box box11">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Heussen.jpg" alt="">
        </div>
        <div class="clearfix"></div>


        <div class="ab-logo-box box12">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Hirmer.jpg" alt="">
        </div>
        <div class="ab-logo-box box13">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Kefer.jpg" alt="">
        </div>
        <div class="ab-logo-box box14">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Nachmann.jpg" alt="">
        </div>
        <div class="ab-logo-box box15">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Oliv.jpg" alt="">
        </div>
        <div class="clearfix"></div>


        <div class="ab-logo-box box16">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Gebhard.jpg" alt="">
        </div>
         <div class="ab-logo-box box22">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/res-logo_4c_webseite.png" alt="">
        </div>
        <div class="ab-logo-box box17">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/kkconsulting.jpg" alt="">
        </div>
        <div class="clearfix"></div>

        <div class="ab-logo-box box18">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Schoeller.jpg" alt="">
        </div>
        <div class="ab-logo-box box19">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Immobilien.jpg" alt="">
        </div>
        <div class="ab-logo-box box20">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/DPDHL.jpg" alt="">
        </div>
        <div class="ab-logo-box box21">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Dr-Than.jpg" alt="">
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<?php get_footer(); ?>