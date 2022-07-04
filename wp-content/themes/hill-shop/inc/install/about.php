<?php

function hill_shop_about_menu() {
	add_theme_page( esc_html__( 'About Theme', 'hill-shop' ), esc_html__( 'About Theme', 'hill-shop' ), 'edit_theme_options', 'hill_shop-about', 'hill_shop_about_display' );
}
add_action( 'admin_menu', 'hill_shop_about_menu' );

function hill_shop_about_display(){
	?>
	<div class="hill_shop_about_data">
		<div class="hill_shop_about_title">
			<h1>Welcome to hill tech!</h1>
			<div class="hill_shop_about_theme">
				<div class="hill_shop_about_description">
					<p>
						hill tech is a powerful, modern and professional multipurpose WordPress theme. This theme fully customizable & beautiful WordPress theme suitable for blog, personal portfolio, business website. This hill_shop WordPress theme, carries an abundance of crucial features and functionalities. For instance, Social Icon, Transparent Header, featured slider, featured Section, About Section, Our Portfolio, Our team Section, Testimonial Slider, Our Services, Our Sponsors, Sticky Header, Social Information, Sidebar, Excerpt Options, and many more. All of these highly-customizable features and sections are completely responsive and absolutely easy to customize.
					</p>
				</div>
				<div class="hill_shop_about_image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				</div> 
			</div>
			<div class="hill_shop_about_demo">
				<div class="feature-section">
					<div class="about_data_hill_shop">
						<h3>Documentation</h3>
						<p>Getting started with a new theme can be difficult, But its installation and customization is so easy</p>
						<a href="<?php echo HILL_DOC_LINK;?>"><?php echo esc_html( 'Read Documentation', 'hill-shop' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_hill_shop">
						<h3>Recommended Plugins</h3>
						<p>Please install recommended plugins for better use of theme. It will help you to make website more useful</p>
						<a href="<?php echo esc_url(admin_url('/themes.php?page=tgmpa-install-plugins&plugin_status=activate'), 'hill-shop'); ?>"><?php echo esc_html( 'Install Plugins ', 'hill-shop' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_hill_shop">
						<h3>Free Theme Demo</h3>
						<p>You can check free theme demo before setup your website if you like demo then install theme</p>
						<a href="<?php echo HILL_DEMO_LINK;?>"><?php echo esc_html( 'Free Theme Demo ', 'hill-shop' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_hill_shop">
						<h3>Free VS Pro</h3>
						<p>You can check compare free version and pro version.</p>
						<a href="<?php echo HILL_PRO_LINK;?>"><?php echo esc_html( 'Compare free Vs Pro ', 'hill-shop' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="about">About</li>
		</ul> 
		<div id="about" class="tab-content current">
			<div class="about_section">
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2>Theme Customizer</h2>
					</div>
					<div class="about_theme_data">
						<p>All Theme Options are available via Customize screen.</p>
					</div>
					<div class="about_theme_btn">
						<a class="customize_btn button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>">Customize</a>
					</div>
				</div>
				<div class="theme_que theme_info">
					<div class="about_theme_que">
						<h2>Got theme support question?</h2>
					</div>
					<div class="about_que_data">
						<p>Get genuine support from genuine people. Whether it's customization or compatibility, our seasoned developers deliver tailored solutions to your queries.</p>
					</div>
					<div class="about_que_btn">
						<a class="support_forum button button-primary" href="<?php echo HILL_SUPPORT_LINK;?>">Support Forum</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>