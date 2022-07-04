<?php
add_action('wp_head','hill_shop_head_style');
function hill_shop_head_style(){
	global $hill_global;
	?>
	<style type="text/css">
		.site-main .post, .site-main .page{
		    background-color: <?php echo $hill_global['color3'];?>;
		}
		.widget-area .widget{
		    background-color: <?php echo $hill_global['color3'];?>;
		}
	</style>
	<?php
}