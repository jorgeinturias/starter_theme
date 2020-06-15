<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="Content-Language" content="en">

    <link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/png"/>

    <!--[if lte IE 9 ]>
    <script>
        alert('Browser version is too old and site will not be displayed correctly. Please, upgrade your browser.');
    </script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php include('core/functions/svg.php'); ?>
<div id="page" class="site">
    <header class="main_header">
        <div class="container">
            <h1 class="title">
                <a href="/">
                <svg class="logo_image">
                    <use xlink:href="#logo" />
                </svg>
                </a>
            </h1>
            <nav class="main_nav">
            <?php
                wp_nav_menu(array(
                        'menu' => 'Main nav',
                        'container' => '',
                        'menu_class' => 'nav navbar-nav'
                    )
                );
                ?>
            </nav>
            </div>
        </div>
    </header>
    <div class="main-container">
    

    <div id="content" class="main wrapper clearfix">