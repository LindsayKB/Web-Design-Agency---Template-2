<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=10" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
			<link rel="stylesheet" type="text/css" href="../wp-content/themes/vantage/css/custom-template-2.css">
	<?php wp_head(); ?>
	<script>
jQuery(document).ready(function( $ ) {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
  
        /* Check the location of each desired element */
        $('.section').each( function(i){
            var sectionName = $(this).attr('id');
			console.log("Section Name:" + sectionName);
            var bottom_of_object = $(this).position().top + ($(this).outerHeight())/4;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
				if( bottom_of_window > bottom_of_object ){
				    $(this).animate({'opacity': '1'}, 500, function() {
							// all should be done, as this one is the longest running animation
							setTimeout(function() {
								if (sectionName == "services"){
									$("#" + sectionName + " .inner-container .left").removeClass('notAnimated').addClass('slide-left');
									$("#" + sectionName + " .inner-container .right").removeClass('notAnimated').addClass('slide-right');
								}
								else if (sectionName == "calculator"){
									$("#" + sectionName + " .inner-container .right img").removeClass('notAnimated').addClass('slide-down');
								}
								else if (sectionName == "about"){
									$("#" + sectionName + " img").removeClass('notAnimated').addClass('zoom-in');
								}
								else if (sectionName == "contact"){
									$("#" + sectionName + " img").removeClass('notAnimated').addClass('flip');
								} 
							}, 500);
					});		
				}
                    
            });

});

});
         
    
	</script>
</head>

<body <?php body_class(); ?>>

<?php do_action('vantage_before_page_wrapper') ?>

<div id="page-wrapper">

	<?php do_action( 'vantage_before_masthead' ); ?>

	<?php if( ! siteorigin_page_setting( 'hide_masthead', false ) ) : ?>

		<?php get_template_part( 'parts/masthead-template-2', apply_filters( 'vantage_masthead_type', siteorigin_setting( 'layout_masthead' ) ) ); ?>

	<?php endif; ?>

	<?php do_action( 'vantage_after_masthead' ); ?>

	<?php vantage_render_slider() ?>

	<?php do_action( 'vantage_before_main_container' ); ?>

	<div id="main" class="site-main">
		<div class="full-container">
			<?php do_action( 'vantage_main_top' ); ?>
