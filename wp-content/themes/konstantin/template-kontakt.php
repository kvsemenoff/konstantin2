<?php
/*
 * Template Name: Kontakt
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


<div class="container">
	<div class="row">		
			<div class="zk_kontakt">
				<div class="col-md-6">
					<div class="zk_form_all">
						<!-- <ul>
							<li class="zk_first_li">KW Real Estate</li>
							<li>Weinstrasse 4</li>
							<li>80333 München</li>
							<li class="zk_br">Frau Maria Iskudi</li>
							<li>Assistentin des Geschäftsführers</li>
							<li>Telefon	+49 (0)89 – 33 99 55 40</li>
							<li>E-Mail	mi@konstantin-wettig.com</li>
						</ul> -->
						<!-- <div class="dfblock">
							<strong class="zk_first_li">KW Real Estate</strong>
							<p>Weinstrasse 4</p>
							<p>80333 München</p>
							<p class="zk_br">Frau Maria Iskudi</p>
							<p>Assistentin des Geschäftsführers</p>
							<p>Telefon	+49 (0)89 – 33 99 55 40</p>
							<p>E-Mail	mi@konstantin-wettig.com</p>
						</div> -->

						<div class="dfblock">
							<?php // echo get_the_content(); ?>
							<?php echo get_field('knt_topcpt_plh'); ?>
						</div>

						<div class="zk_form">						

						<h3 class="zk_first_li translatable"><?php echo get_field('knt_form_cpt'); ?></h3>
							<form action="mail.php" name="feedback" method="post" class="zk_form">
								<input class="translatable" type="text" name="name" id="feedback_name" placeholder="<?php echo get_field('knt_name_plh'); ?>" /><br/>
								<input class="translatable" type="text" name="email" id="feedback_email" placeholder="<?php echo get_field('knt_email_plh'); ?>" /><br/>
								<input class="translatable" type="text" name="phone" placeholder="<?php echo get_field('knt_phone_plh'); ?>" /><br/>
								<textarea class="translatable" name="message" cols="" rows="5" placeholder="<?php echo get_field('knt_msg_plh'); ?>"></textarea>
								<div id="zk_form"><input class="translatable" type="button" value="<?php echo get_field('knt_sendcpt_plh'); ?>" onclick="verify_fields();"></div>
								<div class="Error_filling translatable"><?php echo get_field('knt_errmsg_plh'); ?></div>
							</form>
							
<script>
function verify_fields(){
	var 
		name = document.getElementById("feedback_name"),
		email = document.getElementById("feedback_email");
	if((name.value == "") || (email.value == "")) 
	{
		document.getElementsByClassName("Error_filling")[0].style.display = "block";
		if(name.value == "")
		{
			name.style = "border-color: #f9bbb8;\
							border-width: 1px; \
							background: #ffe5e3;"
		}
		else
		{
			name.style = "border-width: 2px;\
						border-style: inset;\
						border-color: initial;\
						background: #fff;"
		}
		if(email.value == "")
		{
			email.style = "border-color: #f9bbb8;\
							border-width: 1px; \
							background: #ffe5e3;"
		}
		else
		{
			email.style = "border-width: 2px;\
						border-style: inset;\
						border-color: initial;\
						background: #fff;"
		}
	}
	else document.getElementsByName("feedback")[0].submit();
}
</script>								
						</div>					
					</div>
				</div>
				<div class="col-md-6">
					<div class="zk_map">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zk_map.jpg" alt="">		
					</div>
				</div>		
				<div class="clear"></div>	
			</div>
		
	</div>
</div>

<?php get_footer(); ?>