<?php

/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package placid
 */
global $placid_theme_options;
$hide_meta_tag  = $placid_theme_options['placid-meta-tag'];
$hide_feature_image    = $placid_theme_options['hide-feature-image'];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title('<h1 class="entry-title">', '</h1>');

		if ('post' === get_post_type() && $hide_meta_tag == 1) : ?>
			<div class="entry-meta">
				<?php placid_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>

		<ul class="sns_section mt-2">
			<li class="sns_button twitter">
				<a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" title="Tweet">
					<i class="fa fa-twitter"></i></a>
			</li>
			<li class="sns_button hatena">
				<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" title="hatena">
					<i class="fa fa-hatena"></i></a>
			</li>
			<li class="sns_button facebook">
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" title="Facebook">
					<i class="fa fa-facebook-f"></i></a>
			</li>
			<li class="sns_button pocket">
				<a href="http://getpocket.com/edit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" title="pocket">
					<i class="fa fa-get-pocket"></i></a>
			</li>
			<li class="sns_button line">
				<a href="http://line.me/R/msg/text/?url=<?php the_permalink(); ?>" target="_blank" title="line">
					<i class="fa fa-line"></i></a>
			</li>
		</ul>
	</header><!-- .entry-header -->

	<?php
	if (has_post_thumbnail()) {
		if ($hide_feature_image  == 0) {
			?>
			<!--post thumbnal options-->
			<div class="post-thumb">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>
			</div><!-- .post-thumb-->
	<?php
		}
	}
	?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'placid'),
			'after'  => '</div>',
		));
		?>

		<ul class="sns_section">
			<li class="sns_button twitter">
				<a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" title="Tweet">
					<i class="fa fa-twitter"></i></a>
			</li>
			<li class="sns_button hatena">
				<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" title="hatena">
					<i class="fa fa-hatena"></i></a>
			</li>
			<li class="sns_button facebook">
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" title="Facebook">
					<i class="fa fa-facebook-f"></i></a>
			</li>
			<li class="sns_button pocket">
				<a href="http://getpocket.com/edit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" title="pocket">
					<i class="fa fa-get-pocket"></i></a>
			</li>
			<li class="sns_button line">
				<a href="http://line.me/R/msg/text/?url=<?php the_permalink(); ?>" target="_blank" title="line">
					<i class="fa fa-line"></i></a>
			</li>
		</ul>

	</div><!-- .entry-content -->


</article><!-- #post-## -->