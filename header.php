<html>
    <head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <script src="animscript.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700|Tinos:400,700italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    
    <!--Image Container-->
    <div class="img-container">
        <!--container-->
        <div class="container">

            <nav class="site-nav">
                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/bell.png" class="homebutton" /></a>
                <?php 

                    $args = array(
                        'theme_location' => 'primary',
                    );

                    wp_nav_menu($args);
                ?>
                
                <a href="https://www.facebook.com"><img src="<?php bloginfo('template_directory'); ?>/social/normal/facebook.png" class='social'/></a>
                <a href="https://www.twitter.com"><img src="<?php bloginfo('template_directory'); ?>/social/normal/twitter.png" class='social'/></a>
                
            </nav>

            <header class='site-head' >

                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description'); ?></h5>



            </header>
        
