
<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_cat_name(11); ?></h2>
            <p><?php echo category_description(11); ?></p>
        </div>
      <?php if( have_rows ('style', 321 ) ) ;?>
        <ul id="filters" class="clearfix text-center">
            <?php while( have_rows('style', 321) ): the_row();
            ?>
            <li><span class="filter active" data-filter="*"><?php the_sub_field ( 'real_style', 321 );?></span></li>
            <?php endwhile; ?>
        </ul>
        <div id="portfoliolist">
            <div class="row">
                <?php
                if ( have_posts() ) : query_posts('category_name=our_portfolio');
                while ( have_posts() ): the_post();
                // код вывода
                ?>
                <div class="col-md-4 col-lg-3 portfolio web">
                    <div class="portfolio-wrapper">
                        <div class="works-img">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_post_thumbnail_url( 'large' ); ?>" title="<?php the_title_attribute(); ?>" data-fancybox="images">
                                    <img src="<?php the_post_thumbnail_url(); ?>"/>
                                </a>
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php the_title();?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_query() ;?>
            </div>
        </div>
    </div>
</section>
