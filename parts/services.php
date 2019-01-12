<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_cat_name(8); ?></h2>
            <p><?php echo category_description(8); ?></p>
        </div>
        <div class="row">
            <?php
            if ( have_posts() ) : query_posts('category_name=lorem-ipsum-dolor-sit-consectet-ipsum-dolor-sit');
                while ( have_posts() ): the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="servicebox">
                    <div class="srv_desc">
                        <h5 class="count"><?php the_field( 'counter' );?></h5>
                        <h4><a href="index.html#"><?php the_title();?></a></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; wp_reset_query() ;?>
        </div>
    </div>
</section>