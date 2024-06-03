            </div><!-- content -->

            <footer id="site-footer">

                <section id="site-footer-main">
            
                    <aside id="site-footer-main-address" class="site-footer-main-item">
                        <p>Find us</p>
                        <hr>
                        <ul>
                            <li><p>52a Derby Street<br>Leek<br>Staffordshire<br>ST13 5AJ.</p></li>
                            <li><p>(01538) 567123</p></li>
                        </ul>
                    </aside>

                    <aside id="site-footer-main-social" class="site-footer-main-item">
                        <p>Social</p>
                        <hr>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </aside>

                    <aside id="site-footer-main-navigation" class="site-footer-main-item">
                        <p>Navigation</p>
                        <hr>
                        <nav id="footer-navigation">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'depth' => 0) ); ?>
                        </nav>

                    </aside>

                </section>

                <section id="site-footer-bottom">

                    <p id="copyright"><?php bloginfo( 'name' ); ?>
                        &copy; <?php the_date("Y"); ?></p>

                </section>

            </footer><!-- site-footer -->

        </div><!-- container -->
        
        <?php wp_footer(); ?>

    </body>

</html>
