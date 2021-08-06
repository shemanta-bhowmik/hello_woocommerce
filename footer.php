        <div class="evaly-footer-widgets-section">
            <div class="container">
                <div class="evaly-footer-widget-left evaly-footer-widget">
                    <a class="evaly-footer-logo" href="<?php home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/evaly-logo-dark.svg" alt="Evaly Logo">
                    </a>
                    <p class="footer-content">
                        At least five people including a child At least five people including a child.
                    </p>
                </div>
                <div class="footer-widget-center evaly-footer-widget">
                    <h3 class="evaly-title">Evaly Title</h3>
                    <p class="footer-content">
                    At least five people including a child were killed in a head-on collision between two buses on Dhaka-Rangpur highway in Mithapukur upazila of Rangpur on Sunday morning.
                    </p>
                </div>
                <div class="footer-widget-right evaly-footer-widget">
                    <h3 class="evaly-title">Evaly Title</h3>
                    <p class="footer-content">
                    At least five people including a child were killed in a head-on collision between two buses on Dhaka-Rangpur highway in Mithapukur upazila of Rangpur on Sunday morning.
                    </p>
                </div>
            </div>
        </div>
        <footer class="evaly-site-footer">
            <div class="container">
                <div class="evaly-footer-left evaly-footer">
                    <p class="footer-content">
                        All Rights Reserved by Evaly &copy; 2021
                    </p>
                </div>  
                <div class="evaly-footer-right evaly-footer">
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
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>