<?php
/**
 * The template for displaying 404 Not Found Page.
 * 
 * @link https://developer.wordpress.org/themes/basic/template-hierarchy/
 * 
 * @package bootstrap2wordpress
 * @since 2.0
 */

    get_header();
    get_template_part('template-parts/banner-no-bar', 'title'); 
?>

<div class="content-area">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 overflow-hidden">

          <h2 class="text-center"><?php esc_html_e( 'D\'oh!', 'bootstrap2wordpress' ); ?></h2>
          <div class="image-404 text-center">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/homer2.png" alt="404" class="img-fluid">
        </div>

        <h3 class="text-center"><?php esc_html_e( '"Oops! Looks like you\'ve wandered into Homer\'s D\'oh-main of broken links! Better make like a donut and roll back to safety. Mmm... donuts!".', 'bootstrap2wordpress' ); ?></h3>

        <div class="button-box text-center">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Back to Homepage', 'bootstrap2wordpress' ); ?></a>
        </div>

      </div>
    </div>
  </div>    
</div>


<?php
get_footer();