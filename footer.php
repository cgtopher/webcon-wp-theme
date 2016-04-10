     <footer class='site-footer clearfix'>
         
         <nav class='footer-nav'>
             
             <?php 

                        $args = array(
                            'theme_location' => 'footer'
                        );

                        wp_nav_menu($args);
             ?>
             
         </nav>
    </footer>


    <?php wp_footer(); ?>
    </div><!--/container-->
</div><!--/image-container-->
</body>
</html>