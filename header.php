<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galifao
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>




	<div id="page" class="site ">
		<div class="wrapper  ">

			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'galifao' ); ?></a>
			<header id="masthead" class="site-header preto" role="banner">



						

<div class="row">

<div class=" show-for-small-only small-7 vermelho columns " id="logo-pequeno-ecra">
<?php dynamic_sidebar( 'site-logo' );?>

</div><!--logo-pequeno-ecra show-for-small-only small-7 columns-->
				
								
						<div class="title-bar small-1 columns verde " data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon"  type="button" data-toggle></button>
</div><!--title-bar-->
</div><!--row-->					


<div class="top-bar" id="example-menu">
  <div class="top-bar-left medium-7 columns hide-for-small-only ">
  	<?php dynamic_sidebar( 'site-logo' );?>
  
  </div><!--top-bar-left-->
  <div class="top-bar-right medium-5 columns">
  	<div class="medium-5 columns"
  	  <ul>
     	<?php wp_nav_menu( array( 
										'theme_location' => 'main-nav', 
										'menu_id' => 'topbar' ,
										'menu_id' => 'itemsbarra',


										) ); ?>
    </ul>

</div><!-- medium-3 columns-->
<div class="medium-6 columns">
    <ul class="menu">
      <li><input type="text" placeholder="Procurar"></li>
      <li><a type="button" class="alert button expand">ir</a></li>
    </ul>




</div><!--medium-6 columns-->
</div><!--top-bar-right medium-5 columns-->

</div><!--top bar-->

						




				</header><!-- #masthead -->


					

					<div id="content" class="site-content">
