<div id="sidebar">
        	<div id="nav" class="borders">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </div>
            <?php if(!is_front_page()) {  dynamic_sidebar( 'sidebar-1' ); } ?>
        </div>
		