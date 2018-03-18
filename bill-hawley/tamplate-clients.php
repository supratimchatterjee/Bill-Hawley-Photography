<?php
/**
 * Template Name: Clients
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
        <ul class="uk-list tm-clientl-list">
          <li>Adidas</li>
          <li>Nike</li>
          <li>Puma</li>
          <li>Red Bull</li>
        </ul>
      </div>
    </div>
	</main>


<?php
get_footer();