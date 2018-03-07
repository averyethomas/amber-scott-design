    <footer>
        <div class="container">
            <div class="follow" id="follow">
                <h2>Follow</h2>
                <div class="separator"></div>
                <ul>
                    <?php asd_social(); ?>
                </ul>
            </div>
            <div class="contact" id="contact">
                <h2>Contact</h2>
                <div class="separator"></div>
                <ul>
                    <?php asd_contact(); ?>
                </ul>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-square.png" alt="Amber Scott Design, LLC" />
            <p>&COPY; Copyright <?php echo date("Y") . ' ';  bloginfo('name');?>. All rights reserved.</p>
        </div>
    </footer>
  </body>
</html>