<?php
/*
# ===========================================
# index.php
#
# The main template file
# ===========================================
*/
?>

<?php
/* Load header.php. */
get_header();
?>

<div class="title">
    <div>
        <h1>بلاگ</h1>
        <div class="breadcrumb">
            <a href="index.html">صفحه اصلی</a>
            <?php $arrow = IMAGES . '/icons/left-arrow.svg'; ?>
            <img src="<?php echo $arrow; ?>">
            <a>بلاگ</a>
        </div>
    </div>
    <svg id="curve5" viewBox="0 0 1920.18 191.29">
        <path class="st0" d="M0,2.2c0,0,67,68.5,277,80.9c234,0,1296.7,0.1,1296.7,0.1s250.1-0.8,346.5,99.6c0,0.3,0,8.3,0,8.5
			c-174-0.2-1907.4,0.1-1920.2,0.1V2.2z" />
    </svg>
</div>

<section id="blog">
    <div class="blog__list">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>          
    </div>
</section>

<?php
        /* Load numbered pagination. */
        pgh_numbered_pagination();
    ?>

<?php
/* Load footer.php. */
get_footer();
?>