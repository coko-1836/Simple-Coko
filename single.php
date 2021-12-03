<?php
get_header();
?>

	<main id="primary" class="site-main">

	<article>
        <?php //start
        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--title-->
        <h1 class="blog-detail__title"><?php the_title(); ?></h1>
        <time>
            <?php the_time('Y.m.d'); ?>
        </time>
        <?php if(get_the_modified_date('Ymd') > get_the_time('Ymd')): ?>
            <time>
                （更新日:<?php the_modified_date('Y.m.d'); ?>）
            </time>
        <?php endif; ?>
        <?php if(has_post_thumbnail()): ?>
        <div class="blog-detail__image">
            <img src="<?php the_post_thumbnail_url('large'); ?>">
        </div>
        <?php endif; ?>
        <div class="blog-detail__body">
            <div class="blog-content"><?php echo the_content(); ?></div>
        </div>
        <?php endwhile; endif; ?>
    </article>

	</main><!-- #main -->

<?php
get_footer();
