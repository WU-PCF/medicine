<?php

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

    <div id="main" class="page-news clearfix">

        <header>
            
            <?php the_title('<h1>', '</h1>'); ?>

            <ul class="news-subnav clearfix">
                <li><a href="">Publications</a></li>
                <li><a href="">For Media</a></li>
                <li><a href="">About Public Affairs</a></li>
            </ul>

            <ul class="news-filters">
                <li class="active"><a href="/news">All</a></li>
                <li><a href="">Editor's Picks</a></li>
                <li><a href="">Topics</a></li>
                <li><a href="">Source</a></li>
            </ul>

        </header>

        <article>

            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
            );
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { ?>
            <div class="editors-pick">
                <?php while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    <div>
                        <a href="<?php ( get_field('url') ? the_field('url') : the_permalink() ) ?>">
                                <?php the_post_thumbnail(); ?>
                        </a>
                        <div class="editors-pick-text">
                            <p class="article-date"><?php the_time('M j, Y'); ?></p>
                            <a href="<?php ( get_field('url') ? the_field('url') : the_permalink() ) ?>">
                                <?php the_title('<h2>', '</h2>'); ?>
                            </a>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>

            <div class="news-cards">

            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 24,
                'paged' => $paged
            );
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) { ?>
                <ul class="clearfix">
                <?php while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    <li>
                        <div class="card">
                            <a href="<?php ( get_field('url') ? the_field('url') : the_permalink() ) ?>">
                                <?php the_post_thumbnail('in-the-news'); ?>
                            </a>
                            <p class="article-date"><?php the_time('M j, Y'); ?></p>
                            <a href="<?php ( get_field('url') ? the_field('url') : the_permalink() ) ?>">
                                <?php the_title('<h2>', '</h2>'); ?>
                            </a>
                            <?php the_excerpt(); ?>
                        </div>
                    </li>
                <?php } ?>
                </ul>
                <?php if ($the_query->max_num_pages > 1) { ?>
                    <div class="pagination">
                        <div class="next-posts"><?php next_posts_link( 'Load More', $the_query->max_num_pages ); ?></div>
                    </div>
                <?php } ?>
            <?php }
            wp_reset_postdata(); ?>

            </div>

        </article>

    </div>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>