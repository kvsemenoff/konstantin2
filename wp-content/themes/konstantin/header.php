<?php
$id = get_the_ID();
switch ($id) {
 	case  4:  $body_class = "class='az-leistungen'"; $html_class =  "class='az-html'>"; break; 
 	case  6:  $body_class = "class='ah-resbody'"; break; 
 	case  9:  $body_class = "class='qq-koorp'"; break; 
 	case  12: $body_class = "class='ah-transakvolbody'"; break; 
 	case  16: $body_class = "class='qq-wer'"; break; 
 	case  18: $body_class = "class='qq-imp'"; break; 
 	case  23: $body_class = "class='zk_bg_kontakt'"; break; 
 	case  28: $body_class = "class='ah-pressebody'"; break; 
 	default:  $body_class = ""; $html_class = ""; 
}?>

<!doctype html>
<html lang="ru" <?php echo $html_class; ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">	
	<link rel="shortcut icon" href="favicon.ico" />	
	<?php wp_head(); ?>
</head>

<body <?php echo $body_class; ?>>

	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>	
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

