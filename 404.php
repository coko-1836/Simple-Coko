<?php
get_header();
?>
	<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( '404 Not Found', 'chk' ); ?></h1>
			</header><!-- .page-header -->
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<article>
			<div class="page-content">
				<a href="<?php echo(home_url())?>">Return To Top</a>
			</div><!-- .page-content -->
			</article>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
