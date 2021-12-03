<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chk
 */

?>
<article>
<section class="no-results not-found">
	<div class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'chk' ); ?></h1>
	</div><!-- .page-header -->
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'chk' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>
			<h1>検索キーワード:<?php echo get_search_query(); ?></h1>
			<p><?php esc_html_e( '検索内容に一致する投稿はありませんでした...', 'chk' ); ?></p>
			<?php
			get_search_form();

		else :
			?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'chk' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
</article>
