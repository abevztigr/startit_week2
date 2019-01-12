
<?php
get_template_part(  'header' );
?>

<?php

get_template_part(  'parts/slider', 'slider' );
?>
<?php

get_template_part(  'parts/services', 'services' );
?>

<?php

get_template_part(  'parts/about', 'about' );
?>
<?php
get_template_part( 'parts/portfolio', 'portfolio' );
?>


<?php
get_template_part( 'parts/blog', 'blog' );
?>

<?php
get_template_part( 'parts/contact', 'contact' );
?>

<?php
        get_template_part(  'footer' );
?>

        <!-- All JavaScript Files
        ================================================== -->
<?php
        wp_footer();
?>

    </body>
</html>