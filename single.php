<?php

	get_header();

	if (have_posts()) :
		while (have_posts()) :
			the_post();

?>

<div id="main">
		<article>
			<header class="article-header">
			<a href="/news" class="visit-news-hub"><div class="arrow-left"></div>Visit the News Hub</a>
			<?php
				echo get_the_category_list();
				the_title('<h1>', '</h1>');
				if(get_field('subhead'))
					echo "<p class='subhead'>" . get_field('subhead') . "</p>";
				echo "<p class='meta-header'>";
			?>by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a><span class="meta-separator">&bull;</span><?php
				the_date();
				echo "</p>";
				if ( function_exists( 'sharing_display' ) ) {
				    sharing_display( '', true );
				}
				the_post_thumbnail('landing-page');
				if(get_post(get_post_thumbnail_id())->post_excerpt): echo '<p class="featured-image-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</p>'; endif;
			?>
			</header>
			<?php
				the_content();
			?>
			<footer class="article-footer clearfix">
				<div class="boilerplate">
					<?php the_field('boilerplate'); ?>
				</div>
				<div class="footer-author">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
					<p><?php the_author_meta( 'description' ); ?></p>
					<?php $user_id = get_the_author_meta( 'ID' ); ?>
					<p class="phone-number"><?php $user_phone = get_user_meta( $user_id, 'phone', true); echo $user_phone; ?></p>
					<?php if(get_user_meta( $user_id, 'phone', true) && get_the_author_meta( 'user_email', $user_id )) { echo '<span class="footer-bullet">&bull;</span>'; } ?>
					<p class="email-address"><a href="mailto:<?php echo get_the_author_meta( 'user_email', $user_id ); ?>"><?php the_author_meta( 'user_email', $user_id ); ?></a></p>
				</div>
				<div class="footer-media-contact">
					<a href="">Media Contact</a>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<p class="phone-number">555-555-5555</p>
					<span class="footer-bullet">&bull;</span>
					<p class="email-address"><a href="mailto:email@wustl.edu">email@wustl.edu</a></p>
				</div>
			</footer>
			<?php
				endwhile;
			endif;
			?>
		</article>
	<div class="footer-related clearfix">
		<h3>Related Articles</h3>

		<?php
		$the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3) );

		if ( $the_query->have_posts() ) {
			echo '<ul>';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<li><div class="card">';
				the_post_thumbnail('in-the-news');
				echo '<p class="article-date">' . get_the_time('M d, Y') . '</p>';
				echo '<a href="' . get_the_permalink() . '">';
				the_title('<h4>', '</h4>');
				echo '</a>';
				the_excerpt();
				echo '</div></li>';
			}
			echo '</ul>';
		} ?>
	</div>
</div>

<?php get_footer(); ?>