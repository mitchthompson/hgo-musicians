<footer>
    <div id="footer-box-outter">
            <div id="footer-box-inner">
                <div class="footer-title" id="about-us">
                    <a href="#">ABOUT US</a>
                    <p>Nulla ultrices eget nisi sit amet aliquet. In pretium accumsan suscipit. Pellentesque volutpat nunc consectetur. In pretium accumsan suscipit.</p>
                </div><!--about-us-->
                <div id="footer-nav">
                    <?php wp_nav_menu(array('menu'=>'Footer Navigation', 
                            'container'  => 'ul',
                            'menu_class'=>'nav-footer',
                            'theme_location' => 'Navigation'
                           ));?>
                </div><!--footer-nav-->
            </div><!--footer-box-inner-->
            <div id="copyright">
                <a class="footer-title" href="#">FOLLOW US</a>
                <div id="social">
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/facebook.svg" alt="facebook.svg"></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/twitter.svg" alt="twitter.svg"></a>
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/instagram.svg" alt="instagram.svg"></a>
                </div><!--social-->
                <p>&copy; Musicians of the Houston Grand Opera 2016</p>
            </div><!--copyright-->
        </div><!--footer-box-outter-->
</footer>
</body>
</html>
<?php wp_footer()?>
