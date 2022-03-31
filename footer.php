<footer id="wp-footer" class="wp-footer">
    <div class="container">
        <div class="nav-container">
            <?php
            if (has_nav_menu('nav_footer')) {
                wp_nav_menu(array(
                    'theme_location' => 'nav_footer',
                    'menu_class' => 'footer-nav',
                    'container' => 'nav',
                    'menu_id' => 'footer-nav',
                    'depth' => 1
                ));
            }
            ?>
        </div>
        <div class="copyright">
            &copy; All rights reserved.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>