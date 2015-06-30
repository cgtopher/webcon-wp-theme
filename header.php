<html>
    <head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <script src="animscript.js"></script>
    <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    
    <!--Image Container-->
    <div class="img-container">
        <!--container-->
        <div class="container">

            <nav class="site-nav">
                <img src="<?php bloginfo('template_directory'); ?>/img/bell.png" />
                <?php 

                    $args = array(
                        'theme_location' => 'primary'
                    );

                    wp_nav_menu($args);
                ?>

            </nav>

            <header class='site-head' >

                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description'); ?></h5>



            </header>
        
