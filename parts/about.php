<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <?php $the_query = new WP_Query('p=374'); ?>
                    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h2><?php echo the_title(); ?></h2>
                    <p><?php echo the_content(); ?></p>
                    <?php endwhile; ?>
                </div>
                <div class="about_content_box box-left">

                    <div class="about_txt_box">


                        <p><?php the_field( 'text1', 374 );?></p>

                    </div>
                    <div class="about_img_box">

                        <img src="<?php the_field( 'foto3', 374 );?>" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_content_box box-right">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="about_img_box">
                                <img src="<?php the_field( 'foto1', 374 );?>" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_img_box">
                                <img src="<?php the_field( 'foto2', 374 );?>" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="about_txt_box">
                        <p><?php the_field( 'text2', 374 );?> </p>
                        <p><?php the_field( 'text3', 374 );?> </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>