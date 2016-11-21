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
		<div class="row qq-main">

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Angaben gemäß § 5 TMG:</p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>
						Konstantin Wettig <br>
						KW Real Estate <br>
						Weinstrasse 4 <br>
						80333 München <br>
						<span class="qq-contact">
							Telefon	+49 (0)89 – 33995540 <br>
							E-Mail	kw@konstantin-wettig.com 
						</span>
					</p>
				</div>

			<div class="clearfix"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Umsatzsteuer-Identifikationsnummer <br>
					gemäß § 27 a Umsatzsteuergesetz:</p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>DE 214455127</p>
				</div>

			<div class="clearfix"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Aufsichtsbehörde: </p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>KVR München</p>
				</div>

			<div class="clearfix"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Angaben zur Berufshaftpflichtversicherung: </p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>
						Name und Sitz der Gesellschaft: <br>
						Allianz Versicherungs-AG<br>
						10900 Berlin<br>
					</p>
				</div>

			<div class="clearfix"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Geltungsraum der Versicherung:  </p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Deutschland</p>
				</div>

			<div class="clearfix"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:	</p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>
						KW Real Estate<br>
						Weinstr. 4<br>
						80333 München
					</p>
				</div>

			<div class="clearfix"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Quellenangaben für die verwendeten Bilder & Grafiken:  </p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Christine Dempf, iStockphoto, fotolia, shutterstock</p>
				</div>
				<div class="clearfix"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>Gestaltung:  </p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p>dedicated<br>
					Isabelle Iburg<br>
					Schornstraße 8<br>
					81669 München</p>
				</div>
				<div class="clearfix"></div>		
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