<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Secretireland
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__inner">
			<nav class="social-menu">
				<div class="site-footer__about">
					<div class="site-footer__about-image">
						<img src="https://placeimg.com/140/140/any" alt=""/>
					</div>
					<div class="site-footer__about-info">
						<h2 class="site-footer__about-headline">About Me</h2>
						<p class="site-footer__about-info">Secret Ireland is a website dedicated to discovering the undiscovered gems are hidden throughout the Irish Countryside.  Focusing mostly on historical locations and other places of significance Secret Ireland promises to take you to where you've never been before.</p>
					</div>
				</div>
				<div class="site-footer__mailing-social-container">
					<div class="site-footer__mailing-list">
						<h2 class="site-footer__mailing-headline">Join My Mailing List</h2>
						<div class="site-footer__mailing-cta">
							<input name="user_email" id="user_email" type="email" placeholder="Email Address" />
							<button class="site-footer__button">Subscribe Now</button>
						</div>
					</div>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
					) );
					?>
				</div>
			</nav>

			<div class="site-info">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( '%1$s by %2$s', 'secretireland' ), 'secretireland', '<a href="https://ciand.net">cian durrigan</a>' );
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
