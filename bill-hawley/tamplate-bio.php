<?php
/**
 * Template Name: Bio
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

	<main class="uk-container uk-container-center tm-clients">
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
        <h1 class="uk-text-center uk-margin-large-bottom">About</h1>
        <div class="uk-grid uk-margin-bottom uk-flex-middle" data-uk-margin="{cls:'uk-margin-large-top'}">
          <div class="uk-width-medium-6-10 uk-push-4-10">
            <img src="<?php echo get_template_directory_uri();?>/images/2.jpg">
          </div>
          <div class="uk-width-medium-4-10 uk-pull-6-10">
            <div class="uk-width-medium-7-10">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
	</main>


<?php
get_footer();