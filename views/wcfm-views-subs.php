<?php
global $WCFM, $wp_query;

?>

<div class="collapse wcfm-collapse" id="wcfm_subs_listing">

	<div class="wcfm-page-headig">
		<span class="fa fa-cubes"></span>
		<span class="wcfm-page-heading-text"><?php _e( 'Subscriptions', 'wcfm-custom-menus' ); ?></span>
		<?php do_action( 'wcfm_page_heading' ); ?>
	</div>
	<div class="wcfm-collapse-content">
		<div id="wcfm_page_load"></div>
		<?php do_action( 'before_wcfm_subs' ); ?>

		<div class="wcfm-container wcfm-top-element-container">
			<h2><?php _e('Subscriptions', 'wcfm-custom-menus' ); ?></h2>
			<div class="wcfm-clearfix"></div>
	  </div>
	  <div class="wcfm-clearfix"></div><br />


		<div class="wcfm-container">
			<div id="wcfm_subs_listing_expander" class="wcfm-content">

				<!----- Add Content Here ----->
				<?php
				echo do_shortcode( '[go_pricing id="c14bigblue_5cef8d584b5a4"]' );
				?>

				<div class="wcfm-clearfix"></div>
			</div>
			<div class="wcfm-clearfix"></div>
		</div>

		<div class="wcfm-clearfix"></div>
		<?php
		do_action( 'after_wcfm_subs' );
		?>
	</div>
</div>
