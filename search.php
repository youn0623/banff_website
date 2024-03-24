<?php get_header(); ?>

<div class="whole-search">
    <div class="search-results">
        <h2>Results For: "<?php echo get_search_query(); ?>"</h2>
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <div class="post-card">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <p><?php the_time(); ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>No results.</p>
        <?php endif; ?>
    </div>

    <div class="recent-posts">
        <h2>Recent Posts</h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="post-card">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_content(); ?>
                    <p>Author: <?php the_author(); ?></p>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Reset post data
        else :
        ?>
            <p>No posts found</p>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
