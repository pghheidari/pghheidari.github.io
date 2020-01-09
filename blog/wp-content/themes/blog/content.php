<?php
/*
# ===========================================
# content.php
#
# The default template for displaying content.
# ===========================================
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog__box' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'full', array( 'class' => 'responsive' ) ) ?>
        </a>
    <?php endif; ?> 
    <div class="blog__box--content">
        <h3><?php echo get_the_title(); ?></h3>
        <!--<?php pgh_post_meta(); ?>-->
        <?php the_content( __( 'ادامه مطلب', 'pgh' ) ); ?>
    </div>
</article>