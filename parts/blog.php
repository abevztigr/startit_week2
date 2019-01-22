
<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <?php $the_query = new WP_Query('p=400'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <h2><?php echo the_title(); ?></h2>
                <p><?php echo the_content(); ?></p>
            <?php endwhile; ?>
        </div>
        <div class="row">
            <?php while( have_rows('qwerty', 400) ): the_row(); ?>
            <div class="col-md-6 col-lg-4">
                <div class="blog_post">
                    <div class="post_img">

                            <a href="<?php the_sub_field( 'foto', 400 );?>" title="<?php the_title_attribute(); ?>" >
                                <img src="<?php the_sub_field( 'foto', 400 );?>">
                            </a>

                       </div>
                    <div class="post_content">
                        <div class="post_header">
                            <h2 class="post_title"><a href="index.php#"><?php the_sub_field( 'text', 400 );?> </a></h2>
                            <div class="read_more"><a href="index.php#"><?php the_sub_field( 'link', 400 );?> </a></div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>