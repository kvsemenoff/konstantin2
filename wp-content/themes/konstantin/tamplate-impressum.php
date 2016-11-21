<?php
/*
 * Template Name: Impressum
 * 
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

<section class="qq-impressum">
	<div class="container">
		<div class="row">				
			<div class="df-firstblock">
					<div class="dfleft">
						<span>Angaben gemäß § 5 TMG:</span>
					</div>
					<div class="dfright">
						<span>Konstantin Wettig</span>
						<span>KW Real Estate</span>
						<span>Weinstrasse 4</span>
						<span>80333 München</span>
						<p>Telefon	+49 (0)89 – 33995540 <br>
						E-Mail	kw@konstantin-wettig.com</p>
					</div>
			</div>
			<div class="df-secondblock">
				<h4>Umsatzsteuer-Identifikationsnummer</h4>
					<div class="dfleft">						
						<span>gemäß §27 a Umsatzsteuergesetz:</span>
						<span class="df-margin">Aufsichtsbehörde:</span>
						<span>Angaben zur Berufshaftpflichtversicherung:</span>
					</div>
					<div class="dfright">
						<span>DE 214455127</span>
						<span  class="df-margin">KVR München</span>
						<span>Name und Sitz der Gesellschaft:</span>
						<span>Allianz Versicherungs AG</span>
						<span>Dieselstraße 8</span>
						<span>85774 Unterföhring</span>
					</div>
			</div>
			<div class="df-thirdblock">
					<div class="dfleft">
						<span>Geltungsraum der Versicherung:</span>
						<span>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</span><br><br>
						<span>Quellenangaben für die verwendeten Bilder & Grafiken:</span>
					</div>
					<div class="dfright">
						<span>Deutschland</span>
						<span>Julia Werner</span>
						<span>Römerstraße 15</span>
						<span>80801 München</span>
						<span>????</span>
					</div>
			</div>
			<h4 class="df-bottomtext">Disclaimer</h4>
			<h4 class="df-bottomtext">Datenschutzerklärung</h4>				
		</div>
		<div class="row qq-main">
			<div class="col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>										
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>