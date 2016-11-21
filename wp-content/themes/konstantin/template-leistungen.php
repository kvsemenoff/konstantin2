<?php 
/*
Template name: Leistungen 
*/
?>
<?php get_header(); ?>

	<section class="az-content az-leistungen-content">
		<div class="az-header1 az-margin-bottom45">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-5">
                <span class="az-head-span az-head-span_style"><?php the_title(); ?></span>
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
<!-- <div class="az-radar-arrow">
	<div class="az-radar-arrow-inner"></div>
</div> -->
<div class="az-fixed" style="position: fixed; top: 10px; left: 10px; z-index: 200; background: #000; color: #fff; font-size: 20px;"></div>
<div class="az-radar-elems">
	<div class="az-radar-arrow">
		<div class="az-radar-arrow-inner"></div>
	</div>
	
	<div class="az-pos3">
		<div class="az-radar-elem-item">Family Offices</div>
	</div>
	<div class="az-pos4">
		<div class="az-radar-elem-item">Architekten</div>
	</div>
	<div class="az-pos5">
		<div class="az-radar-elem-item">Private Immobilieneigentümer</div>
	</div>
	<div class="az-pos6">
		<div class="az-radar-elem-item">Projektentwickler</div>
	</div>
	<div class="az-pos7">
		<div class="az-radar-elem-item">Erbengemeinschaften</div>
	</div>
	<div class="az-pos8">
		<div class="az-radar-elem-item">Privatinvestoren</div>
	</div>
	<div class="az-pos9">
		<div class="az-radar-elem-item">Kanzleien</div>
	</div>
	<div class="az-pos10">
		<div class="az-radar-elem-item">Privatisierung von Wohnraum</div>
	</div>
	<div class="az-pos11">
		<div class="az-radar-elem-item">Mezzaninkapitalgeber</div>
	</div>
	<div class="az-pos12">
		<div class="az-radar-elem-item">Bauträger</div>
	</div>
	<div class="az-pos13">
		<div class="az-radar-elem-item">Städteplaner</div>
	</div>
	<div class="az-pos28">
		<div class="az-radar-logo">
			<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="69.85mm" height="43.0388mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
				viewBox="0 0 6985 4304"
				 xmlns:xlink="http://www.w3.org/1999/xlink">
				 <defs>
				  <style type="text/css">

				   <![CDATA[
				    .fil1 {fill:#fff;fill-rule:nonzero}
				    .fil0 {fill:#fff;fill-rule:nonzero}
				   ]]>
				  </style>
				 </defs>
				 <g id="Layer_x0020_1">
				  <metadata id="CorelCorpID_0Corel-Layer"/>
				  <polygon class="fil0" points="1864,22 2150,22 3014,2286 3093,2286 3948,22 4234,22 4234,-23 3548,-23 3548,22 3894,22 3198,1864 2493,22 2846,22 2846,-23 1864,-23 "/>
				  <polygon class="fil0" points="2754,22 3040,22 3904,2286 3983,2286 4838,22 5124,22 5124,-23 4438,-23 4438,22 4784,22 4088,1864 3383,22 3736,22 3736,-23 2754,-23 "/>
				  <polygon class="fil1" points="0,3257 33,3257 33,3411 36,3411 205,3257 250,3257 73,3417 260,3607 213,3607 36,3426 33,3426 33,3607 0,3607 "/>
				  <path class="fil1" d="M435 3432c0,22 4,42 10,61 7,19 17,35 30,49 13,14 29,25 47,32 18,8 39,12 61,12 23,0 44,-4 62,-12 18,-7 34,-18 46,-32 13,-14 23,-30 30,-49 7,-19 10,-39 10,-61 0,-22 -3,-42 -10,-61 -7,-18 -17,-35 -30,-48 -12,-14 -28,-25 -46,-33 -18,-8 -39,-12 -62,-12 -22,0 -43,4 -61,12 -18,8 -34,19 -47,33 -13,13 -23,30 -30,48 -6,19 -10,39 -10,61zm-32 0c0,-26 4,-51 13,-73 9,-23 21,-42 37,-58 16,-17 35,-29 57,-39 22,-9 47,-14 73,-14 27,0 51,5 74,14 22,10 41,22 57,39 15,16 28,35 37,58 9,22 13,47 13,73 0,27 -4,52 -13,74 -9,23 -22,42 -37,58 -16,17 -35,29 -57,38 -23,9 -47,14 -74,14 -26,0 -51,-5 -73,-14 -22,-9 -41,-21 -57,-38 -16,-16 -28,-35 -37,-58 -9,-22 -13,-47 -13,-74z"/>
				  <polygon class="fil1" points="961,3257 1003,3257 1215,3564 1216,3564 1216,3257 1249,3257 1249,3607 1207,3607 994,3301 993,3301 993,3607 961,3607 "/>
				  <path class="fil1" d="M1478 3542c8,15 19,26 33,33 14,8 29,11 47,11 11,0 21,-1 30,-5 10,-3 18,-8 25,-13 7,-6 13,-14 17,-22 4,-8 6,-18 6,-28 0,-12 -2,-23 -7,-30 -6,-8 -12,-15 -21,-20 -8,-5 -18,-9 -29,-13 -10,-4 -22,-7 -33,-11 -11,-4 -22,-8 -33,-12 -11,-5 -20,-11 -29,-18 -8,-8 -15,-17 -20,-28 -5,-11 -8,-25 -8,-42 0,-15 3,-29 9,-41 6,-12 14,-22 25,-30 10,-8 22,-14 36,-18 13,-4 27,-7 42,-7 19,0 37,4 53,11 17,6 31,18 42,33l-28 21c-8,-12 -18,-20 -29,-26 -11,-6 -24,-9 -39,-9 -10,0 -20,2 -30,4 -10,3 -18,7 -25,13 -7,5 -13,12 -17,20 -4,8 -6,18 -6,29 0,18 4,31 13,41 9,9 20,16 33,22 14,5 28,10 44,14 15,4 30,10 43,17 14,7 25,16 34,29 8,12 13,29 13,51 0,15 -3,29 -9,42 -6,12 -14,22 -24,31 -10,8 -22,14 -35,19 -13,4 -27,6 -41,6 -23,0 -44,-4 -64,-12 -19,-8 -36,-22 -49,-41l31 -21z"/>
				  <polygon class="fil1" points="1944,3287 1824,3287 1824,3257 2096,3257 2096,3287 1977,3287 1977,3607 1944,3607 "/>
				  <path class="fil1" d="M2362 3293l-81 192 160 0 -79 -192zm-15 -36l34 0 147 350 -37 0 -38 -93 -185 0 -39 93 -35 0 153 -350z"/>
				  <polygon class="fil1" points="2702,3257 2744,3257 2957,3564 2957,3564 2957,3257 2990,3257 2990,3607 2948,3607 2735,3301 2734,3301 2734,3607 2702,3607 "/>
				  <polygon class="fil1" points="3287,3287 3167,3287 3167,3257 3439,3257 3439,3287 3320,3287 3320,3607 3287,3607 "/>
				  <polygon class="fil1" points="3616,3607 3649,3607 3649,3257 3616,3257 "/>
				  <polygon class="fil1" points="3868,3257 3910,3257 4123,3564 4124,3564 4124,3257 4157,3257 4157,3607 4115,3607 3902,3301 3901,3301 3901,3607 3868,3607 "/>
				  <polygon class="fil1" points="4582,3257 4616,3257 4703,3567 4704,3567 4792,3257 4834,3257 4922,3567 4923,3567 5010,3257 5044,3257 4942,3607 4902,3607 4814,3296 4812,3296 4724,3607 4684,3607 "/>
				  <polygon class="fil1" points="5218,3257 5431,3257 5431,3287 5250,3287 5250,3411 5420,3411 5420,3441 5250,3441 5250,3577 5439,3577 5439,3607 5218,3607 "/>
				  <polygon class="fil1" points="5711,3287 5592,3287 5592,3257 5863,3257 5863,3287 5744,3287 5744,3607 5711,3607 "/>
				  <polygon class="fil1" points="6118,3287 5999,3287 5999,3257 6270,3257 6270,3287 6151,3287 6151,3607 6118,3607 "/>
				  <polygon class="fil1" points="6448,3607 6480,3607 6480,3257 6448,3257 "/>
				  <path class="fil1" d="M6988 3584c-20,12 -41,20 -63,25 -22,5 -45,7 -67,7 -27,0 -51,-5 -74,-14 -22,-9 -41,-21 -57,-38 -15,-16 -28,-35 -37,-58 -9,-22 -13,-47 -13,-74 0,-26 4,-51 13,-73 9,-23 22,-42 37,-58 16,-17 35,-29 57,-39 23,-9 47,-14 74,-14 52,0 94,17 126,49l-24 25c-5,-7 -12,-12 -20,-18 -7,-5 -16,-10 -25,-14 -9,-4 -18,-6 -28,-9 -10,-2 -20,-3 -29,-3 -23,0 -43,4 -62,12 -18,8 -34,19 -46,33 -13,13 -23,30 -30,48 -7,19 -10,39 -10,61 0,22 3,42 10,61 7,19 17,35 30,49 12,14 28,25 46,32 19,8 39,12 62,12 18,0 36,-1 53,-4 16,-3 31,-9 45,-16l0 -118 -84 0 0 -30 116 0 0 166z"/>
				  <path class="fil1" d="M2388 4181l42 0c10,0 18,-1 25,-4 6,-2 11,-5 15,-9 3,-4 6,-8 7,-12 1,-5 2,-9 2,-12 0,-4 -1,-8 -2,-12 -1,-4 -4,-8 -7,-12 -4,-4 -9,-7 -15,-10 -7,-2 -15,-3 -25,-3l-42 0 0 74zm-19 -92l55 0c2,0 6,0 11,0 5,0 10,1 15,2 6,1 12,2 17,5 6,2 11,5 16,9 4,4 8,9 11,16 3,6 4,14 4,23 0,10 -1,18 -5,25 -3,6 -8,12 -13,16 -5,4 -11,7 -17,9 -7,2 -13,3 -18,4l61 101 -22 0 -59 -100 -37 0 0 100 -19 0 0 -210z"/>
				  <polygon class="fil1" points="2589,4089 2717,4089 2717,4107 2608,4107 2608,4181 2710,4181 2710,4199 2608,4199 2608,4281 2722,4281 2722,4299 2589,4299 "/>
				  <path class="fil1" d="M2882 4110l-49 115 97 0 -48 -115zm-9 -21l20 0 89 210 -22 0 -23 -56 -111 0 -24 56 -20 0 91 -210z"/>
				  <polygon class="fil1" points="3056,4089 3076,4089 3076,4281 3174,4281 3174,4299 3056,4299 "/>
				  <polygon class="fil1" points="3370,4089 3499,4089 3499,4107 3390,4107 3390,4181 3492,4181 3492,4199 3390,4199 3390,4281 3503,4281 3503,4299 3370,4299 "/>
				  <path class="fil1" d="M3596 4260c5,9 12,15 20,20 8,4 18,6 28,6 7,0 13,-1 19,-3 5,-2 10,-5 15,-8 4,-4 7,-8 10,-13 2,-5 3,-11 3,-17 0,-7 -1,-13 -4,-18 -3,-5 -7,-9 -12,-12 -6,-3 -11,-6 -18,-8 -6,-2 -13,-4 -20,-6 -6,-2 -13,-5 -20,-8 -6,-2 -12,-6 -17,-10 -5,-5 -9,-10 -12,-17 -3,-7 -5,-15 -5,-25 0,-9 2,-18 6,-25 3,-7 8,-13 15,-18 6,-5 13,-8 21,-11 8,-2 17,-4 25,-4 12,0 23,2 32,7 10,4 19,10 26,20l-17 12c-5,-7 -11,-12 -18,-16 -6,-3 -14,-5 -23,-5 -6,0 -12,1 -18,3 -6,1 -11,4 -15,7 -4,3 -8,8 -10,12 -3,5 -4,11 -4,18 0,10 2,18 8,24 5,6 12,10 20,13 8,4 16,7 26,9 9,2 18,6 26,10 8,4 15,10 20,17 5,8 8,18 8,31 0,9 -2,18 -5,25 -4,7 -9,14 -15,19 -6,5 -13,9 -21,11 -8,3 -16,4 -24,4 -14,0 -27,-3 -38,-7 -12,-5 -22,-13 -30,-25l18 -12z"/>
				  <polygon class="fil1" points="3846,4107 3775,4107 3775,4089 3938,4089 3938,4107 3866,4107 3866,4299 3846,4299 "/>
				  <path class="fil1" d="M4068 4110l-49 115 96 0 -47 -115zm-10 -21l21 0 88 210 -22 0 -23 -56 -111 0 -24 56 -20 0 91 -210z"/>
				  <polygon class="fil1" points="4268,4107 4196,4107 4196,4089 4359,4089 4359,4107 4287,4107 4287,4299 4268,4299 "/>
				  <polygon class="fil1" points="4436,4089 4564,4089 4564,4107 4455,4107 4455,4181 4557,4181 4557,4199 4455,4199 4455,4281 4569,4281 4569,4299 4436,4299 "/>
				 </g>
				</svg>
		</div>
	</div>
	<div class="az-pos1">
		<div class="az-radar-elem-item3">Erfahrung</div>
	</div>
	<div class="az-pos2">
		<div class="az-radar-elem-item3">Kontakte</div>
	</div>
	<div class="az-radar-elem az-pos14 az-active">
		<div class="az-offerten-lr">
			<div class="az-offerten-tb">
				<div class="az-offerten">Offerten</div>
			</div>
		</div>
	</div>
	<div class="az-radar-elem az-pos15 az-active">
		<div class="az-offerten-lr">
			<div class="az-offerten-tb">
				<div class="az-offerten">Offerten</div>
			</div>
		</div>
	</div>
	<div class="az-radar-elem az-pos16 az-active">
		<div class="az-offerten-lr">
			<div class="az-offerten-tb">
				<div class="az-offerten">Offerten</div>
			</div>
		</div>
	</div>
	<div class="az-radar-elem az-pos17 az-active">
		<div class="az-offerten-lr">
			<div class="az-offerten-tb">
				<div class="az-offerten">Offerten</div>
			</div>
		</div>
	</div>
	<div class="az-radar-elem az-pos18 az-active">
		<div class="az-offerten-lr">
			<div class="az-offerten-tb">
				<div class="az-offerten">Offerten</div>
			</div>
		</div>
	</div>
	<div class="az-radar-elem az-pos19 az-active">
		<div class="az-offerten-lr">
			<div class="az-offerten-tb">
				<div class="az-offerten">Offerten</div>
			</div>
		</div>
	</div>
	<div class="az-radar-elem az-pos20 az-active">
		<div class="az-offerten-lr">
			<div class="az-offerten-tb">
				<div class="az-offerten">Offerten</div>
			</div>
		</div>
	</div>
	<div class="az-pos21">
		<div class="az-radar-elem-item2"><strong>Beratung</strong> bei der Konzeption &<br>Entwicklung von Stadtquartieren</div>
	</div>
	<div class="az-pos22">
		<div class="az-radar-elem-item2"><strong>Potentialanalysen</strong><br>von unbebauten & bebauten Grundstücken</div>
	</div>
	<div class="az-pos23">
		<div class="az-radar-elem-item2"><strong>Diskrete abwicklung</strong><br>von Immobiliensuchaufträgen</div>
	</div>
	<div class="az-pos24">
		<div class="az-radar-elem-item2"><strong>Wertermittlung</strong></div>
	</div>
	<div class="az-pos25">
		<div class="az-radar-elem-item2"><strong>Vermittlung</strong><br>von Mezzaninkapitalgebern</div>
	</div>
	<div class="az-pos26">
		<div class="az-radar-elem-item2"><strong>Vermittlung</strong><br>von Gewerbe-/ Investmentimmobilien</div>
	</div>
	<div class="az-pos27">
		<div class="az-radar-elem-item2"><strong>Immobilienscouting</strong></div>
	</div>
	
	<div class="az-arrow-bottom"></div>
</div>

<script>
$(document).ready(function(){
	$('.az-arrow-bottom').click(function(){
		$('html, body').animate({scrollTop: height}, 800);
	});

// if(window.matchMedia('(min-width : 480px)').matches){
	var height = $('body').height();
	// var body = $('body');
	// var temp = $('html,body').scrollTop();
	// var temp2 = 0;
	// var temp3 = $('html,body').scrollTop();
	// $(document).scroll(function(){
	// 	temp3 = $('html,body').scrollTop();
	// 	if(temp > temp3){
	// 		temp2 = -1;
	// 	} else if(temp < temp3){
	// 		temp2 = 1;
	// 	} else{
	// 		temp2 = 0;
	// 	}
		
	// 	temp = temp3;
	// 	if((temp > 0) && (temp < 100) && (temp2 == 1)){
	// 		$('html,body').animate({scrollTop: height}, 800);
	// 		return false;
	// 	} else if((temp > (height - 100)) && (temp < height) && (temp2 == -1)){
	// 		$('html,body').animate({scrollTop: 0}, 800);
	// 		return false;
	// 	}
	// });
// }


});
	// var az_deg = function(a, b){
	// 	return Math.atan(a/b)/Math.PI*180;
	// };
	// var ret_arr;
	// var az_in_array = function(num, arr){
	// 	ret_arr = new Array;
	// 	for(var i=0; i<arr.length; i++){
	// 		if((num-1)<arr[i] && (num+1)>arr[i]){
	// 			ret_arr.push(i);
	// 		}
	// 	}
	// 	return ret_arr;
	// };
	// $(document).ready(function(){
	// 	var elems = $('.az-radar-elem');
	// 	var deg_arrs = new Array();
	// 	var deg_arrs2 = new Array();
	// 	var x = $('body').width()/2;
	// 	var	y = $('body').height()/2;
	// 	var top;
	// 	var left;
	// 	for(var i=0; i<elems.length; i++){
	// 		top = elems.eq(i).position().top - y + elems.eq(i).height()/2;
	// 		left = elems.eq(i).position().left - x + elems.eq(i).width()/2;
	// 		deg_arrs.push((top>=0&&left>=0)?az_deg(top, left):(top<=0&&left>=0)?(360+az_deg(top, left)):(180+az_deg(top, left)));
	// 	}
	// 	for(var i=0; i<deg_arrs.length; i++){
	// 		deg_arrs2.push(deg_arrs[i]>180?deg_arrs[i]-180:deg_arrs[i]+180);
	// 	}
	// 	setInterval(function(){
	// 		var arrow_matrix = $('.az-radar-arrow').css('transform');
	// 		var matrix = arrow_matrix.slice(7, arrow_matrix.length-2).split(', ');
	// 		var azdeg = Math.acos(parseFloat(matrix[0]))/Math.PI*180;
	// 		var azdeg2 = Math.asin(parseFloat(matrix[1]))/Math.PI*180;
	// 		var azdeg3 = azdeg2>0?azdeg:(360-azdeg);
	// 		var az_in_it = az_in_array(azdeg3, deg_arrs);
	// 		var az_in_it2 = az_in_array(azdeg3, deg_arrs2);
	// 		if(az_in_it.length != 0){
	// 			for(var i=0; i<az_in_it.length; i++){
	// 				elems.eq(az_in_it[i]).addClass('az-active');
	// 			}
	// 		}
	// 		if(az_in_it2.length != 0){
	// 			for(var i=0; i<az_in_it2.length; i++){
	// 				elems.eq(az_in_it2[i]).removeClass('az-active');
	// 			}
	// 		}
	// 	}, 10);
	// });
</script>
	</section>

<section class="ah-res ah-res_style ah-res_style2">
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


<?php get_footer(); ?>