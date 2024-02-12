        <footer>
            <section class="top-footer">
                <!-- //* create first widget -->
                <div class="widget-area-1">
                    <a href="<?php echo esc_url( home_url()); ?>">
                        <?php dynamic_sidebar( 'footer-widget-01'); ?>
                    </a>
                </div>
                <!-- //* end of first widget -->

                <!-- //* create second widget -->
                <div class="widget-area-2">
                    <a href="<?php echo esc_url( home_url()); ?>">
                    <?php dynamic_sidebar( 'footer-widget-02'); ?>
                    </a>
                </div>
                <!-- //* end of second widget -->
            </section>
        </footer>
    </body>
</html>