<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 21.12.2018
 * Time: 15:52
 */
?>
<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_cat_name(12); ?></h2>
            <p><?php echo category_description(12); ?></p>
        </div>
        <div class="row">
            <?php
            if ( have_posts() ) : query_posts('category_name=latest_articles');
            while ( have_posts() ): the_post();
            // код вывода
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="blog_post">
                    <div class="post_img">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title_attribute(); ?>" >
                                <img src="<?php the_post_thumbnail_url(); ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="post_content">
                        <div class="post_header">
                            <h2 class="post_title"><a href="index.html#"><?php the_title();?></a></h2>
                            <div class="read_more"><a href="index.html#"><?php the_content(); ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; wp_reset_query() ;?>
        </div>
    </div>
</section>