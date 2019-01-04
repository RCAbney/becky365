<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package becky
 */

?>

        <div class="col-md-3 col-sm-6">
            <?php
the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
			?>
            <div class="folio-item" id="post-<?php the_ID(); ?>">
                <div class="folio-item-details">
					<?php
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					?>
                    
                    <p><?php echo get_the_date('Y-m-d');?></p>
                </div>
            </div>
        </div>
<!-- #post-<?php the_ID(); ?> -->
