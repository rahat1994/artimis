<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- fevicon -->

   <?php
   wp_head();
   ?>

</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-3 logo_section">
               <div class="full">
                  <div class="center-desk">
                     <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        if(has_custom_logo()){
                     ?>
                        <div class="logo"> <a href="index.html"><img src="<?php echo esc_url( $logo[0] ) ?>" alt="<?php get_bloginfo( 'name' )?>"></a> </div>
                     <?php
                        } else{
                     ?>
                        <div class="logo"> <a href="index.html"><img src="<?php echo get_template_directory_uri() . "/assets/images/logo.png" ?>" alt="#"></a> </div>
                     <?php
                        }
                     ?>
                  </div>
               </div>
            </div>
            <div class="col-lg-9">
               <div class="menu-area">
                  <div class="limit-box">
                     <nav class="main-menu">
                        <ul class="menu-area-main"></ul>
                           <?php wp_nav_menu(
                                 array( 
                                    'theme_location' => 'header-menu', 
                                    'walker' => new ArtimisMenuWalker()
                                    ) ,

                              ); 
                           ?>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
   </header>
   <!-- end header -->

   <!-- revolution slider -->
   <div class="banner-slider">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-7">
               <div id="slider_main" class="carousel slide" data-ride="carousel">
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="<?php echo esc_url( $logo[0] ) ?>" alt="<?php get_bloginfo( 'name' )?>" />
                     </div>
                     <div class="carousel-item">
                        <img src="<?php echo esc_url( $logo[0] ) ?>" alt="<?php get_bloginfo( 'name' )?>" />
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
            <div class="col-md-5">
               <div class="full slider_cont_section">
                  <h4>More Featured in</h4>
                  <h3>Jack Blogger</h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                  <div class="button_section">
                     <a href="about.html">Read More</a>
                     <a href="contact.html">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end revolution slider -->