<?php
/**
 * The Header file
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package bootstrap2wordpress
 * @since Bootstrap to WordPress 2.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Bootstrap -> WordPress with Bart Simpson</title>
    
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div id="top-navigation">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6">

            <?php

                wp_nav_menu(
                    array(
                        'theme_location'    =>  'primary', // as registered in functions.php
                        'depth'             =>   3, // as set up in CSS
                        'container'         =>  'nav', // HTML wrapper of menu ul
                        'container_class'   =>  'main-menu', // wrapper class
                        'menu_class'        =>  'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled', // classes of the menu ul tag
                        'fallback_cb'       =>  false // if PRIMARY MENU is not created, show nothing
                    )
                );

            ?> 

            <button type="button" class="navbar-open">
              <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
            </button>
          </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn">
            <i class="flaticon flaticon-close"></i>
          </div>
          <nav class="menu-box">
            <ul class="navigation clearfix"></ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- End -->