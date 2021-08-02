        <div class="footer-widgets-section">
            <div class="container">
                <div class="footer-widget-left">
                    <a href="<?php home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/evaly-logo-dark.svg" alt="Evaly Logo">
                    </a>
                </div>
                <div class="footer-widget-right">
                    <ul class="evaly-footer-menu">
                        <?php

                            // Primary Navigation Menu
                            wp_nav_menu( [
                                'theme_location'    => 'footer_menu',
                                'menu_class'        => '',
                                'container'         => '<div>',
                                'container_class'   => 'menu-container',
                            ] );

                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <footer class="evaly-site-footer">
            <div class="container">
                <p class="footer-content">
                    All Rights Reserved by Evaly &copy; 2021
                </p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>