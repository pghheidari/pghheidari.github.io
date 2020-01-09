<?php
/*
# ===========================================
# single.php
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
        <p>بلاگ</p>
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

<div class="blog-singlepost">
    <aside class="blog-singlepost__sidebar">
        <?php
            /* Load sidebar.php */
            get_sidebar();
        ?>
    </aside>
    <div class="blog-singlepost__content">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>

        <?php pgh_post_meta(); ?>

        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full', array( 'class' => 'responsive' ) ) ?>
        <?php endif; ?> 

        <?php the_content(); ?>
        
    <?php endwhile; ?>

    <?php else : ?>
        <?php _e( 'صفحه مورد نظر پیدا نشد', 'pgh' ) ?>
    <?php endif; ?>
    </div>

</div>


<?php
/* Load footer.php. */
get_footer();
?>