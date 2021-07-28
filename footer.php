<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seblito
 */

?>

<footer id="colophon" class="site-footer seblito-footer">
	<div class="container">
		<div class="site-info">
			<a
				href="<?php echo esc_url(__('https://jsbmedia.se/', 'seblito')); ?>">
				<?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Proudly powered by Wordpress', 'seblito'), 'WordPress');
                ?>
			</a>
			<span class="sep"> | </span>
			<?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf(esc_html__('Theme: %1$s by %2$s.', 'seblito'), 'seblito', '<a href="http://jsbmedia.se/">Sebastian Bernhardtz</a>');
                ?>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>