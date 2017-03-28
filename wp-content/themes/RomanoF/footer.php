</div>
<footer>
    <div class="footer-content">
        <div class="twitter">
            <h3 class="footer-heading"><?php echo __('Контакты', ''); ?></h3>
            <?php
            $phoneNumbers = array ('(096) 915 38 08  <span style="font-size: 14px; font-weight: 800; margin-left: 15px;">&#9993;</span> shop@RomanoF.com.ua', '(093) 589 55 62', '(066) 182 04 85');
            foreach ($phoneNumbers as $value) {
                echo '<p><span style="font-size: 14px; font-weight: 800">&#9990;</span> '.$value.'</p>';
            }

            ?>

        </div>
        <div class="sitemap">
            <h3 class="footer-heading"><?php echo __('Карта сайта', ''); ?></h3>
            <div class="column first">
                <a href="/home/"><?php echo __('Home', 'whitesquare'); ?></a>
                <a href="/about/"><?php echo __('About', 'whitesquare'); ?></a>
                <a href="/services/"><?php echo __('Services', 'whitesquare'); ?></a>
            </div>
            <div class="column">
                <a href="/partners/"><?php echo __('Partners', 'whitesquare'); ?></a>
                <a href="/customers/"><?php echo __('Support', 'whitesquare'); ?></a>
                <a href="/contact/"><?php echo __('Contact', 'whitesquare'); ?></a>
            </div>
        </div>
        <div class="social">
            <h3 class="footer-heading"><?php echo __('Мы в сети', 'RomanoF'); ?></h3>
            <a href="http://twitter.com/" class="social-icon twitter-icon"></a>
            <a href="http://facebook.com/" class="social-icon facebook-icon"></a>
            <a href="http://vk.com/" class="social-icon google-plus-icon"></a>
            <a href="http://vimeo.com/" class="social-icon-small vimeo-icon"></a>
            <a href="http://youtube.com/" class="social-icon-small youtube-icon"></a>
            <a href="http://flickr.com/" class="social-icon-small flickr-icon"></a>
            <a href="http://instagram.com/" class="social-icon-small instagram-icon"></a>
            <a href="/rss/" class="social-icon-small rss-icon"></a>
        </div>
        <div class="footer-logo">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-white.jpg" alt="RomanoF logo"></a>
            <p><?php echo __('Copyright © 2017 RomanoF. A <a href="https://github.com/seinaru">Seinaru</a> creation', 'seinaru'); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>