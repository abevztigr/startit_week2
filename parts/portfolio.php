
<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <?php $the_query = new WP_Query('p=388'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <h2><?php echo the_title(); ?></h2>
                <p><?php echo the_content(); ?></p>
            <?php endwhile; ?>
        </div>
      <?php if( have_rows ('style', 388 ) ) ;?>
        <ul id="filters" class="clearfix text-center">
       <?php while( have_rows('style', 388) ): the_row();
            ?>
            <li><span class="filter active" data-filter="*"><?php the_sub_field ( 'design', 388 );?></span></li>
            <?php endwhile; ?>
        </ul>
        <div id="portfoliolist">
            <div class="row">
                <?php while( have_rows('nam', 388) ): the_row();
                ?>
                <div class="col-md-4 col-lg-3 portfolio web">
                    <div class="portfolio-wrapper">
                        <div class="works-img">

                                <a href="<?php the_sub_field( 'foto', 388 );?>"  data-fancybox="images">
                                    <img src="<?php the_sub_field( 'foto', 388 );?>"/>
                                </a>

                            </a>
                        </div>
                        <div class="works-info">
                            <div class="label-text">
                                <h4><?php the_sub_field( 'name', 388 );?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
