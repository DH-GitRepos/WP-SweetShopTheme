<!DOCTYPE html>
<html <?php language_attributes(); ?> >
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Sally Sweets website">
      <title><?php single_post_title(); ?></title>
      <?php wp_head(); ?>
   </head>

   <body>

      <div id="container">

         <header id="main-header">

            <section id="header-address">
               <p>52a Derby Street, Leek, Staffordshire, ST13 5AJ. (01538) 567123</p>
            </section>

            <section id="header-logo">
               <img src="https://sallysweets-wp.local/wp-content/uploads/2024/03/sally-sweets-logo-25pc.webp" 
                    alt="Sally Sweets">
            </section>

            <!-- site-navigation -->
            <nav id="site-navigation">
               <?php wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'depth' => 0) ); ?>
            </nav>

         </header>

         <div class="content">
