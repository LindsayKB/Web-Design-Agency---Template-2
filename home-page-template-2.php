<?php
/**
 * This template displays full width pages.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 * 
 * Template Name: Landing Template 2
 */
/*Get the header*/
get_header('template-2'); ?>
<div class="landing-page-2">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div id="welcome" class="section">
			   <div class="inner-container">
					<h1><?php echo the_field( 'welcome_header' ); ?></h1>
					<h2><?php echo the_field( 'welcome_subheader' ); ?></h2>
				</div>
			</div>
<div id="services" class="section">
<div class="inner-container">
			<h2><?php echo the_field( 'services_header' ); ?></h2>
			  <div class="left">
			    <div class="services-content">
			  <h3><?php echo the_field( 'left_services_subheader' ); ?></h3>
			  <p><?php echo the_field( 'left_services_description' ); ?></p>
			  <a href="#"><button><?php echo the_field( 'left_services_btn' ); ?></button></a>
			  </div>
			  </div>
			  <div class="right">
			   <div class="services-content">
			  <h3><?php echo the_field( 'right_services_subheader' ); ?></h3>
			  <p><?php echo the_field( 'right_services_description' ); ?></p>
			  <a href="#"><button><?php echo the_field( 'right_services_btn' ); ?></button></a>
			  </div>
			  </div>
			  </div>
			</div>
   <div id="calculator" class="section">
   <div class="inner-container">
            <div class="left">
      <h2><?php echo the_field( 'calculator_header' ); ?></h2>
	  <p><?php echo the_field( 'calculator_description' ); ?></p>
	  <a href="#"><button><?php echo the_field( 'calculator_btn' ); ?></button></a>
	  </div>
	  <div class="right">
	  <img class="notAnimated" src="<?php echo the_field( 'calculator_image' ); ?>">
	  </div>
	  </div>
   </div>
   <div id="about" class="section">
     <div class="inner-container">
      <h2><?php echo the_field( 'about_header' ); ?></h2>
	  <p><?php echo the_field( 'about_description' ); ?></p>
	  <a href="#"><button><?php echo the_field( 'about_btn' ); ?></button></a>
	  <img class="notAnimated" src="<?php echo the_field( 'about_image' ); ?>">
	  </div>
   </div>
      <div id="contact" class="section">
            <div class="left">
			<img class="notAnimated" src="<?php echo the_field( 'contact_image' ); ?>">
	  </div>
	  <div class="right">
	        <h2><?php echo the_field( 'contact_header' ); ?></h2>
	  <p><?php echo the_field( 'contact_subheader' ); ?></p>
	  <a href="#"><button><?php echo the_field( 'contact_btn' ); ?></button></a>
	  </div>
   </div>
</div>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div>
<?php get_footer(); ?>
<!--Adding new file-->