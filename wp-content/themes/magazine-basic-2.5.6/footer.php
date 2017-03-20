	</div>
    <?php
		if(get_option('uwc_sidebar_location') == "2") {   	
			get_sidebar(1);
		}
		if(get_option('uwc_site_sidebars') == "2" && get_option('uwc_sidebar_location') == "5") { 
			include(TEMPLATEPATH.'/sidebar2.php'); 
		}
		if(get_option('uwc_site_sidebars') == "2" && get_option('uwc_sidebar_location') == "4") {   	
			get_sidebar(1);
			include(TEMPLATEPATH.'/sidebar2.php');
		}
	?>
</div>
<!-- begin footer -->
<div id="footer">
    <?php printf(__("Copyright &copy; %d", "magazine-basic"), date('Y')); ?> <a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>. <?php _e("All Rights Reserved", "magazine-basic"); ?>.<br />
    <span class="red">Magazine Basic</span> <?php _e("theme designed by", "magazine-basic"); ?> <a href="http://wp-templates.ru"><span class="red">wordpress шаблоны</span></a>.<br />
</div>
<?php wp_footer(); ?>
<!-- Magazine Basic theme designed by c.bavota - http://themes.bavotasan.com -->
<?php if(get_option('uwc_google_analytics')) { echo stripslashes(get_option('uwc_google_analytics')); } ?>
</body>
</html>