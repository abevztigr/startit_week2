<section id="services" class="services pt-10">

    <div class="container">

        <div class="section-title">
            <?php $the_query = new WP_Query('p=352'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <h2><?php echo the_title(); ?></h2>
            <p><?php echo the_content(); ?></p>
            <?php endwhile; ?>
        </div>
        <div class="row">
            <?php while( have_rows('number', 352) ): the_row(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="servicebox">
                    <div class="srv_desc">
                        <h5 class="count"><?php the_sub_field( 'one', 352 );?></h5>
                        <h4><a href="index.html#"><?php the_sub_field( 'two', 352 );?></a></h4>
                        <p><?php the_sub_field( 'three',352 ); ?></p>
                    </div>
                </div>

            </div>

            <?php endwhile; ?>
        </div>

    </div>

</section>