<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Seblito
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="fullwidth-header-image">
        <?php seblito_post_thumbnail(); ?>
    </div>
    <div class="container">
        <header class="entry-header">
            <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('page' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <?php
                seblito_posted_on();
                seblito_posted_by();
                ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
    </div>

    <div class="container">

        <div class="aligncenter">
            <p> This is produced in "template-parts/content-front-page.php".</p>
        </div>

    </div>

</article><!-- #post-<?php the_ID(); ?> -->