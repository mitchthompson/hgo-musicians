<footer>
    <div class="container" id="footer-box-outter">
    <div id="container">
        <div class="row">
            <div class="footer-title col-sm-4" id="about-us">
                <a href="<?php echo get_page_link(4); ?>">ABOUT US</a>
                <p>Nulla ultrices eget nisi sit amet aliquet. In pretium accumsan suscipit. Pellentesque volutpat nunc consectetur. In pretium accumsan suscipit.</p>
            </div><!--about-us-->
            <div class="col-sm-4" id="footer-nav">
                <?php wp_nav_menu(array('menu'=>'Footer Navigation', 
                        'container'  => 'ul',
                        'menu_class'=>'nav-footer',
                        'theme_location' => 'Navigation'
                       ));?>
            </div><!--foot-nav-->
            <div class="col-sm-4" id="copyright">
                <a href="https://twitter.com/HGO_Orchestra">FOLLOW US</a>
                <div id="social">
                    <a href="https://www.facebook.com/HGOrchestra/"><img src="<?php bloginfo('template_directory') ?>/images/facebook.svg" alt="facebook.svg"></a>
                    <a href="https://twitter.com/HGO_Orchestra"><img src="<?php bloginfo('template_directory') ?>/images/twitter.svg" alt="twitter.svg"></a>
                    <a href="https://www.instagram.com/hgo_orchestra/"><img src="<?php bloginfo('template_directory') ?>/images/instagram.svg" alt="instagram.svg"></a>
                </div><!--social-->
                <p>&copy; Musicians of the Houston</p>
                    <p>Grand Opera 2016</p>
            </div><!--copyright-->
        </div><!--row-->
    </div><!--container-->
    </div><!--footer-box-outter-->   
    <div id="disclaimer">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <p>This website is owned and operated by the musicians of the Houston Grand Opera Orchestra.  The site represents only the views, opinions, and positions of the musicians of the Houston Grand Opera Orchestra and their unions (American Federation of Musicians, Musicians' Local Union 65-699), and does not represent the views, opinions, and positions of the Houston Grand Opera Association.</p>
            </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<?php wp_footer()?>
