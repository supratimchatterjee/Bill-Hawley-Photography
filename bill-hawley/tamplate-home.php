<?php
/**
 * Template Name: Home 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bill_Hawley
 */

get_header(); ?>

	<main class="uk-container uk-container-center">
		<div class="uk-grid uk-grid-large">
            <div class="uk-width-medium-2-10">
                <ul class="tm-primary-menu">
                    <li>
                        <a href="#">Portfolio</a>
                        <ul class="uk-nav uk-nav-navbar">
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Potraits</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Personal</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Client List</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Bio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-8-10">
                <div class="uk-grid uk-grid-medium uk-grid-match uk-margin-bottom" data-uk-margin="{cls:'uk-margin-top'}" data-uk-grid-match="{target:'.uk-panel-teaser'}">
                    <div class="uk-width-medium-1-3 uk-text-center">
                        <div class="uk-overlay uk-overlay-hover ">
                            <img src="<?php echo get_template_directory_uri();?>/images/1.jpg">
                            <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
                                <div>1</div>
                                <a href="#" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
                    </div>
                    <div class="uk-width-medium-1-3 uk-text-center">
                        <div class="uk-overlay uk-overlay-hover ">
                            <img src="<?php echo get_template_directory_uri();?>/images/3.jpg">
                            <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
                                <div>1</div>
                                <a href="#" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
                    </div>
                    <div class="uk-width-medium-1-3 uk-text-center">
                        <div class="uk-overlay uk-overlay-hover ">
                            <img src="<?php echo get_template_directory_uri();?>/images/1.jpg">
                            <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
                                <div>1</div>
                                <a href="#" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
                    </div>
                    <div class="uk-width-medium-1-3 uk-text-center">
                        <div class="uk-overlay uk-overlay-hover ">
                            <img src="<?php echo get_template_directory_uri();?>/images/3.jpg">
                            <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
                                <div>1</div>
                                <a href="#" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
                    </div>
                    <div class="uk-width-medium-1-3 uk-text-center">
                        <div class="uk-overlay uk-overlay-hover ">
                            <img src="<?php echo get_template_directory_uri();?>/images/1.jpg">
                            <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
                                <div>1</div>
                                <a href="#" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
                    </div>
                    <div class="uk-width-medium-1-3 uk-text-center">
                        <div class="uk-overlay uk-overlay-hover ">
                            <img src="<?php echo get_template_directory_uri();?>/images/3.jpg">
                            <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
                                <div>1</div>
                                <a href="#" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
                    </div>
                </div>
            </div>
        </div>
	</main>


<?php
get_footer();