<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package becky
 */

get_header();
?>
<!-- about section -->
<div id="about" class="container-fluid">
    <div class="section-headline">
        <h2>BECKY365</h2>
        <p>Daily repository for my 365 day photography challenge.</p>
    </div>
</div>
<!-- about section -->
<div id="work" class="container-fluid">
    <div class="section-headline">
        <h2>LATEST UPDATES</h2>
    </div>
	<div class="row no-gutter">
		
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-folioitem', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-folioitem', 'none' );

		endif;
		?>
	</div><!-- end grid-item row no-gutter-->
</div><!-- end container-fluid -->
<!-- comment out content for future use <div id="contact" class="container-fluid">
    <div class="section-headline">
        <h2>CONTACT</h2>
        <p>Let's do lunch sometime.</p>
        <div class="social-icons">
            <a href="#" target="_blank"><img src="http://www.rcabneystudios.com/fcc/portfolio/twitter.png" alt="" /></a>
            <a href="#" target="_blank"><img src="http://www.rcabneystudios.com/fcc/portfolio/behance.png" alt="" /></a>
            <a href="#" target="_blank"><img src="http://www.rcabneystudios.com/fcc/portfolio/linkedin.png" alt="" /></a>
        </div>
    </div>
</div> -->
<?php
get_sidebar();
get_footer();
