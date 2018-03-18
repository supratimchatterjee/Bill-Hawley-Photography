<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bill_Hawley
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="uk-block">
	<div class="uk-container uk-container-center">
		<nav class="uk-navbar uk-navbar-attached">
		    <div class="tm-logo">
                <a href="#" class="tm-navbar-brand"><img src="<?php echo get_template_directory_uri();?>/images/newlogo.jpg"></a>
            </div>
		    <!--div class="uk-navbar-content uk-navbar-flip ">
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-parent" data-uk-dropdown>
                        <a href="">Portfolio</a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-autoflip uk-dropdown-top">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Potraits</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Personal</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Client List</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                 <a href="" class="uk-navbar-toggle uk-visible-small"></a>
            </div-->
		</nav>
	</div>
</header>
