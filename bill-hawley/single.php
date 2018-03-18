<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bill_Hawley
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
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
					<div class="uk-grid uk-grid-medium uk-margin-large-bottom" data-uk-margin="{cls:'uk-margin-top'}">
				        <div class="uk-width-medium-7-10" data-uk-margin="{cls:'uk-margin-top'}">
				            <div><img src="images/1.jpg"></div>
				            <div><img src="images/3.jpg"></div>
				        </div>
				        <div class="uk-width-medium-3-10">
				            <h2>Lorem Ipsum</h2>
				            <article>
				                Proin facilisis elit vitae mollis faucibus. Proin vitae massa nec mauris dictum consequat. Maecenas congue non felis a malesuada. Phasellus ullamcorper laoreet felis eu viverra. In at tincidunt tortor. Praesent tempor eros vitae elit dignissim, vitae elementum dui dapibus. Duis tristique, ligula eget lobortis accumsan, nibh enim venenatis urna, a commodo elit ex ac urna.    
				            </article>
				        </div>
				    </div>
				    <div data-uk-grid="{gutter: 20}">
				        <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-text-center">
				            <div class="uk-overlay uk-overlay-hover ">
				                <img src="images/1.jpg" alt="" width="800" height="280">
				                <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
				                    <div>1</div>
				                </div>
				            </div>
				            <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
				        </div>
				        <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-text-center">
				            <div class="uk-overlay uk-overlay-hover ">
				                <img src="images/65.jpg" alt="" width="800" height="280">
				                <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
				                    <div>1</div>
				                </div>
				            </div>
				            <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
				        </div>
				        <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-text-center">
				            <div class="uk-overlay uk-overlay-hover ">
				                <img src="images/3.jpg" alt="" width="800" height="280">
				                <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
				                    <div>1</div>
				                </div>
				            </div>
				            <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
				        </div>
				        <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-text-center">
				            <div class="uk-overlay uk-overlay-hover ">
				                <img src="images/1.jpg" alt="" width="800" height="280">
				                <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
				                    <div>1</div>
				                </div>
				            </div>
				            <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
				        </div>
				        <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-text-center">
				            <div class="uk-overlay uk-overlay-hover ">
				                <img src="images/3.jpg" alt="" width="800" height="280">
				                <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
				                    <div>1</div>
				                </div>
				            </div>
				            <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
				        </div>
				        <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-text-center">
				            <div class="uk-overlay uk-overlay-hover ">
				                <img src="images/65.jpg" alt="" width="800" height="280">
				                <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-middle uk-flex-center">
				                    <div>1</div>
				                </div>
				            </div>
				            <figcaption class="uk-margin-top"><p>Lorem ipsum</p></figcaption>
				        </div>
				    </div>
				  </div>
				</div>
			</main>
		<?php endwhile;?>
	<?php endif;?>
<?php
get_footer();
