<?php get_header(); ?>

<div class="page__mainVisual flex">
    <div class="page__mainVisual--thumb"></div>
    <div class="page__mainVisual--content">
        <h1>
            <span>NEWS</span>
            <b>お知らせ</b>
        </h1>
    </div>
</div>


<section id="news">
    <div class="container">


        <ul class="flex">
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
            $args = array(
                'posts_per_page' => '6',
                'post_status' => 'publish',
                'paged' => $paged,
                'post_type' => 'post',
            );
            ?>
            <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $my_query->have_posts() ) :

                    while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

                <li style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                    <a href="<?php the_permalink(); ?>">
                        <div class="post_ttl">
                            <span class="cat">グルメ</span>
                            <h3><?php the_title();?></h3>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>	

        </ul>

    </div>
</section>


<?php get_footer("page"); ?>