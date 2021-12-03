<?php
get_header();
?>

	<main id="primary" class="site-main">

	<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="clearfix">
	<div>
	<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<div class="post-info">
	<ul>
	<li class="time">投稿日:<?php echo get_the_date(); ?></li>
	<li class="tag">タグ:<?php the_tags('', ', '); ?></li>
	</ul>
	</div>
	</div>
	<?php the_content('続きを読む...'); ?>
	<?php endwhile; // 繰り返し処理終了
	else : ?>
	<div>
	<article class="clearfix">
	<h2>記事はありません</h2>
	<p>お探しの記事は見つかりませんでした。</p>
	</article>
	</div>
	<?php endif; ?>


	</main><!-- #main -->
<?php
get_footer();