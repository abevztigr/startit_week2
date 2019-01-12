<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 20.12.2018
 * Time: 20:53
 */
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">
        <!-- Page Title -->
        <title>Carrby - Agency Template</title>
        <!-- Favicon and Touch Icons -->
        <link href="images/favicon.png" rel="shortcut icon" type="image/png">
        <!-- Lead Style -->
<?php wp_head(); ?>
    </head>
    <body>
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?> /images/logo.png" alt="logo щас будет"></a>
                        </div>
                    <?php wp_nav_menu ([
                    'container' => 'div',
                    'container_class' => 'nav-inner',
                        'container_id' => 'mobile-toggle',
                    'menu_class' => 'main-menu'
                    ])?>
                    </nav>
                </div>
            </div>
        </header>